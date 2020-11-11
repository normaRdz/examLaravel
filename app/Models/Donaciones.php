<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donaciones extends Model
{
    use HasFactory;

    protected $table = 'donacion';
    protected $primaryKey = 'id';

    protected $fillable = [
    	'idDonador', 'idBeneficiario', 'cantidad',
    ];
}
