<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../results.css">
    <title>Search</title>
</head>
<body>

    <form action="{{ action('AnimalController@search') }}" method="get">
        @csrf
        <label for="search">Search for animal by name</label>
        <input type="text" id="search" name="search" value="">
        <input type="submit" value="Submit">
    </form>

    @if($animals)
    <ul>
        @foreach($animals as $animal)
            <li>{{$animal->name}}</li>
        @endforeach
    </ul>
    @endif
    
</body>
</html>