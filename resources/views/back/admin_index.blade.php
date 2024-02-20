<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
   
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="Site keywords here">
    <meta name="description" content="">
    <meta name='copyright' content=''>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <link
     href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap"
     rel="stylesheet">    
 
 <!-- icofont CSS -->

<link  rel="stylesheet"  href="css/font-p.css">
    <style>
        header{
            text-align: center;
            font-family: vazir;
            color:rgb(0, 0, 0);

        }
        /* استایل‌های ساید بار */
        .sidebar {
            margin-top:8px;
            margin-right: 10px;
            padding: 0;
            width:150px;
            background-color: #effeff;
            position: fixed;
            height: 100%;
            overflow: auto;
            right: -5;
            font-family: vazir;
            border-style: double;
            border-radius: 10px;
            text-align: center;
            border-width: 5px;
            border-color: #979797
            

            /* margin-top: 100px; */
        }

        .sidebar a {
            display: block;
            color: black;
            padding: 16px;
            text-decoration: none;
            text-align: center;
            font-family: vazir;
        }

        .sidebar a.active {
            background-color: #04AA6D;
            color: white;
        }

        .sidebar a:hover:not(.active) {
            background-color: #555;
            color: white;
        }

        /* استایل‌های محتوا */
        div.content {
            margin-right: 20px;
            /* margin-top: 200px; */

            padding: 1px 16px;
            height: 1000px;
            text-align: left;
            font-family: vazir;
        }

        body{
            height: 100vh;
        }
        /* ریسپانسیو بودن ساید بار */
        @media screen and (max-width: 1200px) {
            .sidebar {
                width: 100%;
                height: auto;
                position: relative;
            }
            .sidebar a {float: right;}
            div.content {margin-right: 0;}
        }

        @media screen and (max-width: 400px) {
            .sidebar a {
                text-align: center;
                float: none;
            }
        }

 
    </style>
</head>
<body>
    <header style="background-color: #a7ffdd;height:50px;">
      <p>به صفحه مدیریت خوش امدید</p>
    </header>
    <div class="sidebar">
        <a class="active" href="{{route('home')}}">خانه</a>
        <a href="#news">اعضا</a>
        <a href="#contact">پزشکان</a>
        {{-- <a href="#about"></a> --}}
    </div>
    
    <div class="content">
        @yield('content')
    </div>
</body>
<footer style="width: 100%;height:100px;background-color:#96ffd7">
  


</footer>
</html>
