<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 36px;
            padding: 20px;
        }
    </style>
    <title>@yield('titleError')</title>
</head>
<body>
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title">
            @yield('messageError')
            <iframe style="margin-top: 2%;" src="https://open.spotify.com/embed/track/5c7UATnb0XfIbyIHHfgIMb" width="300" height="380" frameborder="0" allowtransparency="true"></iframe>
            @yield('returnError')
        </div>
    </div>
</div>
</body>
</html>