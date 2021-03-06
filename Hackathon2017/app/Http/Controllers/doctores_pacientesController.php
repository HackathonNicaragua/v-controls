<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Hashing\BcryptHasher;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\doctores_pacientes;
use App\Datos_Personales;
use Illuminate\Database\Eloquent\Model;
 
 
class doctores_pacientesController extends Controller
{

    //Select Datos_Personales.* from Datos_Personales,doctores_pacientes,Usuarios where Usuarios.Id_Usuario=doctores_pacientes.Id_Usuario AND Datos_Personales.Numero_Expediente=doctores_pacientes.Numero_Expediente AND doctores_pacientes.Id_Usuario=2;
     public function listarpacientes(Request $paciente){
        $doctores_pacientes=Datos_Personales::Select('Datos_Personales.* from Datos_Personales,doctores_pacientes,usuarios where usuarios.Id_Usuario=doctores_pacientes.Id_Usuario AND Datos_Personales.Numero_Expediente=doctores_pacientes.Numero_Expediente AND doctores_pacientes.Id_Usuario',' =' , $paciente->Id_Usuario)->get();
        //$doctores_pacientes=Datos_Personales::select("Select Datos_Personales.* from Datos_Personales,doctores_pacientes,Usuarios where Usuarios.Id_Usuario=doctores_pacientes.Id_Usuario AND Datos_Personales.Numero_Expediente=doctores_pacientes.Numero_Expediente AND doctores_pacientes.Id_Usuario",'=',$paciente->Id_Usuario,';')->get();
        return response()->json($doctores_pacientes, 200);
    }


public function create(Request $request)
    {
        //creating a validator
        $validator = Validator::make($request->all(), [
            'Id_Usuario' => 'required',
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
        $doctores_pacientes = new doctores_pacientes();
        
        //adding values to the users
        $doctores_pacientes->Id_Usuario = $request->input('Id_Usuario');
        $doctores_pacientes->Numero_Expediente = $request->input('Numero_Expediente');


        
        //saving the user to database
        $doctores_pacientes->save();
        
        //unsetting the password so that it will not be returned 
       // unset($user->password);
 
        //returning the registered user 
        return array('error' => false, 'doctores_pacientes' => $doctores_pacientes);
    }
}