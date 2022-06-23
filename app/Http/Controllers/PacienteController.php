<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paciente;

class PacienteController extends Controller
{
    //

    //Metodo obligatorio, porque fallaba sin el, no se porque
    public function __invoke()
    {
        dd('main');
    }

    //Metodo encargado de consultar todos los pacientes de la base de datos
    public function getAll()
    {
        $pacientes = Paciente::all();
        return view('eps.index', compact('pacientes'));
    }

    //Metodo encargado de agregar un nuevo paciente con la informacion que viene en pantalla
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

    //Metodo encargado de Eliminar el paciendo por id
    public function deleteById($idPaciente)
    {
        Paciente::destroy($idPaciente);
        return redirect('eps/getAll');
    }

    //Metodo encargado de cargar la pantalla editar con la informacion del paciente
    public function edit($idPaciente)
    {
        $paciente = Paciente::find($idPaciente);
        return view('eps.edit', compact('paciente'));
    }

    //Metodo encargado de actualizar en base de datos el paciente, con la informacion que venga en pantalla
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
