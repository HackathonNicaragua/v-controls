<?php
 namespace App;
 
use Illuminate\Database\Eloquent\Model;
 
class Antecedentes_personales_nopatologicos extends Model 
{
	protected  $primaryKey= 'Id_noPatologicas';
 protected $fillable = ['Id_noPatologicas', 'Numero_Expediente', 'Hora_De_Sueño', 'Horas_Laborales', 'Hora_Actividad_Fisica', 'Alimentacion', 'Tabaco', 'Cantidad_Frecuencia_Tabaco'
 , 'Edad_Inicio_Tabaco' , 'Edad_Abandono_Tabaco	', 'Duracion_Habito_Tabaco', 'Alcohol', 'Cantidad_Frecuencia_Alcohol', 'Edad_Inicio_Alcohol', 'Edad_Abandono_Alcohol', 'Duracion_Habito_Alcohol', 'Drogas'
 	,'Cantidad_Frecuencia_Drogas','Edad_Inicio_Drogas','Edad_Abandono_Drogas','Duracion_Habito_Drogas','Farmacos','Numero_Farmacos_Recibiendo','Nombre_Posologia_Farmacos','Otros_Habitos','created_at','updated_at'];
 public function questions(){
 return $this->hasMany('App\Question');
 }   
}
