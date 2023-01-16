<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facultad extends Model
{
    use HasFactory;
    protected $table= 'facultads';
    protected $primaryKey='idFacultad';
    public $timestamps=false;
    protected $fillable=['nombreFa'];

    public function exalumnos(){
        return $this->hasMany(Exalumno::class,'idFacultad','idFacultad');
    }
}
