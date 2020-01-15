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
use Illuminate\Support\Str;
use App\Ai;
use App\Equipment;
use App\Items;
use App\Relic;
use App\Xtal;
use Illuminate\Notifications\Messages\MailMessage;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Password;

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
            $broker = $this->getBroker();
            $response = Password::broker($broker)->sendResetLink($request->only('email'), function (Message $message) {
                $message->subject('Your password reset link');
            });
            switch ($response) {
                case Password::RESET_LINK_SENT:
                    Alert::toast('We sent you a link to reset your password', 'success');
                    return redirect()->back()->with('status', trans('A reset link has been sent to your email address.'));
                case Password::INVALID_USER:
                default:
                    $this->response->error('Invalid email or email does not exist', 422);
            }
            /*if(auth()->user()->email == request('email')){
                DB::table('password_resets')->insert([
                    'email' => $request->email,
                    'token' => Str::random(60),
                    'created_at' => Carbon::now()
                ]);

                    $tokenData = DB::table('password_resets')
                                ->where('email', $request->email)->first();

                    //if ($this->sendResetEmail($userMail, $request->email, $tokenData->token)) {
                        if($this->password->sendResetLink()){
                        return redirect()->back()->with('status', trans('A reset link has been sent to your email address.'));
                    } else {
                        return redirect()->back()->withErrors(['error' => trans('A Network Error occurred. Please try again.')]);
                    }
            }
            else{
                return redirect()->back()->withErrors(['current_email' => trans('Your email does not match with our records.')]);
            }*/
        }

       
    }

    private function sendResetEmail($userEmail, $email, $token)
        {
        //Retrieve the user from the database
        $user = User::where('email', $email)->select('email')->first();
        //Generate, the password reset link. The token generated is embedded in the link
        $link = 'https://irunastall.com/password/reset/' . $token . '?email=' . urlencode($user->email);

        try {
                (new MailMessage)->greeting('Hello!')
                ->line('Please click the button below to change your password')
                ->action('Change password', $link)
                ->line('Thank you for using our application');
                return redirect()->back()->withErrors(['success' => trans('check your inbox')]);
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['mailError' => trans('An errors has occured')]);
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


    public function delete(Request $request){
        $user = $request->user();

        if ( !Hash::check(request('password'), auth()->user()->password) ) {
            return redirect()->back()->withErrors(['wrong_password' => trans('Your current password is wrong')]);
        } else{
            if(auth()->user()->email == request('email')){
                auth()->user()->activate = '2';
                $this->deleteAllItems();
                Alert::toast('Successfully deactivated your account', 'success');
                redirect('/');
                auth()->logout();
               
                
            }
            return redirect()->back()->withErrors(['wrong_email' => trans('Your current password is wrong')]);

           
        }
    }

    public function sendEmail($email_address)
    {
        $credentials = ['email' => $email_address];
        $response = Password::sendResetLink($credentials, function (Message $message) {
            $message->subject($this->getEmailSubject());
        });

        switch ($response) {
            case Password::RESET_LINK_SENT:
                return redirect()->back()->with('status', trans($response));
            case Password::INVALID_USER:
                return redirect()->back()->withErrors(['email' => trans($response)]);
        }
    }

    public function getBroker()
    {
        return property_exists($this, 'broker') ? $this->broker : null;
    }

    public function deleteAllItems(){
        Relic::where('owner_id', auth()->user()->user_id)->delete();
        Ai::where('owner_id', auth()->user()->user_id)->delete();
        Equipment::where('owner_id', auth()->user()->user_id)->delete();
        Items::where('owner_id', auth()->user()->user_id)->delete();
        Xtal::where('owner_id', auth()->user()->user_id)->delete();

    }
}


