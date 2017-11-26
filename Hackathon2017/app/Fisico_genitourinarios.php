<?php
 
namespace App;
 
use Illuminate\Database\Eloquent\Model;
 
class Fisico_genitourinarios extends Model 
{
 protected  $primaryKey= 'Id_Genitourinario';
 protected $fillable = ['Id_Genitourinario', 'Codigo_E_Fisico', 'Descripcion', 'Examen_Ginecologico', 'examen_Neurologico', 'Id_Consulta', 'created_at', 'updated_at'];
 public function questions(){
 return $this->hasMany('App\Question');
 }   
}