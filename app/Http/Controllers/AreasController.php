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
        $areas_table = AreasModel::all();
        return view('areas.index', ['areas_table'=>$areas_table]);
    }

    public function create(){
        return view('areas.create');
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
            return Redirect::to('Areas_table');
    }

    public function show(){
        $areas_table = AreasModel::find('');
    }

    public function edit(Request $request){

    }

    public function update(Request $request){

    }

    public function save(){

    }

}
