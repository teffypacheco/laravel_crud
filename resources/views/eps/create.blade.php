<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
          integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Agregar Paciente</title>
</head>
<body>
<div class="container">
    <div class="col-lg-6">
        <h1>Agregar Paciente</h1>
        <form action="{{ url('eps/addPaciente') }}" method="post">
            @csrf
            Documento <br>
            <input class="form-control" type="number" name="documento"><br>
            Tipo Documento <br>
            <input class="form-control" type="text" name="tipoDocumento"><br>
            Nombres <br>
            <input class="form-control" type="text" name="nombres"><br>
            Apellidos <br>
            <Input class="form-control" type="text" name="apellidos"><br>
            Dirección <br>
            <Input class="form-control" type="text" name="direccion"><br>
            Teléfono <br>
            <Input class="form-control" type="number" name="telefono"><br>
            Género <br>
            <Input class="form-control" type="text" name="genero"><br>
            Fecha de Nacimiento <br>
            <Input class="form-control" type="date" name="fechaNacimeinto"><br>
            Estado civíl <br>
            <Input class="form-control" type="text" name="estadoCivil"><br>


            <input class="btn btn-primary" type="submit" name="accion" value="Agregar">
            <a href="./">Regresar</a>
        </form>
    </div>

</div>
</body>
</html>
