<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// vinculamos clase users
use App\Models\User;

// vinculamos modelo Foto
use App\Models\Foto;

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
      if($archivo=$request->file('ruta_foto')){
        $nombre=$archivo->getClientOriginalName();
        // movemos archivo a carpeta
        $archivo->move('images', $nombre);
        // almacenamos la imagen en la tabla fotos
        $foto=Foto::create(['ruta_foto'=>$nombre]);
        // asignamos id a la foto
        $entrada['ruta_foto']=$foto->id;
      }else{
        // si no hay imagen
        User::create($entrada);
      }

        // añadimos usuario con el formulario create
        // User::create($request->all());
        // redirigimos a la vista index
        // return redirect('/admin/users');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
