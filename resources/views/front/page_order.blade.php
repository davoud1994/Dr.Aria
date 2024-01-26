@extends('front.layouts')
@if (Route::has('orders'))
    <title> فرم سفارش</title>
@endif
@section('style.orders')
<style>
.alert {
        display: none;
    }
    
    form {
        background: #e2fff8;
        border-radius: 10px;
        border: 5px solid #2182e2;
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
        color: rgb(47, 114, 168);
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
    body {
    background-image: url('img/signup-bg.jpg');
    background-size: cover; /* این خط برای تنظیم اندازه تصویر به گونه‌ای است که همواره صفحه را پوشش دهد */
    background-position: center; /* این خط برای تنظیم موقعیت تصویر در پس‌زمینه استفاده می‌شود */
    background-repeat: no-repeat; /* این خط جلوگیری می‌کند تا تصویر تکرار شود */
}
</style>
@endsection

@section('product')
<li class='active'><a href="{{route('orders')}}">محصولات</a></li>    
@endsection    


@section('form')



    <form action="{{route('submit_order')}}" method="POST" id="submit-form">
        <div class='title'>لطفا فرم را با اطلاعات صحیح کامل کنید</div>
        @csrf

        <div class="div-form ">
            <label for="lastname">:نام خانوادگی</label>
            <input class="input_order" type="text" id="lastname" name="lastname" value='{{old("lastname")}}' >
        </div>


        <div class="div-form ">
            <label for="name">:نام</label>
            <input class="input_order" type="text" id="name" name="name" value='{{old("name")}}' >
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
            <button class='button1' type="submit" id="submit-btn">ثبت سفارش</button>        
        </div>

    </form>
    

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <script>
        // JavaScript code for handling form submission
        $(document).ready(function () {
            $('#submit-btn').on('click', function (event) {
                event.preventDefault(); // Prevent the default form submission

                // Gather form data
                var formData = new FormData($('#submit-form')[0]);

                $.ajax({
                    url: '{{ route('submit_order') }}',
                    type: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function (response) {
                        // Display success message
                        $('#success-message').text(response.message).show();
                        $('#error-message').hide();
                    },
                    error: function (xhr) {
                        if (xhr.status === 422) {
                            // Display validation errors
                            var errors = xhr.responseJSON.errors;
                            $('#error-list').empty();
                            for (var field in errors) {
                                if (errors.hasOwnProperty(field)) {
                                    $('#error-list').append('<li>' + errors[field][0] + '</li>');
                                }
                            }
                            $('#error-message').show();
                            $('#success-message').hide();
                        } else {
                            // Handle other errors
                            console.log(xhr);
                        }
                    }
                });
            });
        });
    </script>

@endsection


