<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Donaciones;

class BeneficiarioController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()			
    {

    	$id = Auth::id();
    	$beneficiario['user'] = Auth::user()->name;
    	$beneficiario['donaciones'] = Donaciones::where('idBeneficiario', $id)
    					->leftJoin('donador', 'donador.id', '=', 'idDonador')
    					->get();
    	$beneficiario['total'] = Donaciones::where('idBeneficiario', $id)->sum('cantidad');
    	return view('lista',$beneficiario);

    }
}
