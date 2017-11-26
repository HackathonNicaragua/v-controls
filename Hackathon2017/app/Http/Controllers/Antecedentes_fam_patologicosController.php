<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Hashing\BcryptHasher;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Antecedentes_fam_patologicos;
use Illuminate\Database\Eloquent\Model;
 
 
class Antecedentes_fam_patologicosController extends Controller
{

    public function eliminarAntecedentesFam(Request $id){
        $antecedentes_fam_patologicos=Antecedentes_fam_patologicos::find($id->Id_Patologicos);
        $antecedentes_fam_patologicos->delete();
        if($antecedentes_fam_patologicos){
            return response()->json('Error al Eliminar',200);
        }
        return response()->json('Guardado Exitosamente',200);
    }

    public function actualizardecima(Request $request)
    {
        $antecedentes_fam_patologicos= Antecedentes_fam_patologicos::findorFail($request->Id_Patologicos);
         $this->validate($request, [
            'Id_Patologicos' => 'required',
            'Numero_Expediente' => 'required',
            'Id_Consulta' => 'required',
            'E_Infecto_Contagiosas' => 'required',
            'E_Hereditarias' => 'required']);
         $result=$antecedentes_fam_patologicos->update($request->all());
            if(!$result){
            return $this->responseFail();
        }
        return response()->json('Actualizado Correctamente',200);
    }


    public function mostrar(){
    $antecedentes_fam_patologicos= Antecedentes_fam_patologicos::all();
    return response()->json($antecedentes_fam_patologicos, 200);
    }


    public function buscarporidpatologicos(Request $numero){
        $antecedentes_fam_patologicos = antecedentes_fam_patologicos::where('Id_Patologicos','=',$numero->Id_Patologicos)->get();
        return response()->json($antecedentes_fam_patologicos, 200);   
    }
 

    public function buscarporidconsulta(Request $consulta){
        $antecedentes_fam_patologicos = antecedentes_fam_patologicos::where('Id_Consulta','=',$consulta->Id_Consulta)->get();
        return response()->json($antecedentes_fam_patologicos, 200);
    }

    //this function is used to register a new user
    public function create(Request $request)
    {
        //creating a validator
        $validator = Validator::make($request->all(), [
            'Id_Patologicos' => 'required|unique:Antecedentes_fam_patologicos',
            'Numero_Expediente' => 'required',
            'Id_Consulta' => 'required',
            'E_Infecto_Contagiosas' => 'required',
            'E_Hereditarias' => 'required',
        
        ]);
 
        //if validation fails 
        if ($validator->fails()) {
            return array(
                'error' => true,
                'message' => $validator->errors()->all()
            );
        }
    
        //creating a new user
        $antecedentes_fam_patologicos = new Antecedentes_fam_patologicos();
        
        //adding values to the users
        $antecedentes_fam_patologicos->Id_Patologicos = $request->input('Id_Patologicos');
        $antecedentes_fam_patologicos->Numero_Expediente = $request->input('Numero_Expediente');
        $antecedentes_fam_patologicos->Id_Consulta = $request->input('Id_Consulta');
        $antecedentes_fam_patologicos->E_Infecto_Contagiosas = $request->input('E_Infecto_Contagiosas');
        $antecedentes_fam_patologicos->E_Hereditarias = $request->input('E_Hereditarias');
        
        //saving the user to database
        $antecedentes_fam_patologicos->save();
        
        //unsetting the password so that it will not be returned 
       // unset($user->password);
 
        //returning the registered user 
        return array('error' => false, 'antecedentes_fam_patologicos' => $antecedentes_fam_patologicos);
    }
}