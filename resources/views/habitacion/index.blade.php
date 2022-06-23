@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Pacientes</h1>
    <a class="btn btn-success" href="create">Agregar Nuevo</a>
    <br>
    <br>
    <table class="table table-bordered">
    @if($pacientes->count())
        <tr>
            <th>ID</th>
            <th>DOCUMENTO</th>
            <th>TIPO DOCUMENTO</th>
            <th>NOMBRES</th>
            <th>APELLIDOS</th>
            <th>DIRECCIÓN</th>
            <th>TELEFONO</th>
            <th>GENERO</th>
            <th>FECHA DE NACIMIENTO</th>
            <th>ESTADO CIVIL</th>

        </tr>
        @foreach($pacientes as $paciente)
            <tr>
                <td> {{ $paciente->id }} </td>
                <td> {{ $paciente->documento }} </td>
                <td> {{ $paciente->tipoDocumento }} </td>
                <td> {{ $paciente->nombres }} </td>
                <td> {{ $paciente->apellidos }} </td>
                <td> {{ $paciente->direccion }} </td>
                <td> {{ $paciente->telefono }} </td>
                <td> {{ $paciente->genero }} </td>
                <td> {{ $paciente->fechaNacimeinto }} </td>
                <td> {{ $paciente->estadoCivil }} </td>

                <td class="text-center">
                    <a class="btn btn-warning" href="edit/{{$paciente->id}}">Editar</a>
                    <form action="{{ url('eps/deleteById', ['id' => $paciente->id]) }}" method="post">
                        <input class="btn btn-danger" type="submit" value="Delete" />
                        @method('delete')
                        @csrf
                    </form>

                </td>
            </tr>
        @endforeach
    @else
        <tr>
            <td colspan="2"> No Hay pacientes registrados </td>
        </tr>
    @endif
    </table>

</div>
@endsection
