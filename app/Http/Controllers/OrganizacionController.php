<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use Redirect;
use Illuminate\Support\Facades\DB;

class OrganizacionController extends Controller
{
    public function index(){
        return view('org.index', [] );
    }
}
