@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-lg-6">
        <h1>Editar Habitacion</h1>
        <form action="{{ url('habitacion/updateHabitacion', ['id' => $habitacion->id]) }}" method="post">
            @csrf
            @method('put')

            <input class="form-control" hidden="true" type="number" name="id" value="{{$habitacion->id}}">

            Número Habitacion <br>
            <input class="form-control" type="number" name="numeroHabitacion" value="{{$habitacion->numeroHabitacion}}"><br>
            Descripción <br>
            <input class="form-control" type="text" name="descripcion" value="{{$habitacion->descripcion}}"><br>


            <input class="btn btn-primary" type="submit" name="accion" value="Actualizar">
            <a href=".././">Regresar</a>

        </form>
    </div>

</div>
@endsection
