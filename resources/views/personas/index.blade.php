<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List of Personas</title>
</head>

<body>
    <h1>Choose what's you need</h1>

    @foreach ($personas as $persona)
    <div><a href="{{$persona->id}}">
            <img src="{{ asset($persona->image_path) }}" alt="{{ $persona->name }}">

            <h2>{{ $persona->name }}</h2>
            <p>Âge : {{ $persona->age }} ans </p>
            <p>Poste : {{ $persona->post }}</p>
            <p>Description : {{ $persona->description }}</p>
        </a></div>
    @endforeach

</body>

</html>