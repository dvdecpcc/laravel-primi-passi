<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Second Laravel</title>
</head>
<body>
    <header>
        <ul>
         <li><a href="{{route('firstPage')}}"></a></li>
         <li><a href="{{route('secondPage')}}"></a></li>
        </ul>
    </header>
    <section>
        <div>
            <h1>{{$myThird}}</h1>
            <h2>{{$myThirdSubTitle}}</h2>
        </div>
    </section>
</body>
</html>