<?php
 namespace App;
 
use Illuminate\Database\Eloquent\Model;
 
class Historia_antecedentes extends Model 
{
	 protected  $primaryKey= 'Id_Historia_Antecedentes';
 protected $fillable = ['Id_Historia_Antecedentes', 'Numero_Expediente', 'Codigo_Historia_Laboral', 'Fecha_Inicio', 'Fecha_Conclusion', 'Años_Trabajados', 'Puesto_Trabajo', 'created_at', 'updated_at'];
 public function questions(){
 return $this->hasMany('App\Question');
 }   
}
