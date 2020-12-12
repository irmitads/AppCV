<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Paciente;

class PacienteController extends Controller
{
    
    public function  index()
    {
        $pacientes = Paciente::all();
        return view('admin.paciente.index')->with(compact('pacientes'));
    }
    public function  create()
    {
        return view('admin.paciente.create');
    }

    public function dropDownShow(Request $request)
    {
        
        
        

    }
    public function store(Request $request)
    {
        //dd($request->all());
        $p = new Paciente();

        $p->nombre = $request->input('nombre');
        $p->edad = $request->input('edad');
        $p->peso = $request->input('peso');
        $p->sexo = $request->input('sexo');
        $p->sexo = $request->input('tipoanimal_id');
        $p->sexo = $request->input('dueno_id');
        
        $p->save(); 

        return redirect('admin/pacientes');
        
    }

    public function edit($id)
    {
        $p = Paciente::find($id);
        return view('admin.paciente.edit')->with(compact('p'));
    }

    public function update(Request $request, $id)
    {
        $p = Paciente::find($id);

        $p->nombre = $request->input('nombre');
        $p->edad = $request->input('edad');
        $p->peso = $request->input('peso');
        $p->sexo = $request->input('sexo');
        $p->sexo = $request->input('tipoanimal_id');
        $p->sexo = $request->input('dueno_id');
        
        $p->save(); 

        return redirect('admin/pacientes');
        
    }


    public function destroy( $id)
    {
        $p = Paciente::find($id);
        $p->delete();

        return back();
        
    }
}
