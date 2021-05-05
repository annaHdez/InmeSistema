<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ColaboradoresModel;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class ColabController extends Controller
{
    public function index(Request $request){
        $colab_table = ColaboradoresModel::all();
        return view('colab.index', ['colab_table'=>$colab_table]);
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
