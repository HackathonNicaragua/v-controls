<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Hashing\BcryptHasher;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Fisico_torax;
use Illuminate\Database\Eloquent\Model;
 
 
class Fisico_toraxController extends Controller
{
      public function eliminarseptima(Request $id){
        $Fisico_torax= Fisico_torax::find($id->Id_Torax);
        $Fisico_torax->delete();
        if(!$Fisico_torax){
            return response()->json('Error en el eliminar',200);
        }
        return response()->json('Eliminado',200);
    }
     
    public function actualizarseptima(Request $request, Request $numero){
        //$numero = Datos_personales::where('Numero_Expediente','=',$numero->Numero_Expediente)->get();
        $Fisico_torax= Fisico_torax::findorFail($request->Id_Torax);
        $this->validate($request, [
            'Id_Torax' => 'required',
            'Codigo_E_Fisico' => 'required',
            'Caja_Toracica' => 'required',
            'Mamas' => 'required',
            'Campos_Pulmonares' => 'required',
            'Cardiaco' => 'required',
            'Id_Consulta' => 'required'
        ]);

        $result = $Fisico_torax->update($request->all());
        if(!$result){
            return response()->json('Error',200);
        }
        return response()->json('Actualizado',200);
    } 

    public function mostrarFisico_torax(){
        $Fisico_torax= Fisico_torax::all();
        return response()->json($Fisico_torax, 200);
    }

    public function buscarporId_Torax(Request $numero){
        $Fisico_torax = Fisico_torax::where('Id_Torax','=',$numero->Id_Torax)->get();
        return response()->json($Fisico_torax, 200);
    }
 
    public function buscarpocodigofisicotorax(Request $numero){
        $Fisico_torax = Fisico_torax::where('Codigo_E_Fisico','=',$numero->Codigo_E_Fisico)->get();
        return response()->json($Fisico_torax, 200);
    }
 
    //this function is used to register a new user
    public function create(Request $request)
    {
        //creating a validator
        $validator = Validator::make($request->all(), [
            'Id_Torax' => 'required|unique:fisico_toraxes',
            'Codigo_E_Fisico' => 'required',
            'Caja_Toracica' => 'required',
            'Mamas' => 'required',
            'Campos_Pulmonares' => 'required',
            'Cardiaco' => 'required',
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
        $fisico_torax = new Fisico_torax();
        
        //adding values to the users
        $fisico_torax->Id_Torax = $request->input('Id_Torax');
        $fisico_torax->Codigo_E_Fisico = $request->input('Codigo_E_Fisico');
        $fisico_torax->Caja_Toracica = $request->input('Caja_Toracica');
        $fisico_torax->Mamas = $request->input('Mamas');
        $fisico_torax->Campos_Pulmonares = $request->input('Campos_Pulmonares');
        $fisico_torax->Cardiaco = $request->input('Cardiaco');
        $fisico_torax->Id_Consulta = $request->input('Id_Consulta');

        
        //saving the user to database
        $fisico_torax->save();
        
        //unsetting the password so that it will not be returned 
       // unset($user->password);
 
        //returning the registered user 
        return array('error' => false, 'fisico_torax' => $fisico_torax);
    }
}