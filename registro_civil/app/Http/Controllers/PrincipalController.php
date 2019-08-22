<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Registro;

class PrincipalController extends Controller
{
    public function index(){
        $registros = Registro::all();
        return view('pages.principal',compact('registros'));
    }

    public function show($id){
        $registro = Registro::find($id);
        return view('pages.show',compact('registro'));
    }

    public function create(){
        return view('pages.create');
    }

    public function store(Request $request){
        // return $request;
        $request->validate([
            'nombre1' => 'required',
            'dni1' => 'required',
            'domicilio1' => 'required',
            'telefono1' => 'required',
            'parentesco1' => 'required',
            'primer_apellido_titular' => 'required',
            'segundo_apellido_titular' => 'required',
            'prenombres_titular' => 'required',
            'sexo_titular' => 'required',
            'lugar_titular' => 'required',
            'fecha_titular' => 'required',
            'hora_titular' => 'required',
            'hospital_titular' => 'required',
            'apellidos_padre' => 'required',
            'prenombres_padre' => 'required',
            'dni_padre' => 'required',
            'nacionalidad_padre' => 'required',
            'apellidos_madre' => 'required',
            'prenombres_madre' => 'required',
            'dni_madre' => 'required',
            'nacionalidad_madre' => 'required',
        ]);

        $registro = new Registro();
        $registro->nombre1 = $request->nombre1;
        $registro->dni1 = $request->dni1;
        $registro->domicilio1 = $request->domicilio1;
        $registro->telefono1 = $request->telefono1;
        $registro->parentesco1 = $request->parentesco1;
        $registro->primer_apellido_titular = $request->primer_apellido_titular;
        $registro->segundo_apellido_titular = $request->segundo_apellido_titular;
        $registro->prenombres_titular = $request->prenombres_titular;
        $registro->sexo_titular = $request->sexo_titular;
        $registro->lugar_titular = $request->lugar_titular;
        $registro->fecha_titular = $request->fecha_titular;
        $registro->hora_titular = $request->hora_titular;
        $registro->hospital_titular = $request->hospital_titular;
        $registro->apellidos_padre = $request->apellidos_padre;
        $registro->prenombres_padre = $request->prenombres_padre;
        $registro->dni_padre = $request->dni_padre;
        $registro->nacionalidad_padre = $request->nacionalidad_padre;
        $registro->apellidos_madre = $request->apellidos_madre;
        $registro->prenombres_madre = $request->prenombres_madre;
        $registro->dni_madre = $request->dni_madre;
        $registro->nacionalidad_madre = $request->nacionalidad_madre;
        $registro->save();

        return redirect()->route('principal');

    }

    public function edit($id){
        $registro = Registro::find($id);
        return view('pages.edit',compact('registro'));
    }

    public function update(Request $request,$id){

        $request->validate([
            'nombre1' => 'required',
            'dni1' => 'required',
            'domicilio1' => 'required',
            'telefono1' => 'required',
            'parentesco1' => 'required',
            'primer_apellido_titular' => 'required',
            'segundo_apellido_titular' => 'required',
            'prenombres_titular' => 'required',
            'sexo_titular' => 'required',
            'lugar_titular' => 'required',
            'fecha_titular' => 'required',
            'hora_titular' => 'required',
            'hospital_titular' => 'required',
            'apellidos_padre' => 'required',
            'prenombres_padre' => 'required',
            'dni_padre' => 'required',
            'nacionalidad_padre' => 'required',
            'apellidos_madre' => 'required',
            'prenombres_madre' => 'required',
            'dni_madre' => 'required',
            'nacionalidad_madre' => 'required',
        ]);
        
        $registro = Registro::find($id);
        $registro->nombre1 = $request->nombre1;
        $registro->dni1 = $request->dni1;
        $registro->domicilio1 = $request->domicilio1;
        $registro->telefono1 = $request->telefono1;
        $registro->parentesco1 = $request->parentesco1;
        $registro->primer_apellido_titular = $request->primer_apellido_titular;
        $registro->segundo_apellido_titular = $request->segundo_apellido_titular;
        $registro->prenombres_titular = $request->prenombres_titular;
        $registro->sexo_titular = $request->sexo_titular;
        $registro->lugar_titular = $request->lugar_titular;
        $registro->fecha_titular = $request->fecha_titular;
        $registro->hora_titular = $request->hora_titular;
        $registro->hospital_titular = $request->hospital_titular;
        $registro->apellidos_padre = $request->apellidos_padre;
        $registro->prenombres_padre = $request->prenombres_padre;
        $registro->dni_padre = $request->dni_padre;
        $registro->nacionalidad_padre = $request->nacionalidad_padre;
        $registro->apellidos_madre = $request->apellidos_madre;
        $registro->prenombres_madre = $request->prenombres_madre;
        $registro->dni_madre = $request->dni_madre;
        $registro->nacionalidad_madre = $request->nacionalidad_madre;
        $registro->save();

        return redirect()->back();
    }

    public function destroy($id){
        $registro = Registro::find($id);
        $registro->delete();

        return redirect()->back();
    }
}
