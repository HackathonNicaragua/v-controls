<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Hashing\BcryptHasher;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Fisico_abdomen_pelvis;
use Illuminate\Database\Eloquent\Model;
 
 
class Fisico_abdomen_pelvisController extends Controller
{

    public function borraroctava(Request $id){
        $Fisico_abdomen_pelvis= Fisico_abdomen_pelvis::find($id->Id_Abdomen_pelvis);
        $Fisico_abdomen_pelvis->delete();
        if(!$Fisico_abdomen_pelvis){
            return response()->json('Error en el eliminar',200);
        }
        return $this->responseSuccess($Fisico_abdomen_pelvis);
    }
     
    public function actualizaroctava(Request $request, Request $numero){
        //$numero = Datos_personales::where('Numero_Expediente','=',$numero->Numero_Expediente)->get();
        $Fisico_abdomen_pelvis= Fisico_abdomen_pelvis::findorFail($request->Id_Abdomen_pelvis);
        $this->validate($request, [
             'Id_Abdomen_pelvis' => 'required',
            'Codigo_E_Fisico' => 'required',
            'Descripcion' => 'required',
            'Tacto_Rectal' => 'required',
            'Id_Consulta' => 'required'
        ]);

        $result = $Fisico_abdomen_pelvis->update($request->all());
        if(!$result){
            return response()->json('Error en el actualizar',200);
        }
        return response()->json('Actualizado',200);

}
 
    public function mostrarFisico_abdomen_pelvis(){
        $fisico_abdomen_pelvis= Fisico_abdomen_pelvis::all();
        return response()->json($fisico_abdomen_pelvis, 200);
    }

    public function buscarFisico_abdomen_pelvisid(Request $numero){
        $Fisico_abdomen_pelvis = Fisico_abdomen_pelvis::where('Id_Abdomen_pelvis','=',$numero->Id_Abdomen_pelvis)->get();
        return response()->json($Fisico_abdomen_pelvis, 200);
    }
 
    public function buscarporCodigo_E_Fisico(Request $numero){
        $Fisico_abdomen_pelvis = Fisico_abdomen_pelvis::where('Codigo_E_Fisico','=',$numero->Codigo_E_Fisico)->get();
        return response()->json($Fisico_abdomen_pelvis, 200);
    }
 

    //this function is used to register a new user
    public function create(Request $request)
    {
        //creating a validator
        $validator = Validator::make($request->all(), [
            'Id_Abdomen_pelvis' => 'required|unique:fisico_abdomen_pelvis',
            'Codigo_E_Fisico' => 'required',
            'Descripcion' => 'required',
            'Tacto_Rectal' => 'required',
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
        $fisico_abdomen_pelvis = new Fisico_abdomen_pelvis();
        
        //adding values to the users
        $fisico_abdomen_pelvis->Id_Abdomen_pelvis = $request->input('Id_Abdomen_pelvis');
        $fisico_abdomen_pelvis->Codigo_E_Fisico = $request->input('Codigo_E_Fisico');
        $fisico_abdomen_pelvis->Descripcion = $request->input('Descripcion');
        $fisico_abdomen_pelvis->Tacto_Rectal = $request->input('Tacto_Rectal');
        $fisico_abdomen_pelvis->Id_Consulta = $request->input('Id_Consulta');

        
        //saving the user to database
        $fisico_abdomen_pelvis->save();
        
        //unsetting the password so that it will not be returned 
       // unset($user->password);
 
        //returning the registered user 
        return array('error' => false, 'fisico_abdomen_pelvis' => $fisico_abdomen_pelvis);
    }
}