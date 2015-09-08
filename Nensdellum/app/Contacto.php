<?php

namespace NensdeLlum;

use Illuminate\Database\Eloquent\Model;

class Contacto extends Model
{
    //

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'contacto';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['Ubicacion', 'Descripcion', 'URLUbicacion','Telefono'];



}
