<?php

namespace App\Http\Controllers;

use App\Models\Proyectos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProyectosController extends Controller
{
    public function index()
    {  
        $proyectos = DB::table('proyectos')->get();
        return view('projects.index', ['proyectos' => $proyectos]);
    }

    public function create()
    {
        return view("projects/new"); 
    }

    public function store(Request $request)
    {
        Proyectos::create($request->all());
        return redirect("project/")->with("success", "Proyecto creado satisfactoriamente");
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $proyecto = Proyectos::findOrFail($id);
        return view("projects.update", compact('proyecto'));
    }

    public function update(Request $request, $id)
    {
        Proyectos::create($request->all());
        return redirect()->route('project.index');
    }

    public function destroy($id)
    {
        $proyecto = Proyectos::findOrFail($id);
        $proyecto->delete();
        return redirect('project/')->with('success', 'Proyecto eliminado correctamente');
    }
}
