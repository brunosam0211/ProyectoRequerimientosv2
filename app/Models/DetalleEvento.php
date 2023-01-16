<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetalleEvento extends Model
{
    use HasFactory;
    protected $table= 'detalle_evento';
    protected $primaryKey='id_detalle';
    public $timestamps=false;
    protected $fillable=['idalumno','idevento','fechains','cant_entradas','montototal','estado'];

    public function alumno(){
        return $this->hasOne(Exalumno::class,'idalumno','idalumno');
    }
    public function evento(){
        return $this->hasOne(Evento::class,'idevento','idevento');
    }
}
