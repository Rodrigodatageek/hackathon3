<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Welcome to St.</h1>

    <form action="{{action('OwnerController@redirect', ['id' => $movie->id])}}">
    @csrf 
    <button type="submit">Search Owner</button>
    </form>

    <form action="">
    <button>Search Pet</button>
    </form>

    <form action="">
        <button>List all pets</button>
    </form>
    
    {{-- // seacrh buttons owner 
    // seacrh buttons pet
    // list pets

    each of them will redirecct to specific controller --}}


</body>
</html>