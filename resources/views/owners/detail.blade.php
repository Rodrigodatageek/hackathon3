<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Owner Detail</title>
</head>
<body>
    <h2>Owner's name {{$owner->first_name}} {{$owner->surname}}</h2>
    <p>Address: {{$owner->address}}</p>
    <p>Phone No: {{$owner->phone}}</p>
    <p>Pets:</p>
    
    
</body>
</html>