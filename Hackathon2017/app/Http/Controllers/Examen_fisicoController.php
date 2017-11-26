<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Hashing\BcryptHasher;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Examen_fisico;
use Illuminate\Database\Eloquent\Model;

 
class Examen_fisicoController extends Controller
{
    public function eliminartercera(Request $numero){
        $examen_fisico= Examen_fisico::find($numero->Codigo_E_Fisico);
        $examen_fisico->delete();
        if(!$examen_fisico){
            return response()->json('Error en el eliminar',200);
        }
        return $this->responseSuccess($examen_fisico);
    }
 
    
    public function actualizartercera(Request $request, Request $numero){
        //$numero = Datos_personales::where('Numero_Expediente','=',$numero->Numero_Expediente)->get();
        $Examen_fisico= Examen_fisico::findorFail($request->Codigo_E_Fisico);
        $this->validate($request, [
            'FC' => 'required',
            'FR' => 'required',
            'TA' => 'required',
            'TEMP' => 'required',
            'Peso' => 'required',
            'Talla' => 'required',
            'Area_Superficoie_Corporal' => 'required',
            'IMC' => 'required',
            'Numero_Expediente' => 'required',
            'Codigo_E_Fisico' => 'required',
            'Aspecto_General' => 'required',
            'Piel_Mucosa' => 'required',
            'Id_Consulta' => 'required'
        ]);

        $result = $Examen_fisico->update($request->all());
        if(!$result){
            return $this->responseFail();
        }
        //return $this->responseSuccess($datos_personales);
    }

     public function mostrarexamenesfisicos(){
        $examen_fisico= Examen_fisico::all();
        return response()->json($examen_fisico, 200);

    }

    public function buscarexamenesfisicosid(Request $numero){
        $examen_fisico = Examen_fisico::where('Codigo_E_Fisico','=',$numero->Codigo_E_Fisico)->get();
        return response()->json($examen_fisico, 200);
    }
 
    public function buscarpornumeroexpedientefisicos(Request $numero){
        $Examen_fisico = Examen_fisico::where('Numero_Expediente','=',$numero->Numero_Expediente)->get();
        return response()->json($Examen_fisico, 200);
    }
 
    //this function is used to register a new user
    public function create(Request $request)
    {
        //creating a validator
        $validator = Validator::make($request->all(), [
            'FC' => 'required',
            'FR' => 'required',
            'TA' => 'required',
            'TEMP' => 'required',
            'Peso' => 'required',
            'Talla' => 'required',
            'Area_Superficoie_Corporal' => 'required',
            'IMC' => 'required',
            'Numero_Expediente' => 'required',
            'Codigo_E_Fisico' => 'required|unique:examen_fisicos',
            'Aspecto_General' => 'required',
            'Piel_Mucosa' => 'required',
            'Id_Consulta' => 'required'
        ]);
 
        //if validation fails 
        if ($validator->fails()) {
            return array(
                'error' => true,
                'message' => $validator->errors()->all()
            );
        }
    
        //creating a new user
        $examen_fisico = new Examen_fisico();
        
        //adding values to the users
        $examen_fisico->FC = $request->input('FC');
        $examen_fisico->FR = $request->input('FR');
        $examen_fisico->TA = $request->input('TA');
        $examen_fisico->TEMP = $request->input('TEMP');
        $examen_fisico->Peso = $request->input('Peso');
        $examen_fisico->Talla = $request->input('Talla');
        $examen_fisico->Area_Superficoie_Corporal = $request->input('Area_Superficoie_Corporal'); 
        $examen_fisico->IMC = $request->input('IMC'); 
        $examen_fisico->Numero_Expediente = $request->input('Numero_Expediente'); 
        $examen_fisico->Codigo_E_Fisico = $request->input('Codigo_E_Fisico'); 
        $examen_fisico->Aspecto_General = $request->input('Aspecto_General'); 
        $examen_fisico->Piel_Mucosa = $request->input('Piel_Mucosa'); 
        $examen_fisico->Id_Consulta = $request->input('Id_Consulta'); 


        
        //saving the user to database
        $examen_fisico->save();
        
        //unsetting the password so that it will not be returned 
       // unset($user->password);
 
        //returning the registered user 
        return array('error' => false, 'examen_fisico' => $examen_fisico);
    }
}