<?php
 namespace App;
 
use Illuminate\Database\Eloquent\Model;
 
class Antecedentes_fam_patologicos extends Model 
{
 protected  $primaryKey= 'Id_Patologicos';
 protected $fillable = ['Id_Patologicos','Numero_Expediente','Id_Consulta','E_Infecto_Contagiosas','E_Hereditarias', 'created_at', 'updated_at'];
 public function questions(){
 return $this->hasMany('App\Question');
 }   
}