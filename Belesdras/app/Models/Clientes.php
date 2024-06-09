<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//use Illuminate\Database\Eloquent\SoftDeletes;

class Clientes extends Model
{
    use HasFactory;
    //use SoftDeletes;

    protected $guarded = [ "id" ];
    protected $table = 'clientes'; // Aquí define el nombre correcto de la tabla en español
    public $timestamps = false;
    protected $fillable = [
        'name',
        'apellido',
        'dni',
        'telefono'
    ];

    public function telefonos(){
        return $this->hasMany(Telefono::class);
    }

    public function turnos(){
        return $this->hasMany(Turno::class);

    }



}
