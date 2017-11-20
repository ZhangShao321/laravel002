<?php

namespace App\Http\Middleware;

use Closure;

class FilmLoginMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $id = session('uid');

        if(!$id){

            $ip = $request->ip();

            $str = '['.date('Y-m-d H:i:s',time()).']::ip地址'.$ip."\r\n";

            file_put_contents('FileLoginid.txt',$str,FILE_APPEND);

            return redirect("/FilmAdmins/FilmLogin");
        } else {

            return $next($request);

        }
    }
}
