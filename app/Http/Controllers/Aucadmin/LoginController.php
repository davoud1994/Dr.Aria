<?php

namespace App\Http\Controllers\Aucadmin;

use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
  
    public function login(Request $request)
    {
       $credentials = ['name' => $request->nameform, 'password' => $request->password];
  
      if ($credentials['name'] =='admin' && $credentials['password'] === "0000"){
        // رمز عبور مطابقت داشته باشد
        $user = User::where('name', $request->nameform)->first();
        $user->password = Hash::make($request->password);
        $user->save();
        // Auth::user($user);
         session()->put('user', $user);  
        $info_order =Order::paginate(10); 
       
        return view('back.tabel_order', compact('info_order'));
        // return redirect()->route('home');
        
          // return response()->json(['success' => true]);
      }  
     

        else {
          $msg='اطلاعات شما صحیح نیست مجدد تلاش کنید';
          
          return redirect(route('home'))->with('danger', $msg);
        // رمز عبور یا نام کاربری نامعتبر باشد
        // return response()->json(['error' => 'نام کاربری یا رمز عبور نامعتبر است.'], 300);
      }

      
    
    
    }
 
   
public function paginate(Request $request)
{
    // اجرای کد مربوط به درخواست GET و پیجینیشن
    $info_order = Order::paginate(10);
    return view('back.tabel_order', compact('info_order'));
}

    
  }

