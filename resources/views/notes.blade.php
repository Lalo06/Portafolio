@extends('layouts.app')
@section('title', 'Notas')
@section('content')
<div class="flex flex-col items-center justify-center">
    <h1 class="text-2xl font-bold text-black">Escribe tus notas</h1>
    <a class="border-2 border-emerald-400 rounded-md text-black font-bold py-2 px-4 hover:bg-emerald-200" href="{{ route('notes.create') }}">Crear Nota</a>


    <div class="flex flex-col items-center justify-center mt-4">
    <h1 class="text-xl font-bold text-black">Notas Guardadas</h1>
    <ul class="list-inside list-disc">
        @foreach ($notes as $note)
        <li>{{ $note->title }}</li>
        <li>{{ $note->content}}</li>
        <li> Por: {{ $note->author}}</li>
        @endforeach
    </ul>
    </div>
</div>
@endsection
