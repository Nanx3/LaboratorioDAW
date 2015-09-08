<?php

namespace NensdeLlum;

use Illuminate\Database\Eloquent\Model;

class Mensajes extends Model
{
    //


    //
    //
    protected $table = 'mensajes';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     *
     */
    protected $fillable = ['Texto'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [ 'remember_token'];
}
