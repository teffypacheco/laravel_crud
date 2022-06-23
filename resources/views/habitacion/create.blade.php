@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-lg-6">
        <h1>Agregar Habitacion</h1>
        <form action="{{ url('habitacion/addHabitacion') }}" method="post">
            @csrf
            Numero de Habitación <br>
            <input class="form-control" type="number" name="numeroHabitacion"><br>
            Descripción <br>
            <input class="form-control" type="text" name="descripcion"><br>




            <input class="btn btn-primary" type="submit" name="accion" value="Agregar">
            <a href="./">Regresar</a>
        </form>
    </div>

</div>
@endsection
