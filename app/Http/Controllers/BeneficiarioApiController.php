<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class BeneficiarioApiController extends Controller
{
    public function list()
    {
    	$data = User::get();
    	foreach ($data as $row) {
            $result[] = ["id" => $row->id, "text" => $row->name];
        }
        echo(json_encode(["results" => $result]));
    	// dd($data);
    }
}
