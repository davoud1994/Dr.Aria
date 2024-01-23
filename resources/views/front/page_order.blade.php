@extends('front.layouts')

<style>


    form {
        
        background: #e2fff8;
        border-radius:10px;
        border-color: #2182e2; 
        border-width: 5px;
        border-style: solid;
        width: 500px;
        max-width: 1000px;
        margin:100 auto;
        display: flex;
        flex-direction: column;
        align-items: center; 
        text-align: right; /* اضافه کردن این خط برای انتقال متن به سمت راست */
    }

    .div-form {
        margin-bottom:50px;
        margin-right:15px;
        width: 300px;
        
    }

    label {
        display: block;
        margin-bottom: 50px;
        font-weight: bold;
        font-size: 20px;
        color: black;
    }

    input,
    select {
        width: 100%;
        padding: 8px;  
        margin-left:20px;
        text-align: right;
        /* font-size: 140px; */
    }

    .input_order{
       font-size:20px; 
       font-family:vazir;
       text-align: right;
    }

    .button1 {
        background-color: #ccddd9;
        color: rgb(47, 114, 168);
        padding: 20px;
        border: none;
        cursor: pointer;
        font-weight:500;
        font-size: 20px;
    } 

    .div-buttom{
      margin-bottom: 20px; 
      
      
    }

    .title{
        line-height:50px;
        font-size: 20px;
    }

  
    @media screen and (max-width: 600px) {
        form {
            max-width: 100%;
            margin-left: 10px;
        }
    }
</style>

@section('form')



    <form action="{{route('submit_order')}}" method="POST">
        <div class='title'>لطفا فرم را با اطلاعات صحیح کامل کنید</div>
        @csrf
        <div class="div-form ">
            <label for="name">:نام</label>
            <input class="input_order" type="text" id="name" name="name" value='{{old("name")}}' >
        </div>

        <div class="div-form ">
            <label for="lastname">:نام خانوادگی</label>
            <input class="input_order" type="text" id="lastname" name="lastname" value='{{old("lastname")}}' >
        </div>
         
        <div class="div-form ">
          <label for="cellphone">:تلفن</label>
          <input class="input_order" type="text" id="cellphone" name="cellphone" value='{{old("cellphone")}}' >
      </div>

      <div class="div-form ">
        <label for="email">:ایمیل</label>
        <input class="input_order" type="email" id="email" name="email" value='{{old("email")}}' >
    </div>

        <div class="div-form ">
            <label for="address">:نشانی</label>
            <textarea class="input_order" type="text" id="address" name="address" >{{old("address")}} </textarea>
        </div>

       
        <div class="div-form">
            <label for="order_category">:پکیج مورد نظر</label>
            <select id="order_category" name="order_category">
                <option selected disabled>انتخاب کنید</option>
                <option value="طلایی" {{ old('order_category') == 'طلایی' ? 'selected' : '' }}>طلایی</option>
                <option value="نقره ای" {{ old('order_category') == 'نقره ای' ? 'selected' : '' }}>نقره ای</option>
                <option value="برنزی" {{ old('order_category') == 'برنزی' ? 'selected' : '' }}>برنزی</option>
                <!-- دیگر گزینه‌ها را اضافه کنید -->
            </select>
        </div>
        
        <div class="div-buttom">
            <button class='button1' type="submit">ثبت سفارش</button>
        </div>
    </form>
@endsection


