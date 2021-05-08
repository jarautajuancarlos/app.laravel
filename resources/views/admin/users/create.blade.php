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

    {!! Form::open(['url' => 'foo/bar']) !!}
      <table>
        <tr>
          <td>{!! Form::label('email', 'E-Mail Address') !!}</td>
          <td>{!! Form::text('username') !!}</td>
        </tr>
        <tr>
          <td>{!! Form::label('email', 'E-Mail Address') !!}</td>
          <td>{!! Form::text('username') !!}</td>
        </tr>
        <tr>
          <td>{!! Form::label('email', 'E-Mail Address') !!}</td>
          <td>{!! Form::text('username') !!}</td>
        </tr>
        <tr>
          <td>{!! Form::label('email', 'E-Mail Address') !!}</td>
          <td>{!! Form::text('username') !!}</td>
        </tr>
        <tr>
          <td>{!! Form::label('email', 'E-Mail Address') !!}</td>
          <td>{!! Form::text('username') !!}</td>
        </tr>
        <tr>
          <td>{!! Form::label('email', 'E-Mail Address') !!}</td>
          <td>{!! Form::text('username') !!}</td>
        </tr>
        <tr>
          <td>{!! Form::label('email', 'E-Mail Address') !!}</td>
          <td>{!! Form::text('username') !!}</td>
        </tr>






      </table>
    {!! Form::close() !!}
  </body>
</html>
