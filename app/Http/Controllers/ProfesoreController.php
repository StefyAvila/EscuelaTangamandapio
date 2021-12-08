<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreProfesoreRequest;
use App\Models\profesor;

class ProfesoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        //
        $profesore = profesor::orderBy('id', 'desc')->paginate(50);

        return view('profesores.index', compact('profesore'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('profesores.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProfesorRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProfesoreRequest $request)
    {
        //
        $profesore = profesor::create($request->all());

        return redirect()->route('profesores.show', $profesore);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Profesore  $profesore
     * @return \Illuminate\Http\Response
     */
    public function show(profesor $profesore)
    {
        //
        return view('profesores.show', compact('profesore'));
         
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Profesore  $profesore
     * @return \Illuminate\Http\Response
     */
    public function edit(profesor $profesore)
    {
        //
        return view('profesores.edit', compact('profesore'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProfesoreRequest  $request
     * @param  \App\Models\Profesore  $profesore
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, profesor $profesore)
    {
        //
        $request->validate([
            'name' =>'required',
            'biografia' => 'required', 
            'telefono' => 'required',
            'grado_id' => 'required'

           
        ]);

        $profesore->update($request->all());

        return redirect()->route('profesores.show',$profesore->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Profesore  $profesore
     * @return \Illuminate\Http\Response
     */
    public function destroy(profesor $profesore)
    {
        //
        $profesore->delete();

        return redirect()->route('profesores.index');
    }
}
