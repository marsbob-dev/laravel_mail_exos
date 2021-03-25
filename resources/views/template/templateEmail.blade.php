<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    <h1 style="color:green; border:solid 1px orange; text-align:center;">I'm {{$customerEmail}} and my query is:</h1>
    <div style="text-align: center; margin-top: 2vh; background-color:lightblue;">
        <p class="text-justify">{{$content}}</p>
    </div>

    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>