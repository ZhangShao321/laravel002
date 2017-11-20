<?php

namespace App\Http\Middleware;

use Closure;
use Session;
class AdminLoginMiddleware
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
         $id = session('aid');

       if(!$id){

            $ip = $request->ip();

            $str = '['.date('Y-m-d H:i:s',time()).']::ip地址'.$ip."\r\n";

            file_put_contents('adminlogin.txt',$str,FILE_APPEND);

            return redirect('/admin/login');
        } else {

            return $next($request);

        }
          var_dump($id);
    }
}
