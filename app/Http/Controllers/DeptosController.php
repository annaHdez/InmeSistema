<?php

namespace App\Http\Controllers;
use Symfony\Component\HttpFoundation\Session\Session;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\DeptosModel;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Redis;

class DeptosController extends Controller
{
    public function index(Request $request){
        $deptos_table = DeptosModel::all();
        return view('deptos.index', ['deptos_table'=>$deptos_table]);
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
