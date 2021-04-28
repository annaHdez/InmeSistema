<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ColaboradoresModel;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class ColaboradoresController extends Controller
{
    public function index(Request $request){
        $colaboradores = ColaboradoresModel::all();
        return view('colaboradores.index', ['colaboradores'=>$colaboradores]);
    }

    public function create(){
        $colaboradores = ColaboradoresModel::orderBy('ape_pat', 'ape_mat', 'nombre');
        return view('colaboradores.index#Crear_colab', ['colaboradores' => $colaboradores]);
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
