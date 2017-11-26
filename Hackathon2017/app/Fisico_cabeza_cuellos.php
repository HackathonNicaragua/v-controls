<?php
 
namespace App;
 
use Illuminate\Database\Eloquent\Model;
 
class Fisico_cabeza_cuellos extends Model 
{
	 protected  $primaryKey= 'Id_Cabez';
 protected $fillable = ['Id_Cabez', 'Codigo_E_Fisico', 'Craneo', 'Ojos', 'Orejas_Oidos', 'Nariz', 'Boca', 'Cuello'
 , 'Id_Consulta' ,'created_at', 'updated_at'];
 public function questions(){
 return $this->hasMany('App\Question');
 }   
}