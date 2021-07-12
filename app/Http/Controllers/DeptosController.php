<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\DeptosModel;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;

class DeptosController extends Controller
{
    public function index(){
        $tableDeptos = DeptosModel::all();
        return view('deptos.index', [ "tableDeptos" => $tableDeptos ] );
    }

    public function create(){
        return view('deptos.create');
    }
    
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nomDepto' => 'required|min:5|max:50'
        ]);

        $mDepto = new DeptosModel;
        $mDepto->id = $request->id;
        $mDepto->nomDepto = $request->nomDepto;
        $mDepto->save();

        Session::flash('message','Departamento añadido');
        return Redirect::to('deptos');
    }

    public function show($id){
        $modelo = DeptosModel::find($id);
        return view('deptos.show', ['modelo'=>$modelo]);
    }

    public function edit($id){
        $modelo = DeptosModel::find($id);
        $tableDeptos = DeptosModel::orderBy('id')->get()->pluck('id', 'nomDepto');
        return view('deptos.edit'.$id, ['modelo'=>$modelo, 'tableDeptos'=>$tableDeptos]);

        Session::flash('message','Departamento actualizado');
        return Redirect::to('deptos');

    }

    public function update(Request $request, $id){
        $validateData = $request->validate([
            'nomDepto'=> 'required|min:5|max:50'
        ]);

        $depto = DeptosModel::find($id);
        $depto ->fill($request->all());
        $depto->save();

        $request->session()->flash('message','Departamento actualizado');
        return Redirect::to('deptos');
    }

    public function delete($id){
        $depto = DeptosModel::find($id);
        $depto->delete();
        return Redirect::to('deptos');
    }
}
