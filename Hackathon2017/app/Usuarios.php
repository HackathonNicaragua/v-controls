<?php
 
namespace App;
 
use Illuminate\Database\Eloquent\Model;
 
class Usuarios extends Model 
{
	protected  $primaryKey= 'Id_Usuario';
 protected $fillable = ['Id_Usuario', 'Nombre_Usuario', 'Contraseña', 'Niveles'];
 public function questions(){
 return $this->hasMany('App\Question');
 }   
}