<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Docente
 *
 * @property $id
 * @property $nombres
 * @property $apellidos
 * @property $cedula
 * @property $celular
 * @property $direccion
 * @property $correo_institucional
 * @property $correo_personal
 * @property $sexo
 * @property $etnia
 * @property $titulo_3_n
 * @property $titulo_4_n
 * @property $doctorado
 * @property $phd
 * @property $discapacidad
 * @property $porcentaje
 * @property $estado
 * @property $created_at
 * @property $updated_at
 *
 * @property DocenteMateria[] $docenteMaterias
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Docente extends Model
{
    
    

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombres','apellidos','cedula','celular','direccion','correo_institucional','correo_personal','sexo','etnia','titulo_3_n','titulo_4_n','doctorado','phd','discapacidad','porcentaje','estado','fecha_suspencion'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function docenteMaterias()
    {
        return $this->hasMany('App\Models\DocenteMateria', 'docente_id', 'id');
    }
    

}
