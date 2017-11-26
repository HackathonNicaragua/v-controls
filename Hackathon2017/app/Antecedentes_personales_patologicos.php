<?php
 namespace App;
 
use Illuminate\Database\Eloquent\Model;
 
class Antecedentes_personales_patologicos extends Model 
{
	protected  $primaryKey= 'Id_Patologicas';
 protected $fillable = ['Id_Patologicas','E_Infecto_Contagiosas','Enfermedades_Cronicas','Cirujias_Previas','Hospitalizacion','Numero_Expediente','created_at','updated_at'];
 public function questions(){
 return $this->hasMany('App\Question');
 }   
}