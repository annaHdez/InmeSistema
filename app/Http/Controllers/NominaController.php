<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\NominaModel;

class NominaController extends Controller
{
    public function index(Request $request){
        $nomina_table = NominaModel::all();
        return view('nomina.index', ['nomina_table'=>$nomina_table]);
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
