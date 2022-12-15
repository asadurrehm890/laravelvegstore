<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;
use App\Models\Blog;

class productsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allprods=Product::all();
        return view('products.index', ['prods'=>$allprods]);
    }
    public function index2()
    {
        $allprods=Product::all()->sortDesc();
        return view('shop', ['prods'=>$allprods]);
    }
    public function index3()
    {
        $allprods=Product::all()->sortBy('price');
        return view('shop', ['prods'=>$allprods]);
    }
    public function index4()
    {
        $allprods=Product::all()->sortByDesc('price');
        return view('shop', ['prods'=>$allprods]);
    }
    public function index5(Request $req)
    {
        $allprods=Product::where('name', 'LIKE','%'.$req->search.'%' )->get();
        return view('shop', ['prods'=>$allprods]);
    }

    public function index6()
    {
        $allblogs=Blog::all()->sortDesc()->take(3);
        $allprods=Product::all()->sortDesc();
        return view('home', ['prods'=>$allprods, 'blogs'=>$allblogs]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newpr=new Product;
        $newpr->name=$request->prname;
        $newpr->price=$request->prprice;
        $newpr->weight=$request->prweight;
        $newpr->description=$request->prdesc;
        $newpr->img=$request->primg.','.$request->primg1.','.$request->primg2.','.$request->primg3;
        $newpr->save();
        return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $single=Product::find($id);
        $allprods=Product::all()->sortDesc();
        return view('products.show', ['single'=>$single, 'prods'=> $allprods]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $proup=Product::find($id);
        return view('products.edit',compact('proup'));
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
        $upro=Product::find($id);
        $upro->name=$request->prname;
        $upro->price=$request->prprice;
        $upro->weight=$request->prweight;
        $upro->description=$request->prdesc;
        $upro->img=$request->primg.','.$request->primg1.','.$request->primg2.','.$request->primg3;
        $upro->save();
        return redirect()->route('products.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delpro=Product::find($id);
        $delpro->delete();
        return redirect()->route('products.index');
    }
}
