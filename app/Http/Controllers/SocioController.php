<?php

namespace App\Http\Controllers;

use App\Models\Socio;
use Illuminate\Http\Request;

use App\Mail\MailMailable;
use Illuminate\Support\Facades\Mail;

class SocioController extends Controller
{
    public function index()
    {
        $socios = Socio::all();
        return view('socios.index', compact('socios'));
    }
    function imprimir(){
        $socios = Socio::all();
        $data = compact('socios');
        $pdf = \PDF::loadView('pdf.socio_pdf', $data);
        return $pdf->download('ejemplo.pdf');
    }
    public function create()
    {
        return view('socios.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nombre'       => 'required',
            'apellidos'    => 'required',
            'email'        => 'required',
            'dni'          => 'required|min:9|max:9',
            'telefono'     => 'required',
        ]);

        Socio::create($request->all());
        return redirect()->route('socios.index');
    }

    public function show(Socio $socio)
    {
        //
    }

    public function edit($id)
    {
        $socios = Socio::find($id);
        return view('socios.edit', compact('socios'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nombre'       => 'required',
            'apellidos'    => 'required',
            'email'        => 'required',
            'dni'          => 'required|min:9|max:9',
            'telefono'     => 'required',
        ]);

        $socios = Socio::find($id);
        $socios->update($request->all());

        return redirect('/socios');
    }


    public function destroy(Socio $socio)
    {
        Socio::find($socio->id)->delete();
        return redirect()->route('socios.index');
    }
    
    /*
    public function sendemail(){
        $email = Socio::find('{{$socio->email}}');
        Mail::to($email)->send(new MailMailable);
        return response()->json([
            'message' => 'Email enviado.'
        ], Response::HTTP_OK);
    }
    */
}
