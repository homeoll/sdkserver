<?php

namespace App\Http\Middleware;

use Closure;

class ttMiddleware
{
    /**
     * ���������������
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        
        print_r('ttMiddleware');
        return $next($request);
   
        //return redirect('view');
        /*
        
        if ($request->input('age') <= 200) {
            return redirect('view');
        }

        return $next($request);
        */
        
        
    }

}