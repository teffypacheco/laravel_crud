@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Habitaciones</h1>
    <a class="btn btn-success" href="create">Agregar Nuevo</a>
    <br>
    <br>
    <table class="table table-bordered">
    @if($habitaciones->count())
        <tr>
            <th>ID</th>
            <th>NUMERO DE HABITACION</th>
            <th>DESCRIPCION</th>

        </tr>
        @foreach($habitaciones as $habitacion)
            <tr>
                <td> {{ $habitacion->id }} </td>
                <td> {{ $habitacion->numeroHabitacion }} </td>
                <td> {{ $habitacion->descripcion }} </td>

                <td class="text-center">
                    <a class="btn btn-warning" href="edit/{{$habitacion->id}}">Editar</a>
                    <form action="{{ url('habitacion/deleteById', ['id' => $habitacion->id]) }}" method="post">
                        <input class="btn btn-danger" type="submit" value="Delete" />
                        @method('delete')
                        @csrf
                    </form>

                </td>
            </tr>
        @endforeach
    @else
        <tr>
            <td colspan="2"> No hay hanotaciones registrados </td>
        </tr>
    @endif
    </table>

</div>
@endsection
