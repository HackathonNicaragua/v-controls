<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Hashing\BcryptHasher;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Historia_laborales;
use Illuminate\Database\Eloquent\Model;
 
 
class Historia_laboralesController extends Controller
{

    public function eliminardecima(Request $id){
        $Historia_laborales= Historia_laborales::find($id->Codigo_Historia_Laboral);
        $Historia_laborales->delete();
        if(!$Historia_laborales){
            return response()->json('Error en el eliminar',200);
        }
        return response()->json('Eliminado',200);
    }
     
    public function actualizardecima(Request $request, Request $numero)
    {
        //$numero = Datos_personales::where('Numero_Expediente','=',$numero->Numero_Expediente)->get();
        $Historia_laborales= Historia_laborales::findorFail($request->Codigo_Historia_Laboral);
        $this->validate($request, [
            'Codigo_Historia_Laboral' => 'required',
            'Numero_Expediente' => 'required',
            'Trabaja_Actual' => 'required',
            'Lugar_trabajo' => 'required',
            'Area_Labora' => 'required',
            'Oficio' => 'required',
            'Anyos_Oficio' => 'required',
            'Dia_Laboral' => 'required',
            'Horas_Semanales_Trabajadas' => 'required',
            'Horas_Extras' => 'required',
            'Tipo_Horario_Realizado' => 'required',
            'Descripcion_Del_Trabajo' => 'required',
            'Expocision_Sustancias' => 'required',
            'Descripcion_Expocision_Sus' => 'required',
            'Intensidad_Trabajo' => 'required',
            'Trabajos_No_Habituales' => 'required',
            
        ]);

        $result = $Historia_laborales->update($request->all());
        if(!$result){
            return response()->json('Error',200);
        }
        return response()->json('Actualizado',200);
    } 

     public function mostrarHistoria_laborales(){
        $Historia_laborales= Historia_laborales::all();
        return response()->json($Historia_laborales, 200);
    }

    public function buscarporCodigo_Historia_Laboral(Request $numero){
        $Historia_laborales = Historia_laborales::where('Codigo_Historia_Laboral','=',$numero->Codigo_Historia_Laboral)->get();
        return response()->json($Historia_laborales, 200);
    }
 
    public function buscarNumero_ExpedienteHistoriaLaboral(Request $numero){
        $Historia_laborales = Historia_laborales::where('Numero_Expediente','=',$numero->Numero_Expediente)->get();
        return response()->json($Historia_laborales, 200);
    }
 
    //this function is used to register a new user
    public function create(Request $request)
    {
        //creating a validator
        $validator = Validator::make($request->all(), [
            'Numero_Expediente' => 'required|unique:Historia_laborales',
            'Trabaja_Actual' => 'required',
            'Lugar_trabajo' => 'required',
            'Area_Labora' => 'required',
            'Oficio' => 'required',
            'Anyos_Oficio' => 'required',
            'Dia_Laboral' => 'required',
            'Horas_Semanales_Trabajadas' => 'required',
            'Horas_Extras' => 'required',
            'Tipo_Horario_Realizado' => 'required',
            'Descripcion_Del_Trabajo' => 'required',
            'Expocision_Sustancias' => 'required',
            'Descripcion_Expocision_Sus' => 'required',
            'Intensidad_Trabajo' => 'required',
            'Trabajos_No_Habituales' => 'required',
            'Codigo_Historia_Laboral' => 'required'
        ]);
 
        //if validation fails 
        if ($validator->fails()) {
            return array(
                'error' => true,
                'message' => $validator->errors()->all()
            );
        }
    
        //creating a new user
        $historia_laboral = new Historia_laborales();
        
        //adding values to the users
        $historia_laboral->Numero_Expediente = $request->input('Numero_Expediente');
        $historia_laboral->Trabaja_Actual = $request->input('Trabaja_Actual');
        $historia_laboral->Lugar_trabajo = $request->input('Lugar_trabajo');
        $historia_laboral->Area_Labora = $request->input('Area_Labora');
        $historia_laboral->Oficio = $request->input('Oficio');
        $historia_laboral->Anyos_Oficio = $request->input('Anyos_Oficio');
        $historia_laboral->Dia_Laboral = $request->input('Dia_Laboral');
        $historia_laboral->Horas_Semanales_Trabajadas = $request->input('Horas_Semanales_Trabajadas');
        $historia_laboral->Horas_Extras = $request->input('Horas_Extras');
        $historia_laboral->Tipo_Horario_Realizado = $request->input('Tipo_Horario_Realizado');
        $historia_laboral->Descripcion_Del_Trabajo = $request->input('Descripcion_Del_Trabajo');
        $historia_laboral->Expocision_Sustancias = $request->input('Expocision_Sustancias');
        $historia_laboral->Descripcion_Expocision_Sus = $request->input('Descripcion_Expocision_Sus');
        $historia_laboral->Intensidad_Trabajo = $request->input('Intensidad_Trabajo');
        $historia_laboral->Trabajos_No_Habituales = $request->input('Trabajos_No_Habituales');
        $historia_laboral->Codigo_Historia_Laboral = $request->input('Codigo_Historia_Laboral');

        
        //saving the user to database
        $historia_laboral->save();
        
        //unsetting the password so that it will not be returned 
       // unset($user->password);
 
        //returning the registered user 
        return array('error' => false, 'historia_laboral' => $historia_laboral);
    }
}