<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Juegos;

class JuegosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $juegos = Juegos::latest()->paginate(5);
  
        return view('juegos.index',compact('juegos'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('juegos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'plataformas' => 'required',
            'anlanzamiento' => 'required',
            'genero' => 'required',
        ]);
  
        Juegos::create($request->all());
   
        return redirect()->route('juegos.index')
                        ->with('success','Juego creado correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Juegos $juego)
    {
        return view('juegos.show',compact('juego'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Juegos $juego)
    {
        return view('juegos.edit',compact('juego'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Juegos $juego)
    {
        $request->validate([
            'nombre' => 'required',
            'plataformas' => 'required',
            'anlanzamiento' => 'required',
            'genero' => 'required',
        ]);
  
        $juego->update($request->all());
  
        return redirect()->route('juegos.index')
                        ->with('success','Juego actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Juegos $juego)
    {
        $juego->delete();
  
        return redirect()->route('juegos.index')
                        ->with('success','Juego borrado correctamente');
    }
}
