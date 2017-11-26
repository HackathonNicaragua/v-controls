<?php
 namespace App;
 
use Illuminate\Database\Eloquent\Model;
 
class Resultados extends Model 
{
	 protected  $primaryKey= 'Id_Resultados';
 protected $fillable = ['Id_Resultados', 'Numero_Expediente', 'Observaciones_Analisis', 'Diagnosticos_Problemas', 'created_at', 'updated_at'];
 public function questions(){
 return $this->hasMany('App\Question');
 }   
}