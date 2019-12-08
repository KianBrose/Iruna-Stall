<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ai;
use Auth;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\StoreIrunaItem;

class AiController extends Controller
{
    public function show($id){
        $item = Ai::where('item_id', $id)->firstOrFail();
        return view('show', compact('item'));
    }
    
    public function edit($id){
        $item = Ai::where('item_id', $id)->firstOrFail();
        if($item->owner_id != Auth::user()->user_id){
            abort(404);
        }
        else{
            return view('item.ai', compact('item'));
        }
    }

    public function update($id){
        if(Auth::check()){
            $item = Ai::where('item_id', $id)->firstOrFail();
            if($item->owner_id != Auth::user()->user_id){
                abort(403);
            }
            else{
                if($this->validColor(request('color'))){
                    $item->color = request('color');
                }
                
                if(strlen(request('price')) > 12){
                    $item->price = 999999999999;
                }
                else if(strlen(request('price')) < 1){
                    $item->price = 1;
                } else{
                    if(in_array(strtolower(substr(request('price'), -1)), StoreIrunaItem::PriceType)){
                        $priceDenote = strtolower(substr(request('price'), -1));
                        $priceNumber = substr(request('price'), 0, -1);
                        try{
                            if($this->validConvertPrice($priceDenote, $priceNumber)){
                                $price = $this->convertPrice($priceDenote, $priceNumber);
                                $item->price = $price;
                            } 
                        } catch(Exception $e){
            
                        }
                    }
                    if(is_numeric(request('price'))){
                        $item->price = request('price');
                    } 
                }

                if($this->validNumber(request('quantity'))){
                    if((int)request('quantity') > 9999){
                        $item->quantity = 9999;
                    } 
                    else if((int)request('quantity') < 1)
                    {
                        $item->quantity = 1;
                    } else{
                        $item->quantity = request('quantity');
                    }
                    
                } 
                
                $item->save();

                Alert::toast('Successfully edited an item', 'success');
                return redirect()->back();
            }

        }
        else{
            abort(403);
        }
       
    }
    
    public function delete($id){
        if(Auth::check()){
            $item = Ai::where('item_id', $id)->firstOrFail();
            if($item->owner_id != Auth::user()->user_id){
                abort(403);
            }
            else{
                Ai::where('item_id', $id)->firstOrFail()->delete();
                //$aiitem = Ai::where('owner_id', auth()->id())->get();
                Alert::toast('You have deleted an item', 'warning');
                return redirect()->back();
            }

        }
    }

    public function validColor($color){
        if($color == 'Red' || $color == 'Blue' || $color == 'Green'){
            return true;
        }
        else{
            return false;
        }
    }

    public function validNumber($number){
        $number = (string) $number;
        if(ctype_digit($number)){
            return true;
        }
        else{
            return false;
        }
        
    }


       /**
     * 
     * check if the price is valid
     * @return bool
     */
    public function validConvertPrice($priceDenote, $priceNumber){
        if($priceDenote == 'b'){
            
            if($this->validBillionPrice($priceDenote, $priceNumber)){
                return true;
            }else{
                return false;
            }
            
        }
        if($priceDenote == 'm'){
            
            if($this->validMillionPrice($priceDenote, $priceNumber)){
                return true;
            } else{
                return false;
            }
        }

        if($priceDenote == 'k'){
            if($this->validThousandsPrice($priceDenote, $priceNumber)){
                return true;
            } else{
                return false;
            }
        }
    }
    
    /**
     * Check for valid billion price
     * @return bool
     */
    private function validBillionPrice($priceDenote, $priceNumber){
        if(is_numeric($priceNumber)){
                
            if((int)$priceNumber * 1000000000 > 999999999999){
                return false;
            } else{
                
                return true;
            }
        } else{
            return false;
        }
    }
    /**
     * check for valid millions price
     */

    private function validMillionPrice($priceDenote, $priceNumber){
        if(is_numeric($priceNumber)){
            if((int)$priceNumber * 1000000 > 999999999999){
                return false;
            } else{
                return true;
            }
        } else{
            return false;
        }
    }

    /**
     * Check for valid thousands price
     */
    private function validThousandsPrice($priceDenote, $priceNumber){
        if(is_numeric($priceNumber)){
            if((int)$priceNumber * 1000 > 999999999999){
                return false;
            } else{
                return true;
            }
        } else{
            return false;
        }
    }

    public function convertPrice($priceDenote, $priceNumber){
        if($priceDenote == 'b'){
            return (int)$priceNumber * 1000000000;
        } 
        if($priceDenote == 'm'){
           return (int)$priceNumber * 1000000;
        }
        if($priceDenote == 'k'){
            return (int)$priceNumber * 1000;
        }
    }
    
}
