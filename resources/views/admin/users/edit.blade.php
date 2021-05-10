<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
  </head>
  <body>
    <h1 style="text-align:center; margin:40px;">ADMIN/EDIT</h1>
    <hr>

  <!-- actualizamos formulario del create para editar los datos -->
      <form method="post" action="{{route('users.update', $user)}}" enctype="multipart/form-data">
              @csrf
              @method('PATCH')
      <table class="table">
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

<!-- añadimos formulario para destroy -->
<form method="post" action="{{route('users.destroy', $user)}}" enctype="multipart/form-data">
        @csrf
        @method('DELETE')
        <input type="submit" name="" value="Eliminar Usuario ">
</form>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous"></script>
  </body>
</html>
