<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;



class Telefono extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'telefonos';
    public $timestamps = true;

    protected $fillable = [
        'tipo_tel',
        'tipo_persona',
        'id_clientes',
        'id_profesionales',
        'telefono',
    ];

    public function cliente(){
        return $this->belongsTo(Clientes::class);
    }

    public function profesional(){
        return $this->belongsTo(Profesional::class);
    }

}
