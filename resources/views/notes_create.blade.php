@extends('layouts.app')
@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-2xl text-center font-bold text-black mb-4">Crear Nota</h1>
<form class="border w-full h-full" action="{{ route('notes.store') }}" method="POST">
    @csrf
        <div class="flex flex-col items-center justify-center">
            <label class="ml-2 block text-md pl-2 pt-3" for="title">Titulo</label>
            <input class="border rounded-md pl-2 pt-4" type="text" name="title" required>
    
            <label class="ml-2 block text-md pl-2 pt-3" for="content">Contenido</label>
            <textarea class="border rounded-md pl-2 py-2" name="content" rows="5" required></textarea>
    
            <label class="ml-2 block text-md pl-2 pt-3" for="author">Autor</label>
            <input class="border rounded-md pl-2 py-2" type="text" name="author" required>
            <button class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 ml-4 mt-4 rounded">Guardar Nota</button>
        </div>

    </form>
</div>
@endsection

