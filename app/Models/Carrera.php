<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Carrera
 *
 * @property $id
 * @property $facultad_id
 * @property $nombre
 * @property $codigo
 * @property $duracion
 * @property $estado
 * @property $created_at
 * @property $updated_at
 *
 * @property Facultade $facultade
 * @property Materia[] $materias
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Carrera extends Model
{
    
    static $rules = [
		
        'facultad_id' => 'required',
            'codigo' => 'required|unique:carreras|max:15',
            'nombre' => 'required|unique:carreras|max:100',
            'duracion' => 'required|numeric|max:15',
            'estado' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['facultad_id','nombre','codigo','duracion','estado'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function facultade()
    {
        return $this->hasOne('App\Models\Facultade', 'id', 'facultad_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function materias()
    {
        return $this->hasMany('App\Models\Materia', 'carrera_id', 'id');
    }
    

}
