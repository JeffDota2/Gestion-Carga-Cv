<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Empresariale
 *
 * @property $id
 * @property $nom_estudiante
 * @property $carrera
 * @property $nivel
 * @property $pe_lectivo
 * @property $ent_formadora
 * @property $hr_practicas
 * @property $tit_proyecto
 * @property $analisis
 * @property $obj_proyecto
 * @property $des_proyecto
 * @property $indicador
 * @property $meta
 * @property $presupuesto
 * @property $medicion
 * @property $fuente
 * @property $beneficios
 * @property $comentarios
 * @property $cor_carrera
 * @property $tut_empresa
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Empresariale extends Model
{
    
    static $rules = [
		'nom_estudiante' => 'required',
		'carrera' => 'required',
		'nivel' => 'required',
		'pe_lectivo' => 'required',
		'ent_formadora' => 'required',
		'hr_practicas' => 'required',
		'tit_proyecto' => 'required',
		'analisis' => 'required',
		'obj_proyecto' => 'required',
		'des_proyecto' => 'required',
		'indicador' => 'required',
		'meta' => 'required',
		'presupuesto' => 'required',
		'medicion' => 'required',
		'fuente' => 'required',
		'beneficios' => 'required',
		'comentarios' => 'required',
		'cor_carrera' => 'required',
		'tut_empresa' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nom_estudiante','carrera','nivel','pe_lectivo','ent_formadora','hr_practicas','tit_proyecto','analisis','obj_proyecto','des_proyecto','indicador','meta','presupuesto','medicion','fuente','beneficios','comentarios','cor_carrera','tut_empresa'];



}
