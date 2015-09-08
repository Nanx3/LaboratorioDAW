<?php

namespace NensdeLlum;

use Illuminate\Database\Eloquent\Model;

class CausasyProgramas extends Model
{
    //

    protected $table = 'causasyprogramas';

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