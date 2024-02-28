<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Persona</title>
</head>

<body>
    <div>
        <img src="{{ asset($persona->image_path) }}" alt="{{ $persona->name }}">

        <h2>{{ $persona->name }}</h2>
        <p>Âge : {{ $persona->age }} ans </p>
        <p>Poste : {{ $persona->post }}</p>
        <p>Description : {{ $persona->description }}</p>
    </div>
</body>

</html>