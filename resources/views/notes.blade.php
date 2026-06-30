<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>NOTES</title>
</head>
<body>
    <h1>Escribe tus notas</h1>
    <a href="{{ route('notes.create') }}">Crear Nota</a>

    <div>
    <h1>Notas Guardadas</h1>
    <ul>
        @foreach ($notes as $note)
        <li>{{ $note->title }}</li>
        <li>{{ $note->content}}</li>
        @endforeach
    </ul>
</div>
</body>
</html>