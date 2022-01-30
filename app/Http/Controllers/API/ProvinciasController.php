<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Provincias;
use Illuminate\Http\Request;

class ProvinciasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Provincias::all();
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
        return Provincias::create($request->all());
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
        return Provincias::where('provincia_id', '=', $id)->get();
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
        $provincia = Provincias::findOrFail($id);
        $provincia->update($request->all());

        return $provincia;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function destroy($id)
    // {
    //     //
    // }


    public function delete(Request $request, $id)
    {
        $provincia = Provincias::findOrFail($id);
        $provincia->delete();

        return 204;
    }


    public function provinciaRegion($id)
    {
        $provincia = Provincias::where('region_id', '=', $id)->get(); //obtener todas las provincias donde clave foranea
        //'region_id' sea igual a  mi id $idRegion
        return response()->json($provincia, 200);
    }
}
