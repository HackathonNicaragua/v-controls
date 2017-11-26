<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Hashing\BcryptHasher;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Antecedentes_personales_nopatologicos;
use Illuminate\Database\Eloquent\Model;
 
class Antecedentes_personales_nopatologicosController extends Controller
{
public function eliminarDecimatercera(Request $id){
    $Antecedentes_personales_nopatologicos= Antecedentes_personales_nopatologicos::find($id->Id_noPatologicas);
        $Antecedentes_personales_nopatologicos->delete();
        if(!$Antecedentes_personales_nopatologicos){
            return response()->json('Error en el eliminar',200);
        }
        return response()->json('Eliminado',200);
}

public function ActualizarDecimaTercera(Request $request){
      $Antecedentes_personales_nopatologicos= Antecedentes_personales_nopatologicos::findorFail($request->Id_noPatologicas);
        $this->validate($request, [
            'Id_noPatologicas' => 'required',
            'Numero_Expediente' => 'required',
            'Hora_De_Sueño' => 'required',
            'Horas_Laborales' => 'required',
            'Hora_Actividad_Fisica' => 'required',
            'Alimentacion' => 'required',
            'Tabaco' => 'required',
            'Cantidad_Frecuencia_Tabaco' => 'required',
            'Edad_Inicio_Tabaco' => 'required',
            'Edad_Abandono_Tabaco' => 'required',
             'Duracion_Habito_Tabaco' => 'required',
             'Alcohol' => 'required',
             'Cantidad_Frecuencia_Alcohol' => 'required',
             'Edad_Inicio_Alcohol' =>'required',
             'Edad_Abandono_Alcohol' => 'required',
             'Duracion_Habito_Alcohol' => 'required',
             'Drogas' => 'required',
             'Cantidad_Frecuencia_Drogas' => 'required',
             'Edad_Inicio_Drogas' => 'required',
             'Edad_Abandono_Drogas' => 'required',
             'Duracion_Habito_Drogas' => 'required',
             'Farmacos' => 'required',
             'Numero_Farmacos_Recibiendo' => 'required',
             'Nombre_Posologia_Farmacos' => 'required', 
             'Otros_Habitos'=> 'required'
        ]);

        $result = $Antecedentes_personales_nopatologicos->update($request->all());
        if(!$result){
            return $this->responseFail();
        }
        //return $this->responseSuccess($datos_personales);
}

    public function mostrarAntecedentes_personales_nopatologicos(){
        $antecedentes_personales_nopatologicos= Antecedentes_personales_nopatologicos::all();
        return response()->json($antecedentes_personales_nopatologicos, 200);

    }

    public function buscarporIdnopatologicas(Request $numero){
        $antecedentes_personales_nopatologicos = Antecedentes_personales_nopatologicos::where('Id_noPatologicas','=',$numero->Id_noPatologicas)->get();
        return response()->json($antecedentes_personales_nopatologicos, 200);
    }
 
    public function buscarpornumeroexpediente(Request $numero){
        $antecedentes_personales_nopatologicos = Antecedentes_personales_nopatologicos::where('Numero_Expediente','=',$numero->Numero_Expediente)->get();
        return response()->json($antecedentes_personales_nopatologicos, 200);
    }


 
    //this function is used to register a new user
    public function create(Request $request)
    {
        //creating a validator
        $validator = Validator::make($request->all(), [
            'Id_noPatologicas' => 'required|unique:antecedentes_personales_nopatologicos',
            'Numero_Expediente' => 'required',
            'Hora_De_Sueño' => 'required',
            'Horas_Laborales' => 'required',
            'Hora_Actividad_Fisica' => 'required',
            'Alimentacion' => 'required',
            'Tabaco' => 'required',
            'Cantidad_Frecuencia_Tabaco' => 'required',
            'Edad_Inicio_Tabaco' => 'required',
            'Edad_Abandono_Tabaco' => 'required',
             'Duracion_Habito_Tabaco' => 'required',
             'Alcohol' => 'required',
             'Cantidad_Frecuencia_Alcohol' => 'required',
             'Edad_Inicio_Alcohol' =>'required',
             'Edad_Abandono_Alcohol' => 'required',
             'Duracion_Habito_Alcohol' => 'required',
             'Drogas' => 'required',
             'Cantidad_Frecuencia_Drogas' => 'required',
             'Edad_Inicio_Drogas' => 'required',
             'Edad_Abandono_Drogas' => 'required',
             'Duracion_Habito_Drogas' => 'required',
             'Farmacos' => 'required',
             'Numero_Farmacos_Recibiendo' => 'required',
             'Nombre_Posologia_Farmacos' => 'required', 
             'Otros_Habitos'=> 'required'
        ]);
 
        //if validation fails 
        if ($validator->fails()) {
            return array(
                'error' => true,
                'message' => $validator->errors()->all()
            );
        }
    
        //creating a new user
        $antecedentes_personales_nopatologicos = new Antecedentes_personales_nopatologicos();
        
        //adding values to the users
        $antecedentes_personales_nopatologicos->Id_noPatologicas = $request->input('Id_noPatologicas');
        $antecedentes_personales_nopatologicos->Numero_Expediente = $request->input('Numero_Expediente');
        $antecedentes_personales_nopatologicos->Hora_De_Sueño = $request->input('Hora_De_Sueño');
        $antecedentes_personales_nopatologicos->Horas_Laborales = $request->input('Horas_Laborales');
        $antecedentes_personales_nopatologicos->Hora_Actividad_Fisica = $request->input('Hora_Actividad_Fisica');
        $antecedentes_personales_nopatologicos->Alimentacion = $request->input('Alimentacion');
        $antecedentes_personales_nopatologicos->Tabaco = $request->input('Tabaco');
        $antecedentes_personales_nopatologicos->Cantidad_Frecuencia_Tabaco = $request->input('Cantidad_Frecuencia_Tabaco');
        $antecedentes_personales_nopatologicos->Edad_Inicio_Tabaco = $request->input('Edad_Inicio_Tabaco');
        $antecedentes_personales_nopatologicos->Edad_Abandono_Tabaco = $request->input('Edad_Abandono_Tabaco');
        $antecedentes_personales_nopatologicos->Duracion_Habito_Tabaco = $request->input('Duracion_Habito_Tabaco');
        $antecedentes_personales_nopatologicos->Alcohol = $request->input('Alcohol');
        $antecedentes_personales_nopatologicos->Cantidad_Frecuencia_Alcohol = $request->input('Cantidad_Frecuencia_Alcohol');
        $antecedentes_personales_nopatologicos->Edad_Inicio_Alcohol = $request->input('Edad_Inicio_Alcohol');
        $antecedentes_personales_nopatologicos->Edad_Abandono_Alcohol = $request->input('Edad_Abandono_Alcohol');
        $antecedentes_personales_nopatologicos->Duracion_Habito_Alcohol = $request->input('Duracion_Habito_Alcohol');        
        $antecedentes_personales_nopatologicos->Drogas = $request->input('Drogas');
        $antecedentes_personales_nopatologicos->Cantidad_Frecuencia_Drogas = $request->input('Cantidad_Frecuencia_Drogas');
        $antecedentes_personales_nopatologicos->Edad_Inicio_Drogas = $request->input('Edad_Inicio_Drogas');
        $antecedentes_personales_nopatologicos->Edad_Abandono_Drogas = $request->input('Edad_Abandono_Drogas');
        $antecedentes_personales_nopatologicos->Duracion_Habito_Drogas = $request->input('Duracion_Habito_Drogas');
        $antecedentes_personales_nopatologicos->Farmacos = $request->input('Farmacos');
        $antecedentes_personales_nopatologicos->Numero_Farmacos_Recibiendo = $request->input('Numero_Farmacos_Recibiendo');
        $antecedentes_personales_nopatologicos->Nombre_Posologia_Farmacos = $request->input('Nombre_Posologia_Farmacos');
        $antecedentes_personales_nopatologicos->Otros_Habitos = $request->input('Otros_Habitos');
        
        //saving the user to database
        $antecedentes_personales_nopatologicos->save();
        
        //unsetting the password so that it will not be returned 
       // unset($user->password);
 
        //returning the registered user 
        return array('error' => false, 'antecedentes_personales_nopatologicos' => $antecedentes_personales_nopatologicos);
    }
}