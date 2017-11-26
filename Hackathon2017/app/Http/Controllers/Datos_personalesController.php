<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Hashing\BcryptHasher;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Datos_personales;
use Illuminate\Database\Eloquent\Model;

 
 
class Datos_personalesController extends Controller
{



    public function mostrar(){
        $datos_personales= Datos_personales::all();
        return response()->json($datos_personales, 200);
    }

    public function mostrarNumeroNombre()
    {
        $datos_personales= Datos_personales::select('Nombres','Apellidos','Numero_Expediente')->get();
        return response()->json($datos_personales,200) ;
    }

    public function buscarpornumero(Request $numero){
        $datos_personales = Datos_personales::where('Numero_Expediente','=',$numero->Numero_Expediente)->get();
        return response()->json($datos_personales, 200);
        
    }
    public function buscarpornombre(Request $nombre){
        $datos_personales = Datos_personales::where('Nombres','like','%'.$nombre->Nombres.'%')->get();
        return response()->json($datos_personales, 200);
    }

    public function eliminarusuario(Request $id){
        $datos_personales= Datos_personales::find($id->Numero_Expediente);
        $datos_personales->delete();
        if(!$datos_personales){
            return response()->json('Error en el eliminar',200);
        }
        return $this->responseSuccess($datos_personales);
    }
 



    
    public function actualizardatospersonales(Request $request, Request $numero){
        //$numero = Datos_personales::where('Numero_Expediente','=',$numero->Numero_Expediente)->get();
        $datos_personales= Datos_personales::findorFail($request->Numero_Expediente);
        $this->validate($request, [
            'Numero_Expediente' => 'required',
            'Nombres' => 'required',
            'Apellidos' => 'required',
            'numerocedula' => 'required',
            'numeroinss' => 'required',
            'Edad' => 'required',
            'Lugar_Nacimiento' => 'required',
            'Religion' => 'required',
            'Etnias' => 'required',
            'Escolaridad' => 'required',
            'Sexo' => 'required',
            'Profesion' => 'required',
            'Direccion_Habitual' => 'required',
            'Nombre_Padre' => 'required',
            'Nombre_Madre' => 'required'
        ]);

        $result = $datos_personales->update($request->all());
        if(!$result){
            return $this->responseFail();
        }
       // return $this->responseSuccess($datos_personales);
    }

    //this function is used to register a new user
    public function create(Request $request)
    {
        //creating a validator
        $validator = Validator::make($request->all(), [
            'Numero_Expediente' => 'required|unique:datos_personales',
            'Nombres' => 'required',
            'Apellidos' => 'required',
            'numerocedula' => 'required',
            'numeroinss' => 'required',
            'Edad' => 'required',
            'Lugar_Nacimiento' => 'required',
            'Religion' => 'required',
            'Etnias' => 'required',
            'Escolaridad' => 'required',
            'Sexo' => 'required',
            'Profesion' => 'required',
            'Direccion_Habitual' => 'required',
            'Nombre_Padre' => 'required',
            'Nombre_Madre' => 'required'
        ]);
 
        //if validation fails 
        if ($validator->fails()) {
            return array(
                'error' => true,
                'message' => $validator->errors()->all()
            );
        }
    
        //creating a new user
        $datos_personales = new Datos_personales();
        
        //adding values to the users
        $datos_personales->Numero_Expediente = $request->input('Numero_Expediente');
        $datos_personales->Nombres = $request->input('Nombres');
        $datos_personales->Apellidos = $request->input('Apellidos');
        $datos_personales->numerocedula = $request->input('numerocedula');
        $datos_personales->numeroinss = $request->input('numeroinss');
        $datos_personales->Edad = $request->input('Edad');
        $datos_personales->Lugar_Nacimiento = $request->input('Lugar_Nacimiento');
        $datos_personales->Religion = $request->input('Religion'); 
        $datos_personales->Etnias = $request->input('Etnias'); 
        $datos_personales->Escolaridad = $request->input('Escolaridad'); 
        $datos_personales->Sexo = $request->input('Sexo'); 
        $datos_personales->Profesion = $request->input('Profesion'); 
        $datos_personales->Direccion_Habitual = $request->input('Direccion_Habitual'); 
        $datos_personales->Nombre_Padre = $request->input('Nombre_Padre'); 
        $datos_personales->Nombre_Madre = $request->input('Nombre_Madre'); 

        
        //saving the user to database
        $datos_personales->save();
        
        //unsetting the password so that it will not be returned 
       // unset($user->password);
 
        //returning the registered user 
        return array('error' => false, 'datos_personales' => $datos_personales);
    }
}
