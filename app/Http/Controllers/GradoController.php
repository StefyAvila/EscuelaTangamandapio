<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreGradoRequest;
use Illuminate\Http\Request;
use App\Models\Grado;

class GradoController extends Controller
{
    //
    public function index(){
        $grado = Grado::orderBy('id')->paginate(20);
        return view('grados.index', compact('grado'));
    }

    public function create(){
        return view('grados.create');
    }
    public function store(StoreGradoRequest $request){
     
        $grado = Grado::create($request->all());
        return redirect()->route('grados.show', $grado);
    }

    public function show(Grado $grado){
        return view('grados.show', compact('grado'));
    }

    public function edit(Grado $grado){
        return view('grados.edit', compact('grado'));
    }

    public function update(Request $request, Grado $grado){
        $request->validate([
            'username' => 'required'
        ]);
        $grado->update($request->all());

        return redirect()->route('grados.show', $grado->id);
    }

    public function destroy(Grado $grado){
        $grado->delete();
        return redirect()->route('grados.index');
    }


}
