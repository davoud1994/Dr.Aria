<?php

namespace App\Http\Controllers\Aucadmin;

use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

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
        return response()->json(['success' => true]);
      } else {
        // رمز عبور یا نام کاربری نامعتبر باشد
        return response()->json(['error' => 'نام کاربری یا رمز عبور نامعتبر است.'], 300);
      }
    }

    public function index_members(){
      
      $info_order =Order::all();
      return view('back.tabel_order', compact('info_order'));

    }

  }

