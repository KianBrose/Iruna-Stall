<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests\editProfile;
use App\Mail\PasswordChange;
use Auth;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;


class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function update(Request $request){
        $userMail = $request->user();
        

        if ( !Hash::check(request('password'), auth()->user()->password) ) {
            return redirect()->back()->withErrors(['current_password' => trans('Your current password is incorrect.')]);
        } else{
            if(auth()->user()->email == request('email')){
                DB::table('password_resets')->insert([
                    'email' => $request->email,
                    'token' => str_random(60),
                    'created_at' => Carbon::now()
                ]);

                    $tokenData = DB::table('password_resets')
                                ->where('email', $request->email)->first();

                    if ($this->sendResetEmail($userMail, $request->email, $tokenData->token)) {
                        return redirect()->back()->with('status', trans('A reset link has been sent to your email address.'));
                    } else {
                        return redirect()->back()->withErrors(['error' => trans('A Network Error occurred. Please try again.')]);
                    }
                }
            else{
                return redirect()->back()->withErrors(['current_email' => trans('Your email does not match with our records.')]);
            }
        }

       
    }

    private function sendResetEmail($userEmail, $email, $token)
        {
        //Retrieve the user from the database
        $user = User::where('email', $email)->select('firstname', 'email')->first();
        //Generate, the password reset link. The token generated is embedded in the link
        $link = config('base_url') . 'password/reset/' . $token . '?email=' . urlencode($user->email);

            try {
                return Mail::to($userEmail)->send(new PasswordChange($link))->render();
            } catch (\Exception $e) {
                return false;
            }
        }
    
    public function resetPassword(Request $request)
        {
            //Validate input
            $validator = Validator::make($request->all(), [
                'email' => 'required|exists:users,email',
                'password' => 'required|confirmed'
            ]);
        
            if ($validator->fails()) {
                return redirect()->back()->withErrors(['email' => 'Please complete the form']);
            }
        
            $password = $request->password;
            $tokenData = DB::table('password_resets')
            ->where('token', $request->token)->first();
            // Redirect the user back to the password reset request form if the token is invalid
            if (!$tokenData) return view('auth.passwords.email');
        
            $user = User::where('email', $tokenData->email)->first();
            // Redirect the user back if the email is invalid
            if (!$user) return redirect()->back()->withErrors(['email' => 'Email not found']);
            //Hash and update the new password
            $user->password = Hash::make($password);
            $user->update(); //or $user->save();
        
            //login the user immediately they change password successfully
            Auth::login($user);
        
            //Delete the token
            DB::table('password_resets')->where('email', $user->email)
            ->delete();
        
            if ($this->sendSuccessEmail($tokenData->email)) {
                return view('welcome');
            } else {
                return redirect()->back()->withErrors(['email' => trans('A Network Error occurred. Please try again.')]);
            }
        
        }
    
    private function sendSuccessEmail($email){

    }

}
