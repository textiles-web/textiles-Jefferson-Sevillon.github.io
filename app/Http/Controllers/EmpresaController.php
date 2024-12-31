<?php

namespace App\Http\Controllers;

use App\Models\empresa;
use Illuminate\Http\Request;

class EmpresaController extends Controller
{
    public function index(){
        $empresa = empresa::all();

        return view('Admin.empresa.index', compact('empresa'));
    }

    public function edit($id){
        $edit = empresa::find($id);
        return view('Admin.empresa.edit', compact('edit'));
    }

    public function update(Request $request, empresa $red,$img){
    
        $datos = $request->all();
        //dd($datos);
        $red = empresa::find($datos['id']);

        if($imagen = $request->file('logo')){
            $ruta = 'imagen/';
            $nombreI = date('YmdHis').".".$imagen->getClientOriginalExtension();
            $imagen->move($ruta, $nombreI);
            $datos['logo'] = "$nombreI";
        }else{
            $datos['logo'] = $img;
        }
        $red->update($datos);
       
        return redirect()->to('/empresa');

    }
}

