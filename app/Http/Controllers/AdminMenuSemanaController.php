<?php

namespace App\Http\Controllers;
use App\ModMenu;
use Illuminate\Http\Request;

class AdminMenuSemanaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page_title = 'Menu Semana';
        return view('menu_semana', compact('page_title'));
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
        $menu =  new ModMenu;
        $menu->lun_des = $request->get('lun_des');
        $menu->lun_alm = $request->get('lun_alm');
        $menu->mar_des = $request->get('mar_des');
        $menu->mar_alm = $request->get('mar_alm');
        $menu->mie_des = $request->get('mie_des');
        $menu->mie_alm = $request->get('mie_alm');
        $menu->jue_des = $request->get('jue_des');
        $menu->jue_alm = $request->get('jue_alm');
        $menu->vie_des = $request->get('vie_des');
        $menu->vie_alm = $request->get('vie_alm');

       $response =  $menu->save();

        return response()->json([
            "response"=>$response,
            "cita"=>$menu]);
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
        $menu = Menu::findOrFail($id);
        return view("menu_semana", ["menu"=>$menu]);
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
