<?php

namespace App\Http\Controllers;

use App\Models\Libro;
use Illuminate\Http\Request;

class LibroController extends Controller
{
    public function index()
    {
        $libros = Libro::all();
        return view('libros.index', compact('libros'));
    }

    public function create()
    {
        return view('libros.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'titulo'       => 'required',
            'editorial'    => 'required',
            'autor'        => 'required',
        ]);

        Libro::create($request->all());
        return redirect()->route('libros.index');
    }

    public function show(Libro $libro)
    {
        //
    }

    public function edit($id)
    {
        $libros = Libro::find($id);
        return view('libros.edit', compact('libros'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'titulo'       => 'required',
            'editorial'    => 'required',
            'autor'        => 'required',
        ]);

        $libros = Libro::find($id);
        $libros->update($request->all());

        return redirect('/libros');
    }

    public function destroy(Libro $libro)
    {
        Libro::find($libro->id)->delete();
        return redirect()->route('libros.index');
    }
}
