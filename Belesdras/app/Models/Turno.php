<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Turno extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'turnos';
    public $timestamps = true;

    protected $fillable =[

        'fecha',
        'hora',
        'estado_pago',
        'estado_turno',
        'id_clientes',
        'id_profesionales'
    ];

    public function cliente(){
        return $this->belongsTo(Clientes::class,'id_clientes');
    }

    public function profesional(){
        return $this->belongsTo(Profesional::class,'id_profesionales');
    }
}
