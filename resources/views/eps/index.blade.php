<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" rel="stylesheet"
          type="text/css"/>
    <title>Lista de Pacientes</title>
</head>
<body>
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
            <td colspan="2"> No record found </td>
        </tr>
    @endif
    </table>

</div>
</body>
</html>
