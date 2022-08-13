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
        .registration_container, .table_container{
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




        .table_container{
            padding: 20px 20px;
        }
        .table_container table th{
            text-align: center;
        }
        .table_container table th a{
            color: black;
            text-decoration: none;
            text-shadow: #a9c8fd 2px 1px;
        }
        .table_container table td, .table_container table th, .table_container table caption{
            padding: 0 20px;
            font-size: 14pt;
        }
        .table_container table {
            background: azure;
            border-radius: 20px;
            border-collapse: inherit;
            border-spacing: 0;
        }
        .table_container caption{
            margin-bottom: 10px;
        }
        .table_container table td, .table_container table th{
            border: 1px solid #4a5568;
            padding-top: 5px;
            padding-bottom: 5px;
        }
        .table_container table tr:first-child th:first-child {
            border-radius: 20px 0 0 0;
        }
        .table_container table tr:first-child th:last-child {
            border-radius: 0 20px 0 0;
        }
        .table_container table tr:last-child td:first-child {
            border-radius: 0 0 0 20px;
        }
        .table_container table tr:last-child td:last-child {
            border-radius: 0 0 20px 0;
        }
        .page_container{
            text-align: center;
        }
        .page_container a{
            text-decoration: none;
        }
        .selected_page{
            color: black;
            pointer-events: none;
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
