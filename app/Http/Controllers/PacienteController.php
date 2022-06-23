<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paciente;

class PacienteController extends Controller
{
    //

    public function __invoke()
    {
        dd('main');
    }

    public function getAll()
    {
        $pacientes = Paciente::all();
        return view('eps.index', compact('pacientes'));
    }

    public function getById($idPaciente)
    {
        $pacientes = Paciente::find($idPaciente);
        echo $pacientes;
    }

    public function addPaciente(Request $request)
    {
        Paciente::create([
            'documento' => $request->get('documento'),
            'tipoDocumento' => $request->get('tipoDocumento'),
            'nombres' => $request->get('nombres'),
            'apellidos' => $request->get('apellidos'),
            'direccion' => $request->get('direccion'),
            'telefono' => $request->get('telefono'),
            'genero' => $request->get('genero'),
            'fechaNacimeinto' => $request->get('fechaNacimeinto'),
            'estadoCivil' => $request->get('estadoCivil')
        ]);

        return redirect('eps/getAll');
    }

    public function deleteById($idPaciente)
    {
        Paciente::destroy($idPaciente);
        return redirect('eps/getAll');
    }

    public function edit($idPaciente)
    {
        $paciente = Paciente::find($idPaciente);
        return view('eps.edit', compact('paciente'));
    }

    public function updatePaciente($idPaciente, Request $request)
    {
        $paciente = Paciente::find($idPaciente);
        $paciente->documento = $request->get('documento');
        $paciente->tipoDocumento = $request->get('tipoDocumento');
        $paciente->nombres = $request->get('nombres');
        $paciente->apellidos = $request->get('apellidos');
        $paciente->direccion = $request->get('direccion');
        $paciente->telefono = $request->get('telefono');
        $paciente->genero = $request->get('genero');
        $paciente->fechaNacimeinto = $request->get('fechaNacimeinto');
        $paciente->estadoCivil = $request->get('estadoCivil');

        $paciente->save();
        return redirect('eps/getAll');
    }

}
