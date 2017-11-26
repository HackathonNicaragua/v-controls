<?php
 
namespace App;
 
use Illuminate\Database\Eloquent\Model;
 
class Fisico_muscuesqueleticos extends Model 
{
	 protected  $primaryKey= 'Id_Muscuesqueletico';
 protected $fillable = ['Id_Muscuesqueletico', 'Codigo_E_Fisico', 'Extremidades_Superiores', 'Extremidades_inferiores', 'Id_Consulta', 'created_at', 'updated_at'];
 public function questions(){
 return $this->hasMany('App\Question');
 }   
}