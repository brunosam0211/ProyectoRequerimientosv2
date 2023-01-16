<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exalumno extends Model
{
    use HasFactory;
    protected $table= 'alumnos';
    protected $primaryKey='idalumno';
    public $timestamps=false;
    protected $fillable=['dni','nombres','apellidos','edad','telefono','idpromocion','fechaN','superiores','oficio','idEscuela','idFacultad','estado'];

    public function escuela(){
        return $this->hasOne(Escuela::class,'idEscuela','idEscuela');
    }
    public function facultad(){
        return $this->hasOne(Facultad::class,'idFacultad','idFacultad');
    }
    public function promocion(){
        return $this->hasOne(Promocion::class,'idpromocion','idpromocion');
    }
}
