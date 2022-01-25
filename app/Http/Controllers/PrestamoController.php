<?php

namespace App\Http\Controllers;

use App\Models\Prestamo;
use App\Models\Socio;
use App\Models\Libro;
use Illuminate\Http\Request;

class PrestamoController extends Controller
{
    public function index()
    {
        $prestamos = Prestamo::all();
        return view('prestamos.index', compact('prestamos'));
    }

    public function create()
    {
        $socios = Socio::all();
        $libros = Libro::all();
        return view('prestamos.create', compact('socios', 'libros'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'id_socio'                => 'required',
            'id_libro'                => 'required',
            'fecha_prestamo'          => 'required',
            'fecha_devolucion'        => 'required',
        ]);

        Prestamo::create($request->all());
        $correo = new MailMailable;
        Mail::to('{{$socios->email}}')->send($correo);

        return redirect()->route('prestamos.index');
    }

    public function show(Prestamo $prestamo)
    {
        //
    }

    public function edit($id)
    {
        $socios = Socio::all();
        $libros = Libro::all();
        $prestamos = Prestamo::find($id);
        return view('prestamos.edit', compact('prestamos', 'socios', 'libros'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'id_socio'                => 'required',
            'id_libro'                => 'required',
            'fecha_prestamo'          => 'required',
            'fecha_devolucion'        => 'required',
        ]);

        $prestamos = Prestamo::find($id);
        $prestamos->update($request->all());

        return redirect('/prestamos');
    }

    public function destroy(Prestamo $prestamo)
    {
        Prestamo::find($prestamo->id)->delete();
        return redirect()->route('prestamos.index');
    }
}
