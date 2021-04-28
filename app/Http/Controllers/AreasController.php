<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AreasModel;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class AreasController extends Controller
{
    public function index(Request $request){
        $areas = AreasModel::all();
        return view('areas.index', ['areas'=>$areas]);
    }

    public function create(){
        $areas = AreasModel::orderBy('departamento');
        return view('areas.index#Crear_area', ['areas'=>$areas]);
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'id' => 'min:1|max:30',
            'posicion' => 'min:1|max:20',
            'departamento' => 'min:1|max:50',
            'puesto' => 'min:1|max:50',
            'sueldo' => 'numeric|min:0|max:100000'
        ]);

        $modelo = new AreasModel($request->all());
            $modelo -> save();
            return Redirect::to('Areas');
    }

    public function show(){
        $areas = AreasModel::find('');
    }

    public function edit(Request $request){

    }

    public function update(Request $request){

    }

    public function save(){

    }

}
