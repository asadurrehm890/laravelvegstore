<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\User;

use Illuminate\Support\Facades\Auth;


class checksuperadmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $gh=User::all();
        foreach ($gh as $g) {

            if($g->admin==true){
              if(!Auth::check()){
                 return redirect()->route('login');
               }else{
                 if(Auth::user()->admin==true){
                   return $next($request);
                 }else{
                   return redirect()->route('login');
                 }
               }
            }
        }
        return redirect()->route('setadmin');


    }
}
