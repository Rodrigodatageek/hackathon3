<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../results.css">
    <title>List of animals</title>
</head>
<body>
    
    <a href="/">Go back to the welcome page</a>
    <br>

    <ul>
        @foreach($animals as $animal)
            <li><a href="/animals/detail/{{$animal->id}}">{{$animal->name}}</a>, owned by <a href="/owners/detail/{{$animal->owner->id}}">{{ $animal->owner->first_name }} {{ $animal->owner->surname }}</a></li>
        @endforeach
    </ul>
    
    

</body>
</html>