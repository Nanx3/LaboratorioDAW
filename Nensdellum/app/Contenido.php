<?php

namespace NensdeLlum;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Contenido extends Model
{
    //
    protected $table = 'contenido';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     *$table->mediumText('Titulo');
     *  $table->mediumText('Descripcion');
    $table->text('URLImagen');
    $table->enum('Tipo',['Donadores,Noticias,Logros,Evoluciones,Galeria,Video,Boletin']);
    $table->timestamps();
     */
    protected $fillable = ['Titulo','Descripcion', 'URLImagen'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [ 'remember_token'];


    public function scopeTitulo($query ,$titulo)
    {
        //
        //
        if(trim($titulo) != ""){

            $query->where('Titulo',"LIKE","%$titulo%")->where('Tipo','Boletin');
        }



    }

    public function scopeMultimedia($query ,$buscador)
    {
        //
        //

        if(trim($buscador) != ""){

            $query->where('Titulo',"LIKE","%$buscador%")
                ->where(function ($query1) {
                    $query1->orwhere( 'Tipo', 'Imagenes' )
                        ->orwhere(  'Tipo', 'Videos' )
                        ->orwhere( 'Tipo', 'Testimonios' )
                    ;
                }

                )->get();


         //   select * from contenido where titulo like %buscador% and (tipo =imagenes or tipo=videos or tipo=testimonios)

        }



    }

}
