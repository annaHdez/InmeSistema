<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\SiglasModel;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;

class SiglasController extends Controller
{
    public function index(){
        $tableSiglas = SiglasModel::all();
        return view('siglas.index', [ "tableSiglas" => $tableSiglas ] );
    }

    public function create(){
        return view('siglas.create');
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'id' => 'text|required|min:1|max:10',
            'descripcion'=>'required|min:5|max:50'
        ]);

        $mSigla = new SiglasModel;
        $mSigla->id = $request->id;
        $mSigla->descripcion = $request->descripcion;
        $mSigla->save();

        Session::flash('message','Sigla añadida');
        return Redirect::to('siglas');
    }

    public function show(){
        $modelo = SiglasModel::find();
        return view('siglas.show', ['modelo'=>$modelo]);
    }
}
