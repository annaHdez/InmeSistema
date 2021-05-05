<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PosicionesModel;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class PosicionesController extends Controller
{
    public function index(Request $request){
        $posiciones_table = PosicionesModel::all();
        return view('posiciones.index', ['posiciones_table'=>$posiciones_table]);
    }

    public function create(){
    }

    public function store(){

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
