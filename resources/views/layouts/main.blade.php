<!doctype html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>ShoppingCart</title>

    <style>

        input{
            width: 120px;
        }
        input{
            background-color: transparent;
            border: none;
            border-bottom: orange solid 2px;
            max-width:fit-content;
        }
        input:focus{
            border: orange solid 2px;
        }
    </style>
</head>
<body>
    <div class="container">
        @yield('content')
    </div>
</body>
@yield('js')
</html>