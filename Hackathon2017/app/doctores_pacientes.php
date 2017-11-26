<?php
 
namespace App;
 
use Illuminate\Database\Eloquent\Model;
 
class doctores_pacientes extends Model 
{
	//protected  $primaryKey= 'Id_Consulta';
 protected $fillable = ['Id_Usuario','Numero_Expediente','created_at', 'updated_at'];
 public function questions(){
 return $this->hasMany('App\Question');
 }   
}