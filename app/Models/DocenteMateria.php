<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DocenteMateria
 *
 * @property $id
 * @property $docente_id
 * @property $periodo_id
 * @property $materia_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Docente $docente
 * @property Materia $materia
 * @property Periodo $periodo
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class DocenteMateria extends Model
{
    
    static $rules = [
		'docente_id' => 'required',
		'periodo_id' => 'required',
		'materia_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['docente_id','periodo_id','materia_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function docente()
    {
        return $this->hasOne('App\Models\Docente', 'id', 'docente_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function materia()
    {
        return $this->hasOne('App\Models\Materia', 'id', 'materia_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function periodo()
    {
        return $this->hasOne('App\Models\Periodo', 'id', 'periodo_id');
    }
    

}
