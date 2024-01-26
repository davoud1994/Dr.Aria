@extends('front.layouts')

@if (Route::has('index.docters'))
    <title>پزشکان</title>
@endif

@section('style.docters')
<style>
    .alert {
        display: none;
    }
    .grid {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  grid-gap: 20px;
}

.g-col-3 {
  grid-column: span 3;
}

.content {
  border: 1px solid #ccc;
  border-radius: 10px;
  padding: 10px;
}

img {
  max-width: 100%;
  height: auto;
}

.name {
  font-weight: bold;
  margin-top: 10px;
}

.card-title{
  text-align: center;
  font-size: 15px;
}
.container{
  margin-top:20px;
}

#button-back{
 color: #ffffff;
 width:200px;
 height:50px ;
 margin-bottom: 10px
}
</style>
@section('docters')
<li class='active'><a href="{{route('index.docters')}}">پزشکان </a></li>
@endsection
@section('index_doc')

<div class="container">
 <h3 style="text-align:center;margin-bottom:10px"> :فهرست پزشکان و مراکز درمانی</h3>
  <div class="row mb-5">
    <div class="col-md-3">
      <div class="card">
        <img src="img/download.jpeg" class="card-img-top" alt="عکس 1">
        <div class="card-body">
          <h5 class="card-title">پزشک افشین فیاضی</h5>
        </div>
      </div>
    </div>

    <div class="col-md-3">
      <div class="card">
        <img src="img/download.jpeg" class="card-img-top" alt="عکس 2">
        <div class="card-body">
          <h5 class="card-title">پزشک محمد نصر</h5>
        </div>
      </div>
    </div>

    <div class="col-md-3">
      <div class="card">
        <img src="img/download.jpeg" class="card-img-top" alt="عکس 3">
        <div class="card-body">
          <h5 class="card-title"> پزشک حسین عماد ممتاز</h5>
        </div>
      </div>
    </div>

    <div class="col-md-3">
      <div class="card">
        <img src="img/download.jpeg" class="card-img-top" alt="عکس 4">
        <div class="card-body">
          <h5 class="card-title">پزشک هیربد گیلان دوست</h5>
        </div>
      </div>
    </div>
  </div>

  <div class="row mb-5">
    <div class="col-md-3">
      <div class="card">
        <img src="img\download (1).jpeg" class="card-img-top" alt="عکس 5">
        <div class="card-body">
          <h5 class="card-title">پزشک اناهیتا برقی لشکری</h5>
        </div>
      </div>
    </div>

    <div class="col-md-3">
      <div class="card">
        <img src="img\download (1).jpeg" class="card-img-top" alt="عکس 6">
        <div class="card-body">
          <h5 class="card-title">پزشک رویا پهلوانی</h5>
        </div>
      </div>
    </div>

    <div class="col-md-3">
      <div class="card">
        <img src="img/download (1).jpeg" class="card-img-top" alt="عکس 7">
        <div class="card-body">
          <h5 class="card-title">پزشک سحر سهیلی کریمیان</h5>
        </div>
      </div>
    </div>

    <div class="col-md-3">
      <div class="card">
        <img src="img/download.jpeg" class="card-img-top" alt="عکس 8">
        <div class="card-body">
          <h5 class="card-title">پزشک مهدی شرف الدینی</h5>
        </div>
      </div>
    </div>
  </div>

  <div class="row mb-4">
    <div class="col-md-3">
      <div class="card">
        <img src="img/download.jpeg" class="card-img-top" alt="عکس 9">
        <div class="card-body">
          <h5 class="card-title">پزشک محمد رشیدی</h5>
        </div>
      </div>
    </div>

    <div class="col-md-3">
      <div class="card">
        <img src="img/download.jpeg" class="card-img-top" alt="عکس 10">
        <div class="card-body">
          <h5 class="card-title">پزشک محمدرضا درخشان</h5>
        </div>
      </div>
    </div>

    <div class="col-md-3">
      <div class="card">
        <img src="img/download.jpeg" class="card-img-top" alt="عکس 11">
        <div class="card-body">
          <h5 class="card-title">پزشک محمدصادق صبا</h5>
        </div>
      </div>
    </div>

    <div class="col-md-3">
      <div class="card">
        <img src="img/download.jpeg" class="card-img-top" alt="عکس 12">
        <div class="card-body">
          <h5 class="card-title">پزشک منصور سلطانی</h5>
        </div>
      </div>
    </div>
  </div>

  <div class="row mb-4">
    <div class="col-md-3">
      <div class="card">
        <img src="img/download.jpeg" class="card-img-top" alt="عکس 13">
        <div class="card-body">
          <h5 class="card-title">پزشک علی مریخ پور</h5>
        </div>
      </div>
    </div>

    <div class="col-md-3">
      <div class="card">
        <img src="img/signup-bg.jpg" class="card-img-top" alt="عکس 14">
        <div class="card-body">
          <h5 class="card-title">کلینیک ایرانیان</h5>
        </div>
      </div>
    </div>

    <div class="col-md-3">
      <div class="card">
        <img src="img/signup-bg.jpg" class="card-img-top" alt="عکس 15">
        <div class="card-body">
          <h5 class="card-title">درمانگاه سیب</h5>
        </div>
      </div>
    </div>

    {{-- <div class="col-md-3">
      <div class="card">
        <img src="img/signup-bg.jpg" class="card-img-top" alt="عکس 16">
        <div class="card-body">
          <h5 class="card-title">نام 16</h5>
        </div>
      </div>
    </div> --}}
   
  </div>
  <a href="{{route('home')}}" class='btn btn-primary' id="button-back">بازگشت به صفحه اصلی</a>
</div>


  

@endsection
