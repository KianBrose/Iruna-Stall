<?php

namespace App\Http\Controllers;

use App\Relic;
use Illuminate\Http\Request;
use Auth;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\StoreIrunaItem;

class RelicController extends Controller
{
    public function update($id){
        if(Auth::check()){
            $item = Relic::where('item_id', $id)->firstOrFail();
            if($item->owner_id != Auth::user()->user_id){
                abort(403);
            } else{
                
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
    }

    public function delete($id){
        if(Auth::check()){
            $item = Relic::where('item_id', $id)->firstOrFail();
            if($item->owner_id != Auth::user()->user_id){
                abort(403);
            }
            else{
                Relic::where('item_id', $id)->firstOrFail()->delete();
                Alert::toast('You have deleted an item', 'warning');
                return redirect('/viewitem');
            }

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

    /**
     * convert price from k/m/b to numeric value
     * 
     */
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
