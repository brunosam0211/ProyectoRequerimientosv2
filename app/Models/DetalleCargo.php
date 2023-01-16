<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetalleCargo extends Model
{
    use HasFactory;
    protected $table= 'detalle_cargo';
    protected $primaryKey='id_detalle';
    public $timestamps=false;
    protected $fillable=['idalumno','idcargo','fechains','monto','estado'];

    public function alumno(){
        return $this->hasOne(Exalumno::class,'idalumno','idalumno');
    }
    public function cargo(){
        return $this->hasOne(Cargo::class,'idcargo','idcargo');
    }
}
