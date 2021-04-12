<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ColaboradoresModel;

class ColaboradoresController extends Controller
{
    public function index(Request $request){
        $colaboradores_table = ColaboradoresModel::all();
        return view('colaboradores.index', ['colaboradores_table'=>$colaboradores_table]);
    }

    public function create(){

    }

    public function store(){

    }

    public function save(){

    }

    public function show(){

    }

    public function edit(Request $request){

    }

    public function update(Request $request){

    }
}
