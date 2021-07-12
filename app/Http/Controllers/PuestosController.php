<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\PuestosModel;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;

class PuestosController extends Controller
{
    public function index(Request $request){
        $tablePuestos = PuestosModel::all();
        return view('puestos.index', ['tablePuestos'=>$tablePuestos]);
    }

    public function create(){
        return view('puestos.create');
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'puesto_trabajo' => 'required|min:5|max:50',
            'sueldo' => 'required|number',
            'id_depto'=>'required'
        ]);

        $mPuesto = new PuestosModel;
        $mPuesto->puesto_trabajo = $request->puesto_trabajo;
        $mPuesto->sueldo = $request->sueldo;
        $mPuesto->id_depto = $request->id_depto;
        $mPuesto->save();

        Session::flash('message','Sigla añadida');
        return Redirect::to('puestos');
    }

    public function show(){
        $modelo = PuestosModel::find();
        return view('puestos.show', ['modelo'=>$modelo]);
    }

    public function edit(Request $request){

    }

    public function update(Request $request){

    }

    public function save(){

    }
}
