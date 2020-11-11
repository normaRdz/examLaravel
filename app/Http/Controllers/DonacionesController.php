<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Donaciones;

class DonacionesController extends Controller
{
    public function index()
    {
    	return view('donaciones');
    }

    public function guardar()
    {
    	$donacion = new Donaciones;

    	$donacion->idDonador = $_POST['donador'];
    	$donacion->idBeneficiario = $_POST['beneficiario'];
    	$donacion->cantidad = $_POST['cantidad'];
    	$donacion->fecha = date("j F Y");

    	$donacion->save();
    	return ['status' => 'success'];
    }
}
