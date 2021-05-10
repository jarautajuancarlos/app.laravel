<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// vinculamos clase users
use App\Models\User;

// vinculamos modelo Foto
use App\Models\Foto;

// importar mensajes flash
use Illuminate\Support\Facades\Session;

class AdminUsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // rescatamos los datos de la bbdd
        $users=User::all();

        // devuelve la vista index
        return view('admin.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      // devuelve la vista CREATE
      return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      // enlazamos imagen de formulario
      $entrada=$request->all();
      if($archivo=$request->file('foto_id')){
        $nombre=$archivo->getClientOriginalName();
        // movemos archivo a carpeta
        $archivo->move('images', $nombre);
        // almacenamos la imagen en la tabla fotos
        $foto=Foto::create(['ruta_foto'=>$nombre]);
        // asignamos id a la foto
        $entrada['foto_id']=$foto->id;
      }else{
        // si no hay imagen
        // User::create($entrada);
      }

      // encriptamos contraseña
      $entrada['password']=bcrypt($request->password);
      User::create($entrada);

        // añadimos usuario con el formulario create
        // User::create($request->all());
        // redirigimos a la vista index
        return redirect('/admin/users');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //mostrar informacion usuario para editar
        $user=User::findOrFail($id);
        return view ('admin.users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // añadimos funcion para cambiar datos registro
        $user=User::findOrFail($id);
        // añadimos
        $entrada=$request->all();
        if($archivo=$request->file('foto_id')){
          $nombre=$archivo->getClientOriginalName();
          // movemos archivo a carpeta
          $archivo->move('images', $nombre);
          // almacenamos la imagen en la tabla fotos
          $foto=Foto::create(['ruta_foto'=>$nombre]);
          // asignamos id a la foto
          $entrada['foto_id']=$foto->id;
        }else{
          // si no hay imagen
          // User::create($entrada);
        }
        $user->update($entrada);
        //redirigimos el metodo update
        return redirect('/admin/users');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //añadimos función para destroy
        // eliminamos el registro en bbdd
        $user=User::findOrFail($id);
        $user->delete();

        // mensaje flash
        Session::flash('usuario_borrado', 'Usuario Eliminado');
        // redirigimos a index
        return redirect('/admin/users');
    }














}
