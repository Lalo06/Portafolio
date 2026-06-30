@extends('layouts.app')
<form class="w-full bg-emerald-100 p-6 rounded-md" action="{{ route('notes.store') }}" method="POST">
    <div class="w-full flex flex-col items-center justify-center">
    @csrf
        <label class="ml-2 block text-md pl-2 pt-3" for="title">Titulo</label>
        <input class="w-1/4 border rounded-md pl-2 ml-4" type="text" name="title" required>

        <label class="ml-2 block text-md pl-2 pt-3" for="content">Contenido</label>
        <textarea class="w-1/4 border rounded-md pl-2 ml-4" name="content" rows="5" required></textarea>

        <label class="ml-2 block text-md pl-2 pt-3" for="author">Autor</label>
        <input class="w-1/4 border rounded-md pl-2 ml-4" type="text" name="author" required>

        <button class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 ml-4 mt-4 rounded">Guardar Nota</button>
    </div>
</form>

