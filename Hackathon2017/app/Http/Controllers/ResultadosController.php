<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Hashing\BcryptHasher;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Resultados;
use Illuminate\Database\Eloquent\Model;
 
 
class ResultadosController extends Controller
{

    public function eliminardecimaquinta(Request $id){
        $Resultados= Resultados::find($id->Id_Resultados);
        $Resultados->delete();
        if(!$Resultados){
            return response()->json('Error en el eliminar',200);
        }
        return response()->json('Eliminado',200);
    }
     
    public function actualizardecimaquinta(Request $request, Request $numero){
        //$numero = Datos_personales::where('Numero_Expediente','=',$numero->Numero_Expediente)->get();
        $Resultados= Resultados::findorFail($request->Id_Resultados);
        $this->validate($request, [
            'Id_Resultados' => 'required',
            'Numero_Expediente' => 'required',
            'Observaciones_Analisis' => 'required',
            'Diagnosticos_Problemas' => 'required'
        ]);

        $result = $Resultados->update($request->all());
        if(!$result){
            return response()->json('Error',200);
        }
        return response()->json('Actualizado',200);
    } 

     public function mostrarResultados(){
        $Resultados= Resultados::all();
        return response()->json($Resultados, 200);
    }

    public function buscarporId_Resultados2(Request $numero){
        $Resultados = Resultados::where('Id_Resultados','=',$numero->Id_Resultados)->get();
        return response()->json($Resultados, 200);
    }
 
    public function buscarNumero_Expedientereslutados(Request $numero){
        $Resultados = Resultados::where('Numero_Expediente','=',$numero->Numero_Expediente)->get();
        return response()->json($Resultados, 200);
    }
 
    //this function is used to register a new user
    public function create(Request $request)
    {
        //creating a validator
        $validator = Validator::make($request->all(), [
            'Id_Resultados' => 'required|unique:resultados',
            'Numero_Expediente' => 'required',
            'Observaciones_Analisis' => 'required',
            'Diagnosticos_Problemas' => 'required'
        ]);
 
        //if validation fails 
        if ($validator->fails()) {
            return array(
                'error' => true,
                'message' => $validator->errors()->all()
            );
        }
    
        //creating a new user
        $resultados = new Resultados();
        
        //adding values to the users
        $resultados->Id_Resultados = $request->input('Id_Resultados');
        $resultados->Numero_Expediente = $request->input('Numero_Expediente');
        $resultados->Observaciones_Analisis = $request->input('Observaciones_Analisis');
        $resultados->Diagnosticos_Problemas = $request->input('Diagnosticos_Problemas');
                
        //saving the user to database
        $resultados->save();
        
        //unsetting the password so that it will not be returned 
       // unset($user->password);
 
        //returning the registered user 
        return array('error' => false, 'resultados' => $resultados);
    }
}