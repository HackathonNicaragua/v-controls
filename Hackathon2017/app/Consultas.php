<?php
 
namespace App;
 
use Illuminate\Database\Eloquent\Model;
 
class Consultas extends Model 
{
	protected  $primaryKey= 'Id_Consulta';
 protected $fillable = ['Id_Consulta', 'Motivo_Consulta', 'Historia_Enfermedad_Actual', 'Interrogatorio', 'Fecha', 'Sala', 'Numero_Cama'
 , 'Fuente_Informacion' , 'Confiabilidad', 'Numero_Expediente', 'Servicio', 'Hora', 'created_at', 'updated_at'];
 public function questions(){
 return $this->hasMany('App\Question');
 }   
}