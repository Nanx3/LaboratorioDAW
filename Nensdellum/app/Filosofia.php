<?php

namespace NensdeLlum;

use Illuminate\Database\Eloquent\Model;

class Filosofia extends Model
{
    //
    //
    protected $table = 'filosofia';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     *
     */
    protected $fillable = ['Descripcion', 'Glyph'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [ 'remember_token'];
}
