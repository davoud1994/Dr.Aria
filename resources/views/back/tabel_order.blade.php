@extends('back.admin_index')
@if (Route::has('index.docters'))
    <title>مدیریت</title>
@endif
<style>
    .table {
      margin: 100 100; 
      border-collapse: separate; /* جدا کردن حاشیه‌های جدول */
        border-spacing: 0px; /* فاصله بین سلول‌ها */
        /* border-collapse: separate; */
        width: 80px;

         /* فاصله بین خطوط و ستون‌ها */
    }
    .table th, .table td {
        border: 2px solid #dfdddd; حاشیه برای هر سلول
        padding: 20px; /* فاصله داخلی دلخواه */
        text-align: center; /* راست چین کردن متن در سلول‌ها */
        font-weight: bold;
        font-size: 13px;
        width: 80px;
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
                                            <td><a href='{{route('home',$user->id)}}'><button>1</button><a></td>
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
