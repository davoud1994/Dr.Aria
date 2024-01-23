<?php

namespace App\Http\Controllers;
use App\Models\Footer;
use App\Models\Order;
use Exception;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $info_footer = Footer::all();
        
        return view('front.page_order',compact('info_footer'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    
        $request->validate(['name'=>['required', 'string', 'max:255'],
        'lastname'=>['required', 'string', 'max:255'],
        'email'=>['nullable',
        'email',
        'regex:/^[A-Za-z0-9._%+-]+@gmail\.com$/i',
        ], // اینجا فرمت خاص برای ایمیل مدنظر شما قرار گرفته است
        'cellphone' => ['required', 'regex:/^[0-9]{11}$/'],
        'address'=>['required','string','max:255'],
        'order_category'=>['required'], // تعیین گزینه‌های ممکن برای دراپ‌دان باکس
        ]);  
        
    
        $order=new order(['name'=>$request->name,
        'Lastname'=>$request->lastname,
        'email'=>$request->email,
        'Cellphone'=>$request->cellphone,
        'Address'=>$request->address,
        'category_order'=>$request->order_category,
    ]);
       try{
        $order->save();
    }catch(Exception $exception){
            switch($exception->getcode()){
               case 23000:
                $msg ='ایمیل تکراری میباشد';  
                break;
            }
            return redirect(route('orders'))->with('error',$msg);
    }
        // اعلان موفقیت
        $msg='سفارش شما با موفقیت ثبت شد بعد از بررسی های لازم با شما تماس گرفته خواهد شد';
        return redirect(route('orders'))->with('success',$msg);
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        //
    }
}
