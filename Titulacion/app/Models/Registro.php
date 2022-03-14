<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registro extends Model
{
    //use HasFactory;
    protected $table='documento';
    protected $primaryKey="id_doc";

    public $timestamps=false;
    protected $fillable = ['nombre','nivel','entidad_formadora','documento'];
}
