<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List of animals</title>
</head>
<body>
    
    <a href="/">Go back to the welcome page</a>
    <br>
    <ul>
        @foreach($animals as $animal)
            <li>{{$animal->name}}</li>
        @endforeach
    </ul>
    
    

</body>
</html>