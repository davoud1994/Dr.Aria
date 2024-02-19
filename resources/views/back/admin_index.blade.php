<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* استایل‌های ساید بار */
        .sidebar {
            margin: 0;
            padding: 0;
            width: 200px;
            background-color: #f1f1f1;
            position: fixed;
            height: 100%;
            overflow: auto;
            right: -5;
            

            /* margin-top: 100px; */
        }

        .sidebar a {
            display: block;
            color: black;
            padding: 16px;
            text-decoration: none;
            text-align: right;
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
    <div class="sidebar">
        <a class="active" href="{{route('home')}}">خانه</a>
        <a href="#news">اخبار</a>
        <a href="#contact">تماس با ما</a>
        <a href="#about">درباره ما</a>
    </div>
    
    <div class="content">
        @yield('content')
    </div>
</body>
</html>
