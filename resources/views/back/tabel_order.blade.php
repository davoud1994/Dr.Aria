@extends('back.admin_index')
@if (Route::has('index.docters'))
    <title>مدیریت</title>
@endif
<style>
    .table {
      margin: 20 100; 
      border-collapse: separate; /* جدا کردن حاشیه‌های جدول */
        border-spacing: 0px; /* فاصله بین سلول‌ها */
        /* border-collapse: separate; */
        width: 800px;
        height: 100px;

         /* فاصله بین خطوط و ستون‌ها */
    }
    .table th, .table td {
        border: 2px solid #dfdddd; حاشیه برای هر سلول
        padding: 2px; /* فاصله داخلی دلخواه */
        text-align: center; /* راست چین کردن متن در سلول‌ها */
        font-weight: bold;
        font-size: 12px;
        width: 80px;
    }

    
    td{
        width: 10px;
    }

    /* استفاده از کلاس بوت استرپ برای جدول ریسپانسیو */
    @media (max-width:900px) {
        .table-responsive {
            width: 100%;
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
            -ms-overflow-style: -ms-autohiding-scrollbar;
        }
    }

  .button{
      cursor: pointer;
      width: 60px;
      height: 30px;
      font-family: vazir;
      background-color: rgba(20, 235, 145, 0.678);
      border-style:none;
      border-radius: 15px
    }

    .page{
        background-color: rgb(193, 226, 255);
        color: #000000;
        margin-top:0px;
        text-align: center;
        width: 100%;  
        font-size:20px 
    }
</style>

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    {{-- <div class="card-header">User List</div> --}}

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>  
                                        <Th>ویرایش</Th>
                                        <th>سفارش</th>
                                        <th>توضیحات</th>
                                        <th>ادرس</th>
                                        <th>تلفن</th>
                                        <th>نام خانوادگی</th>
                                        <th>نام</th>
                                        <th>شناسه</th>
                                      
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($info_order as $user)
                                        <tr>
                                            <td ><a href='{{route('home',$user->id)}}' ><button class='button'>ویرایش</button><a></td>
                                            <td>{{ $user->category_order }}</td> 
                                            <td>{{ $user->description }}</td>
                                            <td>{{ $user->Address }}</td>
                                            <td>{{ $user->Cellphone }}</td>
                                            <td>{{ $user->Lastname }}</td>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->id }}</td>
                                        </tr>
                                    @endforeach  
                           
                           
                            
                                </tbody> 
                              
                            </table> 
                            <div  class='page'>
                              
                               {{$info_order-> links('vendor.pagination.semantic-ui')}}      
                         
                            
                            </div>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
