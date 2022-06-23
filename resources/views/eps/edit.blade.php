<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
          integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Editar Paciente</title>
</head>
<body>
<div class="container">
    <div class="col-lg-6">
        <h1>Editar Paciente</h1>
        <form action="{{ url('eps/updatePaciente', ['id' => $paciente->id]) }}" method="post">
            @csrf
            @method('put')

            <input class="form-control" hidden="true" type="number" name="id" value="{{$paciente->id}}">

            Documento <br>
            <input class="form-control" type="number" name="documento" value="{{$paciente->documento}}"><br>
            Tipo Documento <br>
            <input class="form-control" type="text" name="tipoDocumento" value="{{$paciente->tipoDocumento}}"><br>
            Nombres <br>
            <input class="form-control" type="text" name="nombres" value="{{$paciente->nombres}}"><br>
            Apellidos <br>
            <Input class="form-control" type="text" name="apellidos" value="{{$paciente->apellidos}}"><br>
            Dirección <br>
            <Input class="form-control" type="text" name="direccion" value="{{$paciente->direccion}}"><br>
            Teléfono <br>
            <Input class="form-control" type="number" name="telefono" value="{{$paciente->telefono}}"><br>
            Género <br>
            <Input class="form-control" type="text" name="genero" value="{{$paciente->genero}}"><br>
            Fecha de Nacimiento <br>
            <Input class="form-control" type="date" name="fechaNacimeinto" value="{{$paciente->fechaNacimeinto}}"><br>
            Estado civíl <br>
            <Input class="form-control" type="text" name="estadoCivil" value="{{$paciente->estadoCivil}}"><br>

            <input class="btn btn-primary" type="submit" name="accion" value="Actualizar">
            <a href=".././">Regresar</a>

        </form>
    </div>

</div>
</body>
</html>
