<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
  </head>
  <body>
    <h1 style="text-align:center; margin:40px;">ADMIN/CREATE</h1>
    <hr>

    <!-- creamos formulario con laravel collective -->
    <!-- creamos enlace para ejecutar la funcion store en este formulario -->

    {!! Form::open([ 'action' => 'App\Http\Controllers\AdminUsersController@store', 'files'=>true]) !!}
      <table class="table">
        <tr>
          <td>{!! Form::label('name', 'Nombre: ') !!}</td>
          <td>{!! Form::text('name') !!}</td>
        </tr>
        <tr>
          <td>{!! Form::label('password', 'Password: ') !!}</td>
          <td>{!! Form::text('password') !!}</td>
        </tr>
        <tr>
          <td>{!! Form::label('email', 'E-Mail: ') !!}</td>
          <td>{!! Form::text('email') !!}</td>
        </tr>
        <tr>
          <td>{!! Form::label('email', 'Verificar E-Mail: ') !!}</td>
          <td>{!! Form::text('email_verified_at') !!}</td>
        </tr>
        <tr>
          <td>{!! Form::label('role_id', 'Role: ') !!}</td>
          <td>{!! Form::text('role_id') !!}</td>
        </tr>
        <!-- añadimos campo foto -->
        <tr>
          <td>{!! Form::label('foto', 'Foto: ') !!}</td>
          <!-- añadimos boton buscar -->
          <td>{!! Form::file('foto_id') !!}</td>
        </tr>
        <!-- añadimos botones para enviar -->
        <tr>
          <td>{!! Form::submit('Insertar Usuario') !!}</td>

          <!-- añadimos boton reset -->
          <td>{!! Form::reset('Reset') !!}</td>
        </tr>

      </table>
    {!! Form::close() !!}
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous"></script>
  </body>
</html>
