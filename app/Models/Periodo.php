<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Periodo
 *
 * @property $id
 * @property $nombre
 * @property $codigo
 * @property $inicio_periodo
 * @property $fin_periodo
 * @property $created_at
 * @property $updated_at
 *
 * @property DocenteMateria[] $docenteMaterias
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Periodo extends Model
{
    
    static $rules = [
		'nombre' => 'required|unique:periodos|max:25',
    'codigo' => 'required|unique:periodos|max:11|min:11',
		'inicio_periodo' => 'required',
		'fin_periodo' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','codigo','inicio_periodo','fin_periodo'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function docenteMaterias()
    {
        return $this->hasMany('App\Models\DocenteMateria', 'periodo_id', 'id');
    }
    

}
