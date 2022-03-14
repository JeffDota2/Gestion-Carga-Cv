<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Rubrica
 *
 * @property $id
 * @property $nom_estudiante
 * @property $nivel
 * @property $pe_lectivo
 * @property $ent_formadora
 * @property $tut_empresa
 * @property $tut_instituto
 * @property $fecha_evaluacion
 * @property $hr_practica
 * @property $desde
 * @property $hasta
 * @property $ent_documento
 * @property $pres_proyecto
 * @property $ad_conocimiento
 * @property $ap_conocimiento
 * @property $sum_uno
 * @property $pro_uno
 * @property $prom_evaluacion
 * @property $pre_proyecto
 * @property $cum_objetivo
 * @property $actitud
 * @property $sum_dos
 * @property $pro_dos
 * @property $cal_instituto
 * @property $cal_empresa
 * @property $cal_final
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Rubrica extends Model
{
    
    static $rules = [
		'nom_estudiante' => 'required',
		'nivel' => 'required',
		'pe_lectivo' => 'required',
		'ent_formadora' => 'required',
		'tut_empresa' => 'required',
		'tut_instituto' => 'required',
		'fecha_evaluacion' => 'required',
		'hr_practica' => 'required',
		'desde' => 'required',
		'hasta' => 'required',
		'ent_documento' => 'required',
		'pres_proyecto' => 'required',
		'ad_conocimiento' => 'required',
		'ap_conocimiento' => 'required',
		'sum_uno' => 'required',
		'pro_uno' => 'required',
		'prom_evaluacion' => 'required',
		'pre_proyecto' => 'required',
		'cum_objetivo' => 'required',
		'actitud' => 'required',
		'sum_dos' => 'required',
		'pro_dos' => 'required',
		'cal_instituto' => 'required',
		'cal_empresa' => 'required',
		'cal_final' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nom_estudiante','nivel','pe_lectivo','ent_formadora','tut_empresa','tut_instituto','fecha_evaluacion','hr_practica','desde','hasta','ent_documento','pres_proyecto','ad_conocimiento','ap_conocimiento','sum_uno','pro_uno','prom_evaluacion','pre_proyecto','cum_objetivo','actitud','sum_dos','pro_dos','cal_instituto','cal_empresa','cal_final'];



}
