<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class AuthenticateAccessToAdminpage
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $user = User::where('nameform', $request->nameform)->first();
        if (!$user || $user->role !==1){
            
            return response()->json(['error' => 'نام کاربری یا رمز عبور نامعتبر است.'], 300);
            // $msg = 'دسترسی مجاز نمیباشد';
            // return redirect(route('home'))->with('danger', $msg);
        }
       
     return $next($request);

   
     
    }
}
