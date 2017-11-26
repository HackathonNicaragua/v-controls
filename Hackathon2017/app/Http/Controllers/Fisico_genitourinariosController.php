<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Hashing\BcryptHasher;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Fisico_genitourinarios;
use Illuminate\Database\Eloquent\Model;
 
 
class Fisico_genitourinariosController extends Controller
{


      public function eliminarquinta(Request $id){
        $Fisico_genitourinarios= Fisico_genitourinarios::find($id->Id_Genitourinario);
        $Fisico_genitourinarios->delete();
        if(!$Fisico_genitourinarios){
            return response()->json('Error en el eliminar',200);
        }
        return response()->json('Eliminado',200);
    }
     
    public function actualizarquinta(Request $request, Request $numero){
        //$numero = Datos_personales::where('Numero_Expediente','=',$numero->Numero_Expediente)->get();
        $Fisico_genitourinarios= Fisico_genitourinarios::findorFail($request->Id_Genitourinario);
        $this->validate($request, [
            'Id_Genitourinario' => 'required',
            'Codig_E_Fisico' => 'required',
            'Descripcion' => 'required',
            'Examen_Ginecologico' => 'required',
            'examen_Neurologico' => 'required',
            'Id_Consulta' => 'required',
        ]);

        $result = $Fisico_genitourinarios->update($request->all());
        if(!$result){
            return response()->json('Error',200);
        }
        return response()->json('Actualizado',200);
    } 
   public function mostrarFisico_genitourinarios(){
        $Fisico_genitourinarios= Fisico_genitourinarios::all();
        return response()->json($Fisico_genitourinarios, 200);
    }

    public function buscarporId_Genitourinarios(Request $numero){
        $Fisico_genitourinarios = Fisico_genitourinarios::where('Id_Genitourinario','=',$numero->Id_Genitourinario)->get();
        return response()->json($Fisico_genitourinarios, 200);
    }
 
    public function buscarporCodigoGenitourinario(Request $numero){
        $Fisico_genitourinarios = Fisico_genitourinarios::where('Codigo_E_Fisico','=',$numero->Codigo_E_Fisico)->get();
        return response()->json($Fisico_genitourinarios, 200);
    }
 
    //this function is used to register a new user
    public function create(Request $request)
    {
        //creating a validator
        $validator = Validator::make($request->all(), [
            'Id_Genitourinario' => 'required|unique:fisico_genitourinarios',
            'Codig_E_Fisico' => 'required',
            'Descripcion' => 'required',
            'Examen_Ginecologico' => 'required',
            'examen_Neurologico' => 'required',
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
        $fisico_genitourinarios = new Fisico_genitourinarios();
        
        //adding values to the users
        $fisico_genitourinarios->Id_Genitourinario = $request->input('Id_Genitourinario');
        $fisico_genitourinarios->Codig_E_Fisico = $request->input('Codig_E_Fisico');
        $fisico_genitourinarios->Descripcion = $request->input('Descripcion');
        $fisico_genitourinarios->Examen_Ginecologico = $request->input('Examen_Ginecologico');
        $fisico_genitourinarios->examen_Neurologico = $request->input('examen_Neurologico');
        $fisico_genitourinarios->Id_Consulta = $request->input('Id_Consulta');

        
        //saving the user to database
        $fisico_genitourinarios->save();
        
        //unsetting the password so that it will not be returned 
       // unset($user->password);
 
        //returning the registered user 
        return array('error' => false, 'fisico_genitourinarios' => $fisico_genitourinarios);
    }
}