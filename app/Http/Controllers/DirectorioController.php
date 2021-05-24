<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Directorio;

class DirectorioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        https://www.youtube.com/watch?v=uNPDIqpMEv4
        return json_encode( Directorio::all() );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $input = $request->all();
        Directorio::create( $input );
        return response()->json( [
            'res' => true,
            'message' => 'Registro creado correctamente'
        ], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show( $id )
    {

        $directorio = Directorio::find($id);
        return json_encode( $directorio );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update( Request $request, $id )
    {
        //
        $nombre =  $request->input('nombre');
        $direccion =  $request->input('direccion');

        Directorio::where('id', $id)->update(
            ['nombre'=>$nombre,
             'direccion'=>$direccion
            ]
          );

        return response()->json( [
            'res' => true,
            'message' => 'Registro ha sido actualizado correctamente'
        ], 200);

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
        Directorio::destroy( $id );
        return json_encode(["msg"=>"removed"], 200);
    }
}
