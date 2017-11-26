<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Hashing\BcryptHasher;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Historia_antecedentes;
use Illuminate\Database\Eloquent\Model;

 
class Historia_antecedentesController extends Controller
{
      public function eliminarnovena(Request $id){
        $Historia_antecedentes= Historia_antecedentes::find($id->Id_Historia_Antecedentes);
        $Historia_antecedentes->delete();
        if(!$Historia_antecedentes){
            return response()->json('Error en el eliminar',200);
        }
        return response()->json('Eliminado',200);
    }
     
    public function actualizarnovena(Request $request, Request $numero){
        //$numero = Datos_personales::where('Numero_Expediente','=',$numero->Numero_Expediente)->get();
        $Historia_antecedentes= Historia_antecedentes::findorFail($request->Id_Historia_Antecedentes);
        $this->validate($request, [
            'Id_Historia_Antecedentes' => 'required',
            'Numero_Expediente' => 'required',
            'Codigo_Historia_Laboral' => 'required',
            'Fecha_Inicio' => 'required',
            'Fecha_Conclusion' => 'required',
            'Años_Trabajados' => 'required',
            'Puesto_Trabajo' => 'required'
        ]);

        $result = $Historia_antecedentes->update($request->all());
        if(!$result){
            return response()->json('Error',200);
        }
        return response()->json('Actualizado',200);
    } 

     public function mostrarHistoria_antecedentes(){
        $Historia_antecedentes= Historia_antecedentes::all();
        return response()->json($Historia_antecedentes, 200);
    }

    public function buscarporId_Historia_Antecedentes(Request $numero){
        $Historia_antecedentes = Historia_antecedentes::where('Id_Historia_Antecedentes','=',$numero->Id_Historia_Antecedentes)->get();
        return response()->json($Historia_antecedentes, 200);
    }
 
    public function buscarNumero_ExpedienteHistoriaantecendentes(Request $numero){
        $Historia_antecedentes = Historia_antecedentes::where('Numero_Expediente','=',$numero->Numero_Expediente)->get();
        return response()->json($Historia_antecedentes, 200);
    }
 
    //this function is used to register a new user
    public function create(Request $request)
    {
        //creating a validator
        $validator = Validator::make($request->all(), [
            'Id_Historia_Antecedentes' => 'required|unique:Historia_antecedentes',
            'Numero_Expediente' => 'required',
            'Codigo_Historia_Laboral' => 'required',
            'Fecha_Inicio' => 'required',
            'Fecha_Conclusion' => 'required',
            'Años_Trabajados' => 'required',
            'Puesto_Trabajo' => 'required'
        
        ]);
 
        //if validation fails 
        if ($validator->fails()) {
            return array(
                'error' => true,
                'message' => $validator->errors()->all()
            );
        }
    
        //creating a new user
        $historia_antecedentes = new Historia_antecedentes();
        
        //adding values to the users
        $historia_antecedentes->Id_Historia_Antecedentes = $request->input('Id_Historia_Antecedentes');
        $historia_antecedentes->Numero_Expediente = $request->input('Numero_Expediente');
        $historia_antecedentes->Codigo_Historia_Laboral = $request->input('Codigo_Historia_Laboral');
        $historia_antecedentes->Fecha_Inicio = $request->input('Fecha_Inicio');
        $historia_antecedentes->Fecha_Conclusion = $request->input('Fecha_Conclusion');
        $historia_antecedentes->Años_Trabajados = $request->input('Años_Trabajados');
        $historia_antecedentes->Puesto_Trabajo = $request->input('Puesto_Trabajo');
        
        //saving the user to database
        $historia_antecedentes->save();
        
        //unsetting the password so that it will not be returned 
       // unset($user->password);
 
        //returning the registered user 
        return array('error' => false, 'historia_antecedentes' => $historia_antecedentes);
    }
}