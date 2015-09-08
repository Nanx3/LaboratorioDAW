<?php

namespace NensdeLlum;

use Illuminate\Database\Eloquent\Model;

class RedesSociales extends Model
{
    //

    //


    //
    //
    protected $table = 'redessociales';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     *
     */
    protected $fillable = ['Titulo','Glyph','URLPagina'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [ 'remember_token'];
}
