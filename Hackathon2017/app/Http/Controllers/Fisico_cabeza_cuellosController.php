<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Hashing\BcryptHasher;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Fisico_cabeza_cuellos;
use Illuminate\Database\Eloquent\Model;
 
 
class Fisico_cabeza_cuellosController extends Controller
{

        public function eliminarCuarta(Request $id){
        $Fisico_cabeza_cuellos= Fisico_cabeza_cuellos::find($id->Id_Cabez);
        $Fisico_cabeza_cuellos->delete();
        if(!$Fisico_cabeza_cuellos){
            return response()->json('Error en el eliminar',200);
        }
        return response()->json('Aztualizado',200);
    }
     
    public function actualizarCUARTA(Request $request, Request $numero){
        //$numero = Datos_personales::where('Numero_Expediente','=',$numero->Numero_Expediente)->get();
        $Fisico_cabeza_cuellos= Fisico_cabeza_cuellos::findorFail($request->Id_Cabez);
        $this->validate($request, [
            'Id_Cabez' => 'required',
            'Codigo_E_Fisico' => 'required',
            'Craneo' => 'required',
            'Ojos' => 'required',
            'Orejas_Oidos' => 'required',
            'Nariz' => 'required',
            'Boca' => 'required',
            'Cuello' => 'required',
            'Id_Consulta' => 'required'
        ]);

        $result = $Fisico_cabeza_cuellos->update($request->all());
        if(!$result){
            return response()->json('Error',200);
        }
        return response()->json('Actualizado',200);
    }

      public function mostrarFisico_cabeza_cuellos(){
        $Fisico_cabeza_cuellos= Fisico_cabeza_cuellos::all();
        return response()->json($Fisico_cabeza_cuellos, 200);
    }

    public function buscarFisico_abdomen_pelvisidcabeza(Request $numero){
        $Fisico_cabeza_cuellos = Fisico_cabeza_cuellos::where('Id_Cabez','=',$numero->Id_Cabez)->get();
        return response()->json($Fisico_cabeza_cuellos, 200);
    }
 
    public function buscarporCodigo_E_Fisicocabeza(Request $numero){
        $Fisico_cabeza_cuellos = Fisico_cabeza_cuellos::where('Codigo_E_Fisico','=',$numero->Codigo_E_Fisico)->get();
        return response()->json($Fisico_cabeza_cuellos, 200);
    }
 
 
    //this function is used to register a new user
    public function create(Request $request)
    {
        //creating a validator
        $validator = Validator::make($request->all(), [
            'Id_Cabez' => 'required|unique:fisico_cabeza_cuellos',
            'Codigo_E_Fisico' => 'required',
            'Craneo' => 'required',
            'Ojos' => 'required',
            'Orejas_Oidos' => 'required',
            'Nariz' => 'required',
            'Boca' => 'required',
            'Cuello' => 'required',
            'Id_Consulta' => 'required',
 
        ]);
 
        //if validation fails 
        if ($validator->fails()) {
            return array(
                'error' => true,
                'message' => $validator->errors()->all()
            );
        }
    
        //creating a new user
        $fisico_cabeza_cuellos = new Fisico_cabeza_cuellos();
        
        //adding values to the users
        $fisico_cabeza_cuellos->Id_Cabez = $request->input('Id_Cabez');
        $fisico_cabeza_cuellos->Codigo_E_Fisico = $request->input('Codigo_E_Fisico');
        $fisico_cabeza_cuellos->Craneo = $request->input('Craneo');
        $fisico_cabeza_cuellos->Ojos = $request->input('Ojos');
        $fisico_cabeza_cuellos->Orejas_Oidos = $request->input('Orejas_Oidos');
        $fisico_cabeza_cuellos->Nariz = $request->input('Nariz');
        $fisico_cabeza_cuellos->Boca = $request->input('Boca'); 
        $fisico_cabeza_cuellos->Cuello = $request->input('Cuello'); 
        $fisico_cabeza_cuellos->Id_Consulta = $request->input('Id_Consulta'); 


        
        //saving the user to database
        $fisico_cabeza_cuellos->save();
        
        //unsetting the password so that it will not be returned 
       // unset($user->password);
 
        //returning the registered user 
        return array('error' => false, 'fisico_cabeza_cuellos' => $fisico_cabeza_cuellos);
    }
}