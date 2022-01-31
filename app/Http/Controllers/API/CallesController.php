<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Calles;
use App\Models\Ciudades;
use App\Models\Provincias;
use App\Models\Regiones;

class CallesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Calles::all();
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
        return Calles::create($request->all());
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
        return Calles::where('calle_id', '=', $id)->get();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, $id)
    // {
    //     //
    //     $calle = Calles::find($id);
    //     if (!$calle) {
    //         return response()->json(['mensaje' => 'no se encuentra la calle'], 404);
    //     }
    //     $calle->calle_nombre = $request->input('calle_nombre');
    //     $calle->ciudad_id = $request->input('ciudad_id');
    //     $calle->save();

    //     return response()->json($calle, 200);
    // }

    public function update(Request $request, $id)
    {
        //
        $calle = Calles::where('calle_id', '=', $id);
        $calle->update($request->all());

        return 201;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function delete($id)
    {
        //
        Calles::where('calle_id', '=', $id)->delete();
    }

    public function getCalle()
    {
        $datosCalle = Calles::join('ciudades', 'calles.ciudad_id', '=', 'ciudades.ciudad_id')
            ->join('provincias', 'ciudades.provincia_id', '=', 'provincias.provincia_id')
            ->join('regiones', 'provincias.region_id', '=', 'regiones.region_id')
            ->select(
                'calles.*',
                'ciudades.ciudad_id',
                'ciudades.ciudad_nombre',
                'provincias.provincia_id',
                'provincias.provincia_nombre',
                'regiones.region_id',
                'regiones.region_nombre'
            )
            ->orderBy('calles.calle_id', 'asc')
            ->get();
        return response()->json($datosCalle, 200);
    }


    public function getCalleParametro($id)
    {
        $datosCalleParametro = Calles::join('ciudades', 'calles.ciudad_id', '=', 'ciudades.ciudad_id')
            ->join('provincias', 'ciudades.provincia_id', '=', 'provincias.provincia_id')
            ->join('regiones', 'provincias.region_id', '=', 'regiones.region_id')
            ->select(
                'calles.*',
                'ciudades.ciudad_id',
                'ciudades.ciudad_nombre',
                'provincias.provincia_id',
                'provincias.provincia_nombre',
                'regiones.region_id',
                'regiones.region_nombre'
            )
            ->where('calles.calle_id', '=', $id)
            ->orderBy('calles.calle_id', 'asc')
            ->get();
        return response()->json($datosCalleParametro, 200);
    }


    public function callesNombres()
    {
        $datosCalle = Calles::join('ciudades', 'calles.ciudad_id', '=', 'ciudades.ciudad_id')
            ->join('provincias', 'ciudades.provincia_id', '=', 'provincias.provincia_id')
            ->join('regiones', 'provincias.region_id', '=', 'regiones.region_id')
            ->select(
                'calles.*',
                'ciudades.ciudad_id as nombreCiudad',
                'ciudades.ciudad_nombre as idCiudad',
                'provincias.provincia_id as idProvincia',
                'provincias.provincia_nombre nombreProvincia',
                'regiones.region_id idRegion',
                'regiones.region_nombre nombreRegion'
            )
            ->orderBy('calles.calle_id', 'asc')
            ->get();
        return response()->json($datosCalle, 200);
    }
}
