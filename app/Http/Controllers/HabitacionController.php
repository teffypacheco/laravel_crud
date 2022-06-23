<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Habitacion;

class HabitacionController extends Controller
{
    //

    //Metodo obligatorio, porque fallaba sin el, no se porque
    public function __invoke()
    {
        dd('main');
    }

    //Metodo encargado de consultar todas las habitaciones de la base de datos
    public function getAll()
    {
        $habitaciones = Habitacion::all();
        return view('habitacion.index', compact('habitaciones'));
    }

    //Metodo encargado de agregar una nueva habitacion con la informacion que viene en pantalla
    public function addHabitacion(Request $request)
    {
        Habitacion::create([
            'numeroHabitacion' => $request->get('numeroHabitacion'),
            'descripcion' => $request->get('descripcion')
        ]);

        return redirect('habitacion/getAll');
    }

    //Metodo encargado de Eliminar el paciendo por id
    public function deleteById($idHabitacion)
    {
        Habitacion::destroy($idHabitacion);
        return redirect('habitacion/getAll');
    }

    //Metodo encargado de cargar la pantalla editar con la informacion del paciente
    public function edit($idHabitacion)
    {
        $habitacion = Habitacion::find($idHabitacion);
        return view('habitacion.edit', compact('habitacion'));
    }

    //Metodo encargado de actualizar en base de datos el paciente, con la informacion que venga en pantalla
    public function updateHabitacion($idHabitacion, Request $request)
    {
        $habitacion = Habitacion::find($idHabitacion);
        $habitacion->numeroHabitacion = $request->get('numeroHabitacion');
        $habitacion->descripcion = $request->get('descripcion');

        $habitacion->save();
        return redirect('habitacion/getAll');
    }

}
