<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FrutaModel extends Model
{
    public $timestamps = false;
    protected  $table='frutamodel';
    protected $fillable=['Nombre','Cantidad','Proveedor'];
    use HasFactory;
}
