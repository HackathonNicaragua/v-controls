<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Hashing\BcryptHasher;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Consultas;
use Illuminate\Database\Eloquent\Model;
 
 
class ConsultasController extends Controller
{
    public function eliminarSegunda(Request $id)
    {
        $Consultas= Consultas::find($id->Id_Consulta);
        $Consultas->delete();
        if(!$Consultas){
            return response()->json('Error en el eliminar',200);
        }
        return response()->json('Eliminado',200);
    }
    

    public function ActualizarSegunda(Request $request){
        $Consultas= Consultas::findorFail($request->Id_Consulta);
        $this->validate($request, [
            'Id_Consulta' => 'required',
            'Motivo_Consulta' => 'required',
            'Historia_Enfermedad_Actual' => 'required',
            'Interrogatorio' => 'required',
            'Fecha' => 'required',
            'Sala' => 'required',
            'Numero_Cama' => 'required',
            'Fuente_Informacion' => 'required',
            'Confiabilidad' => 'required',
            'Numero_Expediente' => 'required',
            'Servicio' => 'required',
            'Hora' => 'required',
        ]);

        $result = $Consultas->update($request->all());
        if(!$result){
            return $this->responseFail();
        }
       // return $this->responseSuccess($Consultas);
    }


    public function mostrarconsultas(){
        $consultas= Consultas::all();
        return response()->json($consultas, 200);

    }

    public function buscarconsultas(Request $numero){
        $consultas = Consultas::where('Fecha','=',$numero->Fecha)->get();
        return response()->json($consultas, 200);
    }
 
    public function buscarpornumeroexpediente(Request $numero){
        $consultas = Consultas::where('Numero_Expediente','=',$numero->Numero_Expediente)->get();
        return response()->json($consultas, 200);
    }
 
    //this function is used to register a new user
    public function create(Request $request)
    {
        //creating a validator
        $validator = Validator::make($request->all(), [
            'Id_Consulta' => 'required|unique:Consultas',
            'Motivo_Consulta' => 'required',
            'Historia_Enfermedad_Actual' => 'required',
            'Interrogatorio' => 'required',
            'Fecha' => 'required',
            'Sala' => 'required',
            'Numero_Cama' => 'required',
            'Fuente_Informacion' => 'required',
            'Confiabilidad' => 'required',
            'Numero_Expediente' => 'required',
            'Servicio' => 'required',
            'Hora' => 'required',
        ]);
 
        //if validation fails 
        if ($validator->fails()) {
            return array(
                'error' => true,
                'message' => $validator->errors()->all()
            );
        }
    
        //creating a new user
        $consulta = new Consultas();
        
        //adding values to the users
        $consulta->Id_Consulta = $request->input('Id_Consulta');
        $consulta->Motivo_Consulta = $request->input('Motivo_Consulta');
        $consulta->Historia_Enfermedad_Actual = $request->input('Historia_Enfermedad_Actual');
        $consulta->Interrogatorio = $request->input('Interrogatorio');
        $consulta->Fecha = $request->input('Fecha');
        $consulta->Sala = $request->input('Sala');
        $consulta->Numero_Cama = $request->input('Numero_Cama'); 
        $consulta->Fuente_Informacion = $request->input('Fuente_Informacion'); 
        $consulta->Confiabilidad = $request->input('Confiabilidad'); 
        $consulta->Numero_Expediente = $request->input('Numero_Expediente'); 
        $consulta->Servicio = $request->input('Servicio'); 
        $consulta->Hora = $request->input('Hora'); 

        
        //saving the user to database
        $consulta->save();
        
        //unsetting the password so that it will not be returned 
       // unset($user->password);
 
        //returning the registered user 
        return array('error' => false, 'Consultas' => $consulta);
    }
}