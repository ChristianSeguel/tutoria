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
 * @property $id_tutor
 * @property $created_at
 * @property $updated_at
 *
 * @property Tutor $tutor
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Alumno extends Model
{

    use HasFactory;
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function tutor()
    {
        return $this->hasOne('App\Models\Tutor','id','id_tutor');
    }
}
