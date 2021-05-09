<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>ADMIN/EDIT</h1>
    <hr>

  <!-- actualizamos formulario del create para editar los datos -->
      <form method="post" action="{{route('users.update', $user)}}" enctype="multipart/form-data">
              @csrf
              @method('PATCH')
      <table>
        <tr>
          <!-- añadimos campo foto -->
          <!-- condicion que muestra foto perfil o foto por defecto -->
          @if($user->foto)
            <td><img src="/images/{{$user->foto ? $user->foto->ruta_foto : '-' }}" alt="icono" width="40"> </td>
            @else
            <td><img src="/images/nofoto.jpeg" alt="icono" width="40"> </td>
          @endif

        </tr>
          <td colspan="2">{!! Form::file('foto_id', $user->ruta_foto) !!}</td>
        <tr>

        <tr>
          <td>{!! Form::label('name', 'Nombre: ') !!}</td>
          <td>{!! Form::text('name', $user->name) !!}</td>
        </tr>
        <!-- <tr>
          <td>{!! Form::label('password', 'Password: ') !!}</td>
          <td>{!! Form::text('password', $user->password) !!}</td>
        </tr> -->
        <tr>
          <td>{!! Form::label('email', 'E-Mail: ') !!}</td>
          <td>{!! Form::text('email',$user->email) !!}</td>
        </tr>
        <tr>
          <td>{!! Form::label('email', 'Verificar E-Mail: ') !!}</td>
          <td>{!! Form::text('email_verified_at', $user->email_verified_at) !!}</td>
        </tr>
        <tr>
          <td>{!! Form::label('role_id', 'Role: ') !!}</td>
          <td>{!! Form::text('role_id', $user->role_id) !!}</td>
        </tr>
        <tr>

          <!-- añadimos botones para enviar -->
          <td>{!! Form::submit('Actualizar Usuario') !!}</td>
          <!-- añadimos boton reset -->
          <td>{!! Form::reset('Reset') !!}</td>
        </tr>

      </table>
    {!! Form::close() !!}


</form>

  </body>
</html>
