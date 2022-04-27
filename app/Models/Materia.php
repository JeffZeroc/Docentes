<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Materia
 *
 * @property $id
 * @property $carrera_id
 * @property $nombre
 * @property $codigo
 * @property $hora_a
 * @property $hora_p
 * @property $hora_d
 * @property $created_at
 * @property $updated_at
 *
 * @property Carrera $carrera
 * @property DocenteMateria[] $docenteMaterias
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Materia extends Model
{
    
    static $rules = [
		'carrera_id' => 'required',
            'nombre' => 'required|max:255',
            'codigo' => 'required|string|max:15|unique:materias',
            'hora_a' => 'required|numeric',
            'hora_p' => 'required|numeric',
            'hora_d' => 'required|numeric',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['carrera_id','nombre','codigo','hora_a','hora_p','hora_d'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function carrera()
    {
        return $this->hasOne('App\Models\Carrera', 'id', 'carrera_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function docenteMaterias()
    {
        return $this->hasMany('App\Models\DocenteMateria', 'materia_id', 'id');
    }
    

}
