<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Slim;


class AdminCustomUniformesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page_title = 'Uniformes';
        return view('uniformes', compact('page_title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if(!$request->input('slim[]')||!$request->input('nombre_uniforme')||!$request->input('talla')||!$request->input('sexo')||!$request->input('color')||!$request->input('precio') )
        {
            //return false;
            response()->json(['errors'=>array(['code'=>422,'message'=>'Revise los datos en el json faltan elementos '])],422);
        }


          $slimArray =  procesarImagen();
          $array = json_decode( $slimArray,true);
          $nombreImage = $array['name'];
          $urlIp = "http://192.168.1.107:8080/ci/public/tmp/";

        DB::table('uniformes')->insert(
            ['foto_uniforme' => $urlIp.$nombreImage,
             'id_nombre_uniforme' => $request->input('nombre_uniforme'),
             'id_talla' => $request->input('talla'),
             'id_color' =>$request->input('color'),
             'id_precio' => $request->input('precio'),
             'select_sexo' => $request->input('sexo')
               ]
        );

        return  $request->input('nombre_uniforme');

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
