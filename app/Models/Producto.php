<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Producto
 *
 * @property $id
 * @property $name_id
 * @property $bodega_id
 * @property $grupo_id
 * @property $created_at
 * @property $updated_at
 * @property $ubicacion
 * @property $conteo1
 * @property $conteo2
 * @property $deferencia12
 * @property $conteo3
 *
 * @property Bodega $bodega
 * @property Codigo $codigo
 * @property Grupo $grupo
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Producto extends Model
{
    
    static $rules = [
		'name_id' => 'required',
		'bodega_id' => 'required',
		'grupo_id' => 'required',
		//'ubicacion' => 'required',
		'conteo1' => 'required',
		//'conteo2' => 'required',
		//'deferencia12' => 'required',
		//'conteo3' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name_id','bodega_id','grupo_id',];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function bodega()
    {
        return $this->hasOne('App\Models\Bodega', 'id', 'bodega_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function codigo()
    {
        return $this->hasOne('App\Models\Codigo', 'id', 'name_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function grupo()
    {
        return $this->hasOne('App\Models\Grupo', 'id', 'grupo_id');
    }
    

}
