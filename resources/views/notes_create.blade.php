
<div>
    <form action="{{ route('notes.store') }}" method="POST">
        @csrf
        <label for="title">Titulo</label>
        <input type="text" name="title" required>

        <label for="content">Contenido</label>
        <textarea name="content" rows="5" required></textarea>

        <label for="author">Autor</label>
        <input type="text" name="author" required>

        <button>Guardar Nota</button>
    </form>

</div>
