<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Donador;

class DonadorApiController extends Controller
{
    public function list()
    {
    	$data = Donador::get();
    	foreach ($data as $row) {
            $result[] = ["id" => $row->id, "text" => $row->nombre.' '.$row->apellidos];
        }
        echo(json_encode(["results" => $result]));
    	// dd($data);
    }
}
