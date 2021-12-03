<?php

namespace App\Http\Controllers;

use App\Models\Profesore;
use Illuminate\Http\Request;
use App\Http\Requests\StoreProfesoreRequest;

class ProfesoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        //
        $profesore = Profesore::orderBy('id', 'desc')->paginate(10);

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
     * @param  \App\Http\Requests\StoreProfesoreRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProfesoreRequest $request)
    {
        //
        $profesore = Profesore::create($request->all());

        return redirect()->route('profesores.show', $profesore);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Profesore  $profesore
     * @return \Illuminate\Http\Response
     */
    public function show(Profesore $profesore)
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
    public function edit(Profesore $profesore)
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
    public function update(Request $request, Profesore $profesore)
    {
        //
        $request->validate([
            'name' =>'required',
            'biografia' => 'required', 
            'telefono' => 'required', 
            'direccion' => 'required'
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
    public function destroy(Profesore $profesore)
    {
        //
        $profesore->delete();

        return redirect()->route('profesores.index');
    }
}
