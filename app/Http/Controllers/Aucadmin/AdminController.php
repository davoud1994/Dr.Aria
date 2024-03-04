<?php

namespace App\Http\Controllers\Aucadmin;

use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;


class AdminController extends Controller
{

  // public function login(Request $request)
  // {
  //   $credentials = ['name' => $request->nameform, 'password' => $request->password];
  //   $user = User::where('name', $request->nameform)->first();
    //  $user->password = Hash::make($request->password);
    // $user->save();
    
    

    // if ($credentials['name'] === $user->name && $credentials['password'] === $request->password) {
      
      //  if(!Auth::check()){
      //   dd('yes');
      // }


      // Auth::user($user);
      // session()->put('user', $user);
      // $info_order = Order::paginate(10);

      // return view('back.tabel_order', compact('info_order'));
      // return redirect()->route('home');

      // return response()->json(['success' => true]);
    // } else {
    //   $msg = 'اطلاعات شما صحیح نیست مجدد تلاش کنید';

    //   return redirect(route('home'))->with('danger', $msg);
    //   // رمز عبور یا نام کاربری نامعتبر باشد
    //   // return response()->json(['error' => 'نام کاربری یا رمز عبور نامعتبر است.'], 300);
    // }
  // }
  // }

  // public function index(Request $request)
  // {
  //   // اجرای کد مربوط به درخواست GET و پیجینیشن
  //   dd(1);
  //   $info_order = Order::paginate(10);
  //   return view('back.tabel_order', compact('info_order'));
  // }


  public function login(Request $request)
  {

      $credentials = $request->only('nameform', 'password');
      
  
          //  $password = bcrypt($request->password); 
          //  $user = User::where('nameform', $request->nameform)->first();
          //  $user->password =$password;
          //  $user->save();
          // $hashedPassword = Hash::make('password');
    
     
      
      if (Auth::attempt($credentials)){ 
        
       return response()->json(['success' => true]); 
      //  $info_order = Order::paginate(10);
      // return view('back.tabel_order', compact('info_order'));
    
          // احراز هویت موفقیت آمیز بوده است
          //  return redirect()->intended('/home'); // مسیر مورد نظر برای ورود موفقیت‌آمیز
      } else{
          // احراز هویت ناموفق بوده است
           
             return response()->json(['error' => 'نام کاربری یا رمز عبور نامعتبر است.'], 300);
            //  $msg = 'اطلاعات شما صحیح نیست مجدد تلاش کنید';
           
            //  return redirect(route('home'))->with('danger', $msg);
          // return redirect()->back()->withInput()->withErrors(['msg' => 'اطلاعات وارد شده صحیح نیستند']);
      }
  }
  
public function index(){
    $info_order = Order::paginate(10);
    return view('back.tabel_order', compact('info_order'));
}


public function rigester(Request $request){

  $request->validate([
    'namerig' => 'required',
    'password_rig' => 'required'
]);



    $user=new User();
    $user->nameform = $request->namerig;
    $user->role =2;
    $user->password=hash::make($request->password_rig);
    $user->save();
    return response()->json(['success' => true]); 
    // $msg = 'اطلاعات شما با موفقیت ثبت شد';

    // return redirect(route('home'))->with('success', $msg);
    // return redirect()->intended('/home');
}  

}
