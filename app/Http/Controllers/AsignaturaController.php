<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Asignatura;

class AsignaturaController extends Controller
{
  /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $asignaturas = Asignatura::all();
        return view('asignaturas.list', compact('asignaturas'));
    }
    
    public function show($id)
    {
        $asignatura = Asignatura::findOrFail($id);
        return view('asignaturas.edit');
    }

    public function store(Request $request)
    {
        $asignatura = new Asignatura;
        $asignatura->user_id = $request->user_id;
        $asignatura->nivel = $request->nivel;
        $asignatura->nombre = $request->nombre;
        $asignatura->descripcion = $request->descripcion;
        $asignatura->save();
        
        return->redirect('asignaturas_list'); 
    }

    public function update(Request $request, $id)
    {
      $asignatura = Asignatura::findOrFail($id);
      $asignatura->user_id = $request->user_id;
      $asignatura->nivel = $request->nivel;
      $asignatura->nombre = $request->nombre;
      $asignatura->descripcion = $request->descripcion;
      $asignatura->save(); 
      
      return->redirect('asignaturas_list');
    }

    public function destroy($id)
    {
        $asignatura = Asignatura::findOrFail($id);
        $asignatura->delete();
        
        return->redirect('asignaturas_list');
    }
}
