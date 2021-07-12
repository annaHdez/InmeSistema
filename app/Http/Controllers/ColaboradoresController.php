<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ColaboradoresModel;
use Illuminate\Support\Facades\DB;

class ColaboradoresController extends Controller
{
    public function index(){
        $tableColab = ColaboradoresModel::all();
        return view('colab.index', ['tableColab'=>$tableColab]);
    }

    public function create(){
        return view('colab.create');
    }

    public function store(Request $request){
        $validateData = $request->validate([
            'sexo' => 'required',
            'fechaNac' => 'required|',
            'nombre' => 'required|min:5|max:50',
            'ape_paterno' => 'required|min:5|max:50',
            'ape_materno' => 'required|min:5|max:50',
            'correo' => 'required|email',
            'grado_estudios' => 'required|min:8|max:30'
        ]);

        $mColab = new ColaboradoresModel;
        $mColab->id = $request->id;
        $mColab-> nombre = $request->nombre;
        $mColab->save();

        Session::flash('message','Colaborador añadido');
        return Redirect::to('colab');
    }

    public function show(){

    }

    public function edit(Request $request){

    }

    public function update(Request $request){

    }

    public function save(){

    }
}
