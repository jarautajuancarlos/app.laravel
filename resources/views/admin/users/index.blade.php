<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>ADMIN</h1>
    <hr>
    <table>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Rol Id</th>
        <th scope="col">Nombre</th>
        <th scope="col">Email</th>
        <th scope="col">Foto</th>
        <th scope="col">Create</th>
        <th scope="col">Update</th>
      </tr>

      @if($users)
        @foreach($users as $user)
        <tr>
          <td>{{$user->id}}</td>
          <td>{{$user->role_id}}</td>
          <!-- añadimos ruta para enlace -->
          <td><a href="{{route('users.edit', $user->id)}}"> {{$user->name}}</td></a>
          <td>{{$user->email}}</td>
          <!-- condicion que muestra foto perfil o foto por defecto -->
          @if($user->foto)
            <td><img src="/images/{{$user->foto ? $user->foto->ruta_foto : '-' }}" alt="icono" width="40"> </td>
            @else
            <td><img src="/images/nofoto.jpeg" alt="icono" width="40"> </td>
          @endif
          <td>{{$user->created_at}}</td>
          <td>{{$user->updated_at}}</td>
        </tr>
        @endforeach
      @endif

    </table>

  </body>
</html>
