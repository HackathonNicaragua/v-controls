<?php
 
namespace App;
 
use Illuminate\Database\Eloquent\Model;
 
class Datos_personales extends Model 
{
 protected  $primaryKey= 'Numero_Expediente';
 protected $fillable = ['Numero_Expediente', 'Nombres', 'Apellidos', 'Numero_Cedula', 'Numero_Inss', 'Edad', 'Lugar_Nacimiento', 'Religion'
 , 'Etnias' , 'Escolaridad', 'Sexo', 'Profesion'. 'Direccion_Habitual', 'Nombre_Padre', 'Nombre_Madre', 'created_at', 'updated_at'];
 public function questions(){
 return $this->hasMany('App\Question');
 }   
}