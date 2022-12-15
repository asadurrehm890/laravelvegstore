<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class blogsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
     {
         $allblogs=Blog::all()->sortDesc();
         return view('blogs.index', ['blogs'=>$allblogs]);
     }
      public function index2()
       {
           $allblogs=Blog::all()->sortDesc();
           return view('blog', ['blogs'=>$allblogs]);
       }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nb=new Blog;
        $nb->title=$request->title;
        $nb->img=$request->img;
        $nb->desc=htmlentities(htmlspecialchars($request->content));
        $nb->save();
        return redirect()->route('blogs.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sb=Blog::find($id);
        return view('blogs.show', ['sblog'=>$sb]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $eblog=Blog::find($id);
        return view('blogs.edit', ['eblog'=>$eblog]);
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
        $ub=Blog::find($id);
        $ub->title=$request->title;
        $ub->desc=htmlentities(htmlspecialchars($request->content));
        $ub->img=$request->img;
        $ub->save();
        return redirect()->route('blogs.index')->with('messup', 'blog is updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $del=Blog::find($id);
        $del->delete();
        return redirect()->route('blogs.index')->with('mess', 'blog is deleted successfully');
    }
}
