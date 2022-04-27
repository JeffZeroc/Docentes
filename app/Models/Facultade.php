<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Facultade
 *
 * @property $id
 * @property $nombre
 * @property $created_at
 * @property $updated_at
 *
 * @property Carrera[] $carreras
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Facultade extends Model
{
    
    static $rules = [
		'nombre' => 'required|string|unique:facultades',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function carreras()
    {
        return $this->hasMany('App\Models\Carrera', 'facultad_id', 'id');
    }
    

}
