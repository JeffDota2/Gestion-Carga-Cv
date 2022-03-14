<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Hoja
 *
 * @property $id
 * @property $cedula
 * @property $nombreuno
 * @property $nombredos
 * @property $apellidouno
 * @property $apellidos
 * @property $direccion
 * @property $telefono
 * @property $correo
 * @property $colegio
 * @property $fechaingreso
 * @property $fechafin
 * @property $uni
 * @property $fechainicio
 * @property $fechafinal
 * @property $curso
 * @property $fechaini
 * @property $fechafi
 * @property $empresa
 * @property $cargo
 * @property $descripcion
 * @property $periodouno
 * @property $periododos
 * @property $empresados
 * @property $cargodos
 * @property $descripciondos
 * @property $periodou
 * @property $periodod
 * @property $idioma
 * @property $nivel
 * @property $idiomados
 * @property $niveldos
 * @property $areau
 * @property $conocimientou
 * @property $nivelu
 * @property $aread
 * @property $conocimientod
 * @property $niveld
 * @property $areat
 * @property $conocimientot
 * @property $niveltr
 * @property $nom
 * @property $relacion
 * @property $contacto
 * @property $nomu
 * @property $relaciond
 * @property $contactod
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Hoja extends Model
{
    
    static $rules = [
		'cedula' => 'required',
		'nombreuno' => 'required',
		'nombredos' => 'required',
		'apellidouno' => 'required',
		'apellidos' => 'required',
		'direccion' => 'required',
		'telefono' => 'required',
		'correo' => 'required',
		'colegio' => 'required',
		'fechaingreso' => 'required',
		'fechafin' => 'required',
		'uni' => 'required',
		'fechainicio' => 'required',
		'fechafinal' => 'required',
		'curso' => 'required',
		'fechaini' => 'required',
		'fechafi' => 'required',
		'empresa' => 'required',
		'cargo' => 'required',
		'descripcion' => 'required',
		'periodouno' => 'required',
		'periododos' => 'required',
		'empresados' => 'required',
		'cargodos' => 'required',
		'descripciondos' => 'required',
		'periodou' => 'required',
		'periodod' => 'required',
		'idioma' => 'required',
		'nivel' => 'required',
		'idiomados' => 'required',
		'niveldos' => 'required',
		'areau' => 'required',
		'conocimientou' => 'required',
		'nivelu' => 'required',
		'aread' => 'required',
		'conocimientod' => 'required',
		'niveld' => 'required',
		'areat' => 'required',
		'conocimientot' => 'required',
		'niveltr' => 'required',
		'nom' => 'required',
		'relacion' => 'required',
		'contacto' => 'required',
		'nomu' => 'required',
		'relaciond' => 'required',
		'contactod' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['cedula','nombreuno','nombredos','apellidouno','apellidos','direccion','telefono','correo','colegio','fechaingreso','fechafin','uni','fechainicio','fechafinal','curso','fechaini','fechafi','empresa','cargo','descripcion','periodouno','periododos','empresados','cargodos','descripciondos','periodou','periodod','idioma','nivel','idiomados','niveldos','areau','conocimientou','nivelu','aread','conocimientod','niveld','areat','conocimientot','niveltr','nom','relacion','contacto','nomu','relaciond','contactod'];



}
