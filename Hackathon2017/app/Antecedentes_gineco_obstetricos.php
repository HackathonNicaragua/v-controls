<?php
 namespace App;
 
use Illuminate\Database\Eloquent\Model;
 
class Antecedentes_gineco_obstetricos extends Model 
{
	protected  $primaryKey= 'Id_Gineco_Obstetrico';
	 protected $fillable = ['Id_Gineco_Obstetrico', 'Menarca', 'Vida_Sexual_Activa', 'Numero_Parejas', 'Gesta', 'Cesarea', 'Aborto', 'Legrado'
 , 'Planificacion_Familiar' , 'Metodo', 'FUR', 'Semanas_Amenorrea','Menapausia', 'Fecha_Menapausia', 'Sustitucion_Hormonal', 'Especifique_Hormonal', 'PAP',
	'Resultado','Numero_Expediente','created_at','updated_at'];
 public function questions(){
 return $this->hasMany('App\Question');
 }   
}