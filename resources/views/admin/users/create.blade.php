<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>ADMIN/CREATE</h1>
    <hr>

    <!-- creamos formulario con laravel collective -->
    <!-- creamos enlace para ejecutar la funcion store en este formulario -->

    {!! Form::open([ 'action' => 'App\Http\Controllers\AdminUsersController@store', 'files'=>true]) !!}
      <table>
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

  </body>
</html>
