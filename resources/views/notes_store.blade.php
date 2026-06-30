
<div>
    <h1>Notas Guardadas</h1>
    <ul>
        @foreach ($notes as $note)
        <li>{{ $note->title }}</li>
        <li>{{ $note->content}}</li>
        @endforeach
    </ul>
</div>
