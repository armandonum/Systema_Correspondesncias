<?php

namespace App\Http\Controllers;
use App\Models\Correspondencia;
use App\Models\Destinatario;
use Illuminate\Http\Request;

class CorrespondenciaController extends Controller
{
    public function index()
    {
        $correspondencias = Correspondencia::all();
        return view('correspondencias.index', compact('correspondencias'));
    }

    public function create()
    {
        $destinatarios = Destinatario::all();
        return view('correspondencias.create', compact('destinatarios'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'fecha' => 'required|date',
            'remitente' => 'required|string',
            'asunto' => 'required|string',
            'cite' => 'required|string',
            'destinatario_id' => 'required|exists:destinatarios,id'
        ]);

        Correspondencia::create($request->all());
        return redirect()->route('correspondencias.index');
    }

    public function edit($id)
    {
        $correspondencia = Correspondencia::find($id);
        $destinatarios = Destinatario::all();
        return view('correspondencias.edit', compact('correspondencia', 'destinatarios'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'fecha' => 'required|date',
            'remitente' => 'required|string',
            'asunto' => 'required|string',
            'cite' => 'required|string',
            'destinatario_id' => 'required|exists:destinatarios,id'
        ]);

        $correspondencia = Correspondencia::find($id);
        $correspondencia->update($request->all());
        return redirect()->route('correspondencias.index');
    }

    public function destroy($id)
    {
        Correspondencia::find($id)->delete();
        return redirect()->route('correspondencias.index');
    }
}
