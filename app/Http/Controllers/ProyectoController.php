<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProyectoModel;

class ProyectoController extends Controller
{
    public function index(Request $request){
        $proyectos_table = ProyectoModel::all();
        return view('proyectos.index', ['proyectos_table'=>$proyectos_table]);
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
