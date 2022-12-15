<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Wish;
use Illuminate\Support\Facades\Auth;


class cartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allcart=Cart::all();
        return view('carts.index', ['carts'=>$allcart]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $ce=Cart::where('userid','=',Auth::user()->id)->get();
        foreach ($ce as $c) {
          if($c->prodid==$request->cpid){
             return redirect()->route('shop')->with('message','Product Already exist in cart');
          }
        }



        $ncart=new Cart;
        $ncart->name=$request->cname;
        $ncart->price=$request->cprice;
        $ncart->description=$request->cdesc;
        $ncart->img=$request->cimg;
        $ncart->prodid=$request->cpid;
        $ncart->subtotal=$request->cprice;
        $ncart->qty=1;
        $ncart->userid=Auth::user()->id;
        $ncart->save();
        return redirect()->route('shop')->with('message','Product is added into the cart');

    }



    public function storewish(Request $request)
    {
        $ce=Wish::where('userid','=',Auth::user()->id)->get();

        foreach ($ce as $c) {
          if($c->prodid==$request->cpid){
             return redirect()->route('shop')->with('message','Product Already exist in wishlist');
          }
        }

        $ncart=new Wish;
        $ncart->name=$request->cname;
        $ncart->price=$request->cprice;
        $ncart->description=$request->cdesc;
        $ncart->img=$request->cimg;
        $ncart->prodid=$request->cpid;
        $ncart->subtotal=$request->cprice;
        $ncart->qty=1;
        $ncart->userid=Auth::user()->id;
        $ncart->save();
        return redirect()->route('shop')->with('message','Product is added into the Wishlist');


    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delpro=Cart::find($id);
        $delpro->delete();
        return redirect()->route('carts.index');
    }
    public function destroywish(Request $req)
    {
        $delpro=Wish::find($req->wid);
        $delpro->delete();
        return redirect()->route('wishlist');
    }

    public function inc(Request $req){
      $ca=Cart::find($req->idd);
      $ca->qty=$ca->qty+1;
      $ca->subtotal=$ca->price*$ca->qty;
      $ca->save();
      return redirect()->route('carts.index');
    }
    public function dec(Request $req){
      $ca=Cart::find($req->idd);
      if($ca->qty>1){
      $ca->qty=$ca->qty-1;
      $ca->subtotal=$ca->price*$ca->qty;

      $ca->save();
     }
      return redirect()->route('carts.index');
    }











    public function checkout(){
      $allcart=Cart::all();
      return view('checkout', ['carts'=>$allcart]);
    }


    public function showlist(){
      $allwish=Wish::all();
      return view('carts.wishlist', ['carts'=>$allwish]);
    }

}
