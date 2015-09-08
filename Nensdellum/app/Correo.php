<?php

namespace NensdeLlum;

use Illuminate\Database\Eloquent\Model;

class Correo extends Model
{
    //
    //
    protected $table = 'correo';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     *
     */
    protected $fillable = ['email','nombre'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [ 'remember_token'];
}
