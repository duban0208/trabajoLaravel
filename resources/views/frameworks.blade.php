<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        <label for="">FRAMEWORKS FRONT END</label>
        <ul>
            @foreach ($frameworksFrontend as $framework)
                <li> {{$framework['frFrontend']}} </li>
            @endforeach
        </ul>
    </div>

    <div>
        <label for="">FRAMEWORKS BACK END</label>
        <ul>
            @foreach ($frameworksBackend as $frameworks)
                <li> {{$frameworks['frBackend']}} </li>
            @endforeach
        </ul>
    </div>
</body>
</html>