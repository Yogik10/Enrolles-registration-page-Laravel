<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@600&family=Roboto:ital@1&display=swap" rel="stylesheet">
    <style>
        body{
            background: #a0aec0;
        }
        .main_container{
            /*width: auto;*/
            margin-left: auto;
            margin-right: auto;
            margin-top: 50px;
            padding-left: 20px;
            padding-right: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: 'Open Sans', sans-serif;
        }
        .page_title{
            font-size: 40pt;
            width: 90vw;
            margin: 70px auto 0 auto;
            text-align: center;
            font-family: 'Roboto', sans-serif;
        }
        .registration_container{
            background: #cbd5e0;
            border-radius: 30px;
            padding: 30px 20px;
            display: flex;
            flex-direction: column;
            justify-content: space-evenly;
        }
        .registration_container form{
            display: flex;
            flex-direction: column;
            justify-content: space-evenly;
            align-items: center;
            height: 100%;
        }
        .fio_container{
            display: flex;
            justify-content: space-evenly;
        }
        .fio_container input, .input_container input{
            text-align: center;
            border-radius: 5px;
            border: 2px solid aqua;
            height: 25px;
            margin: 0 20px 10px 20px;
        }
        .sex_container{
            display: inline;
            margin-bottom: 10px;
        }
        .sign_up{
            color:black;
            background: aqua;
            margin-top: 20px;
            padding: 10px 30px;
            border-radius: 5px;
            font: inherit;
        }
        .error_container{
            color: red;
        }
        .error{
            background: rgba(255, 0, 0, 0.1);
        }
        .modal{
            margin: 0 auto 0 auto;
            font-size: 30pt;
            text-align: center;
            font-family: 'Roboto', sans-serif;
        }
    </style>
    {{--    <link href={{URL::asset('/enrollees/public/app.css')}} rel="stylesheet">--}}
    <title>@yield('title')</title>
</head>
<body>
    @yield('h1')
    <div class="main_container">
        @yield('content')
    </div>
</body>
</html>
