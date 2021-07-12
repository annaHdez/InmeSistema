<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\DiasFestModel;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;

class DiasFestController extends Controller
{
    public function index(){
        $tableDias = DiasFestModel::all();
        return view('diasfest.index', [ "tableDias" => $tableDias ] );
    }

    public function create(){
        return view('diasfest.create');
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'fecha' => 'required|date',
            'celebracion'=> 'required|min:5|max:50'
        ]);

        $mDias = new DiasFestModel;
        $mDias->id = $request->id;
        $mDias->fecha = $request->fecha;
        $mDias->celebracion = $request->celebracion;
        $mDias->save();

        Session::flash('message','Día añadido');
        return Redirect::to('diasfest');
    }

    public function show($id){
        $modelo = DiasFestModel::find($id);
        return view('diasfest.show', ['modelo'=>$modelo]);
    }
}
