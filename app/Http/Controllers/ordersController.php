<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;

class ordersController extends Controller
{
    public function order(Request $req){
        $allcart=Cart::where('userid','=', Auth::user()->id)->get();


          $new=new Order;
          $new->name=$req->oname;
          $new->email=$req->oemail;
          $new->phone=$req->ophone;
          $new->country=$req->ocountry;
          $new->Address=$req->oaddress;
          $new->zip=$req->ozip;
            foreach($allcart as $one){
          $new->prods=$new->prods.';'.$one->prodid.';'.$one->name.';'.$one->qty.';'.$one->subtotal;
              $one->delete();
          }
          $new->total=$req->ototal;
          $new->userid=$req->ouser;
          $new->save();

          return redirect()->route('thanks');
    }

    public function disp(){
      $allorders=Order::all()->sortDesc();
      return view('admin.orders', ['orders'=>$allorders]);
    }
}
