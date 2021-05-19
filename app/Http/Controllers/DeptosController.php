<?php

namespace App\Http\Controllers;
use Session;
use Redirect;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\DeptosModel;

class DeptosController extends Controller
{
    public function index(Request $request){
        $tableDeptos = DeptosModel::all();
        return view('deptos.index', ['tableDeptos'=>$tableDeptos]);
    }

    public function create(){
        return view('deptos.create');
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
