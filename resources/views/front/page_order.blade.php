@extends('front.layouts')
@if (Route::has('orders'))
    <title> فرم سفارش</title>
@endif
@section('style.orders')
    <style>
        .alert {
            display: none;
        }

        #submit-form{
            background: #539eff;
            border-radius: 10px;
            border: 5px solid #ffffff;
            width: 500px;
            max-width: 100%;
            margin: 10px auto;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            align-items: center;
            text-align: right;
            padding: 20px;
        }

        .div-form {
            width: calc(50% - 10px);
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
            font-size: 16px;
            color: black;
        }

        input,
        select {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            text-align: right;
            font-size: 16px;
        }

        .input_order {
            font-family: vazir;
        }

        .button1 {
            background-color: #ccddd9;
            color: rgb(27, 65, 97);
            padding: 15px;
            border: none;
            cursor: pointer;
            font-weight: 500;
            font-size: 16px;
        }

        .title {
            line-height: 30px;
            font-size: 16px;
            width: 100%;
            text-align: center;
            margin-bottom: 20px;
            color:#000000
        }

        @media screen and (max-width: 600px) {
            form {
                flex-direction: column;
                align-items: center;
            }

            .div-form {
                width: 100%;
            }
        }
.current{
    color: #000000
}
        body {
            background-image: url('img/signup-bg.jpg');
            background-size: cover;
            /* این خط برای تنظیم اندازه تصویر به گونه‌ای است که همواره صفحه را پوشش دهد */
            background-position: center;
            /* این خط برای تنظیم موقعیت تصویر در پس‌زمینه استفاده می‌شود */
            background-repeat: no-repeat;
            /* این خط جلوگیری می‌کند تا تصویر تکرار شود */
        }

       
    </style>
@endsection

@section('product')
    <li class='active'><a href="{{ route('orders') }}">محصولات</a></li>
@endsection


@section('form')
    <form action="{{ route('submit_order') }}" method="POST" id="submit-form">
        <div class='title'>لطفا فرم را با اطلاعات صحیح کامل کنید</div>
        @csrf

        <div class="div-form ">
            <label for="lastname">:نام خانوادگی</label>
            <input class="input_order" type="text" id="lastname" name="lastname" value='{{ old('lastname') }}'>
        </div>


        <div class="div-form ">
            <label for="name">:نام</label>
            <input class="input_order" type="text" id="name" name="name" value='{{ old('name') }}'>
        </div>



        <div class="div-form ">

            <label for="cellphone">:تلفن</label>
            <input class="input_order" type="text" id="cellphone" name="cellphone" value='{{ old('cellphone') }}'>

        </div>

        <div class="div-form ">
            <label for="description">:توضیحات</label>
            <textarea class="input_order" type="text" id="description" name="description">{{ old('description') }} </textarea>
        </div>

        <div class="div-form ">
            <label for="address">:نشانی</label>
            <textarea class="input_order" type="text" id="address" name="address">{{ old('address') }} </textarea>
        </div>


        <div class="div-form">
            <label for="order_category">:پکیج مورد نظر</label>
            <select id="order_category" name="order_category" autofocus>
                <option selected disabled>انتخاب کنید</option>
                <option   value="طلایی" {{ old('order_category') == 'طلایی' ? 'selected' : '' }}>طلایی</option>
                <option value="نقره ای" {{ old('order_category') == 'نقره ای' ? 'selected' : '' }}>نقره ای</option>
                <option value="برنزی" {{ old('order_category') == 'برنزی' ? 'selected' : '' }}>برنزی</option>
                <!-- دیگر گزینه‌ها را اضافه کنید -->
            </select>
        </div>

        <div class="div-buttom">
            <button class='button1' type="submit" id="submit-btn">ثبت سفارش</button>
        </div>

    </form>


     <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> 
    {{-- <script>
 $(document).ready(function() {
    var isOrderSubmitted = false;

    function hideErrors() {
        $('#error-name, #error-lastname, #error-cellphone, #error-order_category').fadeOut('slow');
    }

    // پاک کردن مقادیر فیلدها هنگام لود صفحه
    $('#lastname, #name, #cellphone').val('');

    $('#submit-form').on('submit', function(event) {
        event.preventDefault();

        if (!isOrderSubmitted) {
            var isValid = true;
            var $form = $(this);

            var lastname = $form.find('#lastname').val();
            var name = $form.find('#name').val();
            var cellphone = $form.find('#cellphone').val();
            var order_category = $form.find('#order_category').val();

            if (name == '') {
                $('#error-name').html('لطفاً فیلد نام را پر کنید.').fadeIn('slow');
                isValid = false;
            } else {
                $('#error-name').hide();
            }

            if (lastname == '') {
                $('#error-lastname').html('لطفاً فیلد نام خانوادگی را پر کنید.').fadeIn('slow');
                isValid = false;
            } else {
                $('#error-lastname').hide();
            }

            var phonePattern = /^[0-9]{11}$/;
            if (!phonePattern.test(cellphone)) {
                $('#error-cellphone').html('لطفاً یک شماره تلفن یازده رقمی وارد کنید.').fadeIn('slow');
                isValid = false;
            } else {
                $('#error-cellphone').hide();
            }

            if (order_category == null) {
                $('#error-order_category').html('لطفاً یک گزینه از پکیج مورد نظر را انتخاب کنید.').fadeIn('slow');
                isValid = false;
            } else {
                $('#error-order_category').hide();
            }

            if (!isValid) {
                setTimeout(function() {
                    hideErrors();
                }, 5000);
            }

            if (isValid) {
                isOrderSubmitted = true; // ثبت سفارش اولیه
                $.ajax({
                    url: $form.attr('action'),
                    type: 'POST',
                    data: $form.serialize(),
                    success: function(response) {
                        $('#success-message').text(response.message).fadeIn('slow').delay(3000).fadeOut('slow');
                        $('#error-message').hide();
                    },
                    error: function(xhr) {
                        var errors = xhr.responseJSON.errors;
                        var errorMessage = '';
                        for (var field in errors) {
                            if (errors.hasOwnProperty(field)) {
                                errorMessage += errors[field][0] + '<br>';
                            }
                        }

                        $('#error-message').html(errorMessage).fadeIn('slow');
                        $('#success-message').hide();
                    }
                });
            }
        } else {
            // اگر سفارش قبلا ثبت شده بود...
            alert('شما قبلاً یکبار سفارش  خود را ثبت کرده‌اید.');
        }
    });
}); --}}


    {{-- </script> --}}
    
@endsection
