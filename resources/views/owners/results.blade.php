<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Results</title>
</head>
<body>

   
    @if($owners)
    <ul>
        @foreach($owners as $owner)
            <li>{{$owner->surname}}</li>
        @endforeach
    </ul>
    @endif
    <a href="/">Go back to the welcome page</a>
    
</body>
</html>