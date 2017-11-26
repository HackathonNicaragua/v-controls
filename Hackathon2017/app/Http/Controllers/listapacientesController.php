<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Hashing\BcryptHasher;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Datos_personales;
use App\listapacientes;
use Illuminate\Database\Eloquent\Model;


 
class listapacientesController extends Controller
{
	public function mostrarlistapacientes(){
        $listapacientes= listapacientes::all();
        return response()->json($listapacientes, 200);
    }

    public function listarpacientesfinal(Request $request){
    	 $listapacientes = listapacientes::where('Id_Usuario','=',$request->Id_Usuario)->get();
        return response()->json($listapacientes, 200);
    }

}