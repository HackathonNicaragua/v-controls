<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Hashing\BcryptHasher;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Fisico_muscuesqueleticos;
use Illuminate\Database\Eloquent\Model;
 
 
class Fisico_muscuesqueleticosController extends Controller
{
      public function eliminarsexta(Request $id){
        $Fisico_muscuesqueleticos= Fisico_muscuesqueleticos::find($id->Id_Muscuesqueletico);
        $Fisico_muscuesqueleticos->delete();
        if(!$Fisico_muscuesqueleticos){
            return response()->json('Error en el eliminar',200);
        }
        return response()->json('Eliminado',200);
    }
     
    public function actualizarsexta(Request $request, Request $numero){
        //$numero = Datos_personales::where('Numero_Expediente','=',$numero->Numero_Expediente)->get();
        $Fisico_muscuesqueleticos= Fisico_muscuesqueleticos::findorFail($request->Id_Muscuesqueletico);
        $this->validate($request, [
            'Id_Muscuesqueletico' => 'required',
            'Codigo_E_Fisico' => 'required',
            'Extremidades_Superiores' => 'required',
            'Extremidades_inferiores' => 'required',
            'Id_Consulta' => 'required',
        ]);

        $result = $Fisico_muscuesqueleticos->update($request->all());
        if(!$result){
            return response()->json('Error',200);
        }
        return response()->json('Actualizado',200);
    } 

    public function mostrarFisico_muscuesqueleticos(){
        $Fisico_muscuesqueleticos= Fisico_muscuesqueleticos::all();
        return response()->json($Fisico_muscuesqueleticos, 200);
    }

    public function buscarporId_MuscuesqueleticoPrimaria(Request $numero){
        $Fisico_muscuesqueleticos = Fisico_muscuesqueleticos::where('Id_Muscuesqueletico','=',$numero->Id_Muscuesqueletico)->get();
        return response()->json($Fisico_muscuesqueleticos, 200);
    }
 
    public function buscarpocodigofisicomuscuesqueletico(Request $numero){
        $Fisico_muscuesqueleticos = Fisico_muscuesqueleticos::where('Codigo_E_Fisico','=',$numero->Codigo_E_Fisico)->get();
        return response()->json($Fisico_muscuesqueleticos, 200);
    }
 
    //this function is used to register a new user
    public function create(Request $request)
    {
        //creating a validator
        $validator = Validator::make($request->all(), [
            'Id_Muscuesqueletico' => 'required|unique:fisico_muscuesqueleticos',
            'Codigo_E_Fisico' => 'required',
            'Extremidades_Superiores' => 'required',
            'Extremidades_inferiores' => 'required',
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
        $fisico_muscuesqueleticos = new Fisico_muscuesqueleticos();
        
        //adding values to the users
        $fisico_muscuesqueleticos->Id_Muscuesqueletico = $request->input('Id_Muscuesqueletico');
        $fisico_muscuesqueleticos->Codigo_E_Fisico = $request->input('Codigo_E_Fisico');
        $fisico_muscuesqueleticos->Extremidades_Superiores = $request->input('Extremidades_Superiores');
        $fisico_muscuesqueleticos->Extremidades_inferiores = $request->input('Extremidades_inferiores');
        $fisico_muscuesqueleticos->Id_Consulta = $request->input('Id_Consulta');

        
        //saving the user to database
        $fisico_muscuesqueleticos->save();
        
        //unsetting the password so that it will not be returned 
       // unset($user->password);
 
        //returning the registered user 
        return array('error' => false, 'fisico_muscuesqueleticos' => $fisico_muscuesqueleticos);
    }
}