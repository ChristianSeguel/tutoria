<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
/**
*Class Tutor
* @property $id
 * @property $nombre
 * @property $apellidos
 * @property $correo
 * @property $created_at
 * @property $updated_at
 *
 * @property Alumno[] $alumnos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
*/
class Tutor extends Model
{
    use HasFactory;


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function alumnos()
    {
        return $this->hasMany('App\Models\Alumno','id_tutor','id');
    }
}
