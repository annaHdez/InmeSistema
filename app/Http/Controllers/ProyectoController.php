<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProyectoModel;

class ProyectoController extends Controller
{
    public function index(Request $request){
        $proyecto_table = ProyectoModel::all();
        return view('proyecto.index', ['proyecto_table'=>$proyecto_table]);
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
