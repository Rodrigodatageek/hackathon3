<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Owner Detail</title>
</head>
<body>
    <h2>Owner's name {{$owner[0]->first_name}} {{$owner[0]->surname}}</h2>
    <p>Address: {{$owner[0]->address}}</p>
    <p>Phone No: {{$owner[0]->phone}}</p>
    <p>Pets:</p>
    @foreach($owner[0]->animals as $animal)
    <li>{{$animal->name}}</li>
    @endforeach
    
</body>
</html>