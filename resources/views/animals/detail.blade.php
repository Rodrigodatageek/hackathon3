<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Animal Detail</title>
</head>
<body>
    <h2>Pet's name {{ $animal[0]->name }}</h2>
    <p>{{$animal[0]->species }}</p>
    <p>{{ $animal[0]->breed }}</p>
    <img src="/images/pets/{{$animal[0]->images->path}}" alt="{{$animal[0]->name}}">

</body>
</html>