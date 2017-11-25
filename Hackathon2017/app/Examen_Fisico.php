<?php
 
namespace App;
 
use Illuminate\Database\Eloquent\Model;
 
class Examen_fisico extends Model 
{
	protected  $primaryKey= 'Codigo_E_Fisico';
 protected $fillable = ['Codigo_E_Fisico', 'FC', 'FR', 'TA', 'TEMP', 'Peso', 'Talla', 'Area_Superficie_Corporal'
 , 'IMC' , 'Numero_Expediente', 'Aspecto_General', 'Piel_Mucosa','Id_Consulta', 'created_at', 'updated_at'];
 public function questions(){
 return $this->hasMany('App\Question');
 }   
}