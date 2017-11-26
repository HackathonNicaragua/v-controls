<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Hashing\BcryptHasher;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Antecedentes_personales_patologicos;
use Illuminate\Database\Eloquent\Model;
 
 
class Antecedentes_personales_patologicosController extends Controller
{

    public function EliminarDecimaCuarta(Request $id){
         $Antecedentes_personales_patologicos= Antecedentes_personales_patologicos::find($id->Id_Patologicas);
        $Antecedentes_personales_patologicos->delete();
        if(!$Antecedentes_personales_patologicos){
            return response()->json('Error en el eliminar',200);
        }
        return response()->json('Eliminado',200);
    }


    public function ActualizarDecimaCuarta(Request $request){
        $Antecedentes_personales_patologicos= Antecedentes_personales_patologicos::findorFail($request->Id_Patologicas);
        $this->validate($request, [
            'Id_Patologicas' => 'required',
            'E_Infecto_Contagiosas' => 'required',
            'Enfermedades_Cronicas' => 'required',
            'Cirujias_Previas' => 'required',
            'Hospitalizacion' => 'required',
            'Numero_Expediente' => 'required'
        ]);

        $result = $Antecedentes_personales_patologicos->update($request->all());
        if(!$result){
            return $this->responseFail();
        }
        //return $this->responseSuccess($datos_personales);
    }

public function mostrarAntecedentes_personales_patologicos()
{
        $antecedentes_personales_patologicos= Antecedentes_personales_patologicos::all();
        return response()->json($antecedentes_personales_patologicos, 200);

    }

    public function buscarporIdpatologicas(Request $numero){
        $antecedentes_personales_patologicos = Antecedentes_personales_patologicos::where('Id_Patologicas','=',$numero->Id_Patologicas)->get();
        return response()->json($antecedentes_personales_patologicos, 200);
    }
 
    public function buscarporE_Infecto_Contagiosas(Request $numero){
        $antecedentes_personales_patologicos = Antecedentes_personales_patologicos::where('E_Infecto_Contagiosas','=',$numero->E_Infecto_Contagiosas)->get();
        return response()->json($antecedentes_personales_patologicos, 200);
    }

 
    //this function is used to register a new user
    public function create(Request $request)
    {
        //creating a validator
        $validator = Validator::make($request->all(), [
            'Id_Patologicas' => 'required|unique:antecedentes_personales_patologicos',
            'E_Infecto_Contagiosas' => 'required',
            'Enfermedades_Cronicas' => 'required',
            'Cirujias_Previas' => 'required',
            'Hospitalizacion' => 'required',
            'Numero_Expediente' => 'required'
        ]);
 
        //if validation fails 
        if ($validator->fails()) {
            return array(
                'error' => true,
                'message' => $validator->errors()->all()
            );
        }
    
        //creating a new user
        $antecedentes_personales_patologicos = new Antecedentes_personales_patologicos();
        
        //adding values to the users
        $antecedentes_personales_patologicos->Id_Patologicas = $request->input('Id_Patologicas');
        $antecedentes_personales_patologicos->E_Infecto_Contagiosas = $request->input('E_Infecto_Contagiosas');
        $antecedentes_personales_patologicos->Enfermedades_Cronicas = $request->input('Enfermedades_Cronicas');
        $antecedentes_personales_patologicos->Cirujias_Previas = $request->input('Cirujias_Previas');
        $antecedentes_personales_patologicos->Hospitalizacion = $request->input('Hospitalizacion');
        $antecedentes_personales_patologicos->Numero_Expediente = $request->input('Numero_Expediente');
                
        //saving the user to database
        $antecedentes_personales_patologicos->save();
        
        //unsetting the password so that it will not be returned 
       // unset($user->password);
 
        //returning the registered user 
        return array('error' => false, 'antecedentes_personales_patologicos' => $antecedentes_personales_patologicos);
    }
}