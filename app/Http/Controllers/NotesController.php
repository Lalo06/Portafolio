<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;

class NotesController extends Controller
{
    public function index()
    {
        $notes = Note::all();
        return view('notes', compact('notes'));
    }

    public function create()
    {
        return view('notes_create');
    }

    public function store(Request $request)
    {   
        $validate = $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
            'author' => 'required|max:255'
            ]);
            
            $noteCreada = Note::create([
                'title' => $validate['title'],
                'content' => $validate['content'],
                'author' => $validate['author']
                ]);
                

        return redirect()->route('notes')->with('success', 'Nota creada exitosamente.');
    }
}
