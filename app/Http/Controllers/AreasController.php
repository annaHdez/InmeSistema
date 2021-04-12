<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AreasModel;
use Illuminate\Support\Facades\DB;


class AreasController extends Controller
{
    public function index(Request $request){
        $areas_table = AreasModel::all();
        return view('areas.index', ['areas_table'=>$areas_table]);
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
