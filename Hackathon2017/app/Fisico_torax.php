<?php
 
namespace App;
 
use Illuminate\Database\Eloquent\Model;
 
class Fisico_torax extends Model 
{
	 protected  $primaryKey= 'Id_Torax';
 protected $fillable = ['Id_Torax', 'Codigo_E_Fisico', 'Caja_Toracica', 'Mamas', 'Campos_Pulmonares', 'Cardiaco', 'Id_Consulta', 'created_at', 'updated_at'];
 public function questions(){
 return $this->hasMany('App\Question');
 }   
}