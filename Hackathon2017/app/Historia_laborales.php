<?php
 
namespace App;
 
use Illuminate\Database\Eloquent\Model;
 
class Historia_laborales extends Model 
{
	 protected  $primaryKey= 'Codigo_Historia_Laboral';
 protected $fillable = ['Codigo_Historia_Laboral', 'Numero_Expediente', 'Trabaja_Actual', 'Lugar_trabajo', 'Area_Labora', 'Oficio', 'Anyos_Oficio', 'Dia_Laboral'
 , 'Horas_Semanales_Trabajadas' , 'Horas_Extras', 'Tipo_Horario_Realizado', 'Descripcion_Del_Trabajo', 'Expocision_Sustancias', 'Descripcion_Expocision_Sus', 
 'Intensidad_Trabajo','Trabajos_No_Habituales','Codigo_Historia_Laboral', 'created_at', 'updated_at'];
 public function questions(){
 return $this->hasMany('App\Question');
 }   
}

