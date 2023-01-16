<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Escuela extends Model
{
    use HasFactory;
    protected $table= 'escuelas';
    protected $primaryKey='idEscuela';
    public $timestamps=false;
    protected $fillable=['nombreEs'];

    public function exalumnos(){
        return $this->hasMany(Exalumno::class,'idEscuela','idEscuela');
    }
}
