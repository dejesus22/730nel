<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Leologro
 *
 * @property $id
 * @property $nombre
 * @property $imagen
 * @property $descripcion
 * @property $url
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Leologro extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'imagen' => 'required',
		'descripcion' => 'required',
		'url' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','imagen','descripcion','url'];



}
