<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
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
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous"></script>
  </body>
</html>
