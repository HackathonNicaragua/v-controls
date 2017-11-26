<?php
 
namespace App;
 
use Illuminate\Database\Eloquent\Model;
 
class Fisico_abdomen_pelvis extends Model 
{
	 protected  $primaryKey= 'Id_Abdomen_pelvis';
 protected $fillable = ['Id_Abdomen_pelvis', 'Codigo_E_Fisico', 'Descripcion', 'Tacto_Rectal', 'Id_Consulta', 'created_at', 'updated_at'];
 public function questions(){
 return $this->hasMany('App\Question');
 }   
}
