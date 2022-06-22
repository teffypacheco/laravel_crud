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

    public function getAll() {
        $pacientes = Paciente::all();
        return view('eps.index', compact('pacientes'));
    }

    public function getById($idPaciente) {
        $pacientes = Paciente::find($idPaciente);
        echo $pacientes;
    }

    public function addPaciente(Request $request) {
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

    public function deleteById($idPaciente) {
        Paciente::destroy($idPaciente);
        return redirect('eps/getAll');
    }

}
