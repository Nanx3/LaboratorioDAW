<?php

namespace NensdeLlum;

use Illuminate\Database\Eloquent\Model;

class Listas extends Model
{
    //
    protected $table = 'listas';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     *
     */
    protected $fillable = ['Titulo','Descripcion'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [ 'remember_token'];
}
