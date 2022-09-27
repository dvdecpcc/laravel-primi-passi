<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel</title>
</head>
<body>
    <header>
        <ul>
            <li><a href="{{route('secondPage')}}">second page</a></li>
            <li><a href="{{route('thirdPage')}}">third page</a></li>
        </ul>
    </header>
    <section>
        <div>
            <h1>{{$myTitle}}</h1>
            <h2>{{$mySubTitle}}</h2>
        </div>
    </section>
</body>
</html>