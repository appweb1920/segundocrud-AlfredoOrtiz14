<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\piezas;

class PiezasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $p = piezas::all();
        return view('welcome')->with('piezas', $p);
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
        $pieza = new piezas;
        $pieza->nombre = $request->nombre;
        $pieza->descripcion = $request->descripcion;
        $pieza->cantidad = $request->cantidad;
        $pieza->costo = $request->costo;
        $pieza->save();

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //buscar el dato
        $pieza = piezas::find($id);
        //pasarlo a la vista
        return view('actualizaPieza')->with('pieza', $pieza);
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


    public function actualiza(Request $request)
    {
        $pieza = piezas::find($request->id);
        if(!is_null($pieza))
        {
            $pieza->nombre = $request->nombre;
            $pieza->descripcion = $request->descripcion;
            $pieza->cantidad = $request->cantidad;
            $pieza->costo = $request->costo;
            $pieza->save();   
        }
        return redirect('/');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pieza = piezas::find($id);
        $pieza->delete();
        return redirect('/');
    }
}
