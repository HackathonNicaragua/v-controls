<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Hashing\BcryptHasher;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Antecedentes_gineco_obstetricos;
use Illuminate\Database\Eloquent\Model;
 
 
class Antecedentes_gineco_obstetricosController extends Controller
{
public function eliminarDecimaPrimera(Request $id){
     $Antecedentes_gineco_obstetricos= Antecedentes_gineco_obstetricos::find($id->Id_Gineco_Obstetrico);
        $Antecedentes_gineco_obstetricos->delete();
        if(!$Antecedentes_gineco_obstetricos){
            return response()->json('Error en el eliminar',200);
        }
        return $this->responseSuccess($Antecedentes_gineco_obstetricos);
}

    public function actualizarDecimePrimera(Request $request)
    {
        $Antecedentes_gineco_obstetricos= Antecedentes_gineco_obstetricos::findorFail($request->Id_Gineco_Obstetrico);
        $this->validate($request, [
            'Id_Gineco_Obstetrico' => 'required',
            'Menarca' => 'required',
            'Vida_Sexual_Activa' => 'required',
            'Numero_Parejas' => 'required',
            'Gesta' => 'required',
            'Cesarea' => 'required',
            'Aborto' => 'required',
            'Legrado' => 'required',
            'Planificacion_Familiar' => 'required',
            'Metodo' => 'required',
             'FUR' => 'required',
             'Semanas_Amenorrea' => 'required',
             'Menapausia' => 'required',
             'Fecha_Menapausia' =>'required',
             'Sustitucion_Hormonal' => 'required',
             'Especifique_Hormonal' => 'required',
             'PAP' => 'required',
             'Resultado' => 'required',
             'Numero_Expediente' => 'required'      
        ]);
        $result = $Antecedentes_gineco_obstetricos->update($request->all());
        if(!$result){
            return $this->responseFail();
        }
        return response()->json('Actualizado Correctamente',200);
    }


    public function mostrarantecedentes_gineco_obstetricos(){
         $antecedentes_gineco_obstetricos= antecedentes_gineco_obstetricos::all();
        return response()->json($antecedentes_gineco_obstetricos, 200);

    }

    public function buscarporIdGinecoObstetrico(Request $numero){
        $antecedentes_gineco_obstetricos = antecedentes_gineco_obstetricos::where('Id_Gineco_Obstetrico','=',$numero->Id_Gineco_Obstetrico)->get();
        return response()->json($antecedentes_gineco_obstetricos, 200);
    }
 
    public function buscarponumeroexpediente(Request $numero){
        $antecedentes_gineco_obstetricos = antecedentes_gineco_obstetricos::where('Numero_Expediente','=',$numero->Numero_Expediente)->get();
        return response()->json($antecedentes_gineco_obstetricos, 200);
    }
    //this function is used to register a new user
    public function create(Request $request)
    {
        //creating a validator
        $validator = Validator::make($request->all(), [
            'Id_Gineco_Obstetrico' => 'required|unique:antecedentes_gineco_obstetricos',
            'Menarca' => 'required',
            'Vida_Sexual_Activa' => 'required',
            'Numero_Parejas' => 'required',
            'Gesta' => 'required',
            'Cesarea' => 'required',
            'Aborto' => 'required',
            'Legrado' => 'required',
            'Planificacion_Familiar' => 'required',
            'Metodo' => 'required',
             'FUR' => 'required',
             'Semanas_Amenorrea' => 'required',
             'Menapausia' => 'required',
             'Fecha_Menapausia' =>'required',
             'Sustitucion_Hormonal' => 'required',
             'Especifique_Hormonal' => 'required',
             'PAP' => 'required',
             'Resultado' => 'required',
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
        $antecedentes_gineco_obstetricos = new Antecedentes_gineco_obstetricos();
        
        //adding values to the users
        $antecedentes_gineco_obstetricos->Id_Gineco_Obstetrico = $request->input('Id_Gineco_Obstetrico');
        $antecedentes_gineco_obstetricos->Menarca = $request->input('Menarca');
        $antecedentes_gineco_obstetricos->Vida_Sexual_Activa = $request->input('Vida_Sexual_Activa');
        $antecedentes_gineco_obstetricos->Numero_Parejas = $request->input('Numero_Parejas');
        $antecedentes_gineco_obstetricos->Gesta = $request->input('Gesta');
        $antecedentes_gineco_obstetricos->Cesarea = $request->input('Cesarea');
        $antecedentes_gineco_obstetricos->Aborto = $request->input('Aborto');
        $antecedentes_gineco_obstetricos->Legrado = $request->input('Legrado');
        $antecedentes_gineco_obstetricos->Planificacion_Familiar = $request->input('Planificacion_Familiar');
        $antecedentes_gineco_obstetricos->Metodo = $request->input('Metodo');
        $antecedentes_gineco_obstetricos->FUR = $request->input('FUR');
        $antecedentes_gineco_obstetricos->Semanas_Amenorrea = $request->input('Semanas_Amenorrea');
        $antecedentes_gineco_obstetricos->Menapausia = $request->input('Menapausia');
        $antecedentes_gineco_obstetricos->Fecha_Menapausia = $request->input('Fecha_Menapausia');
        $antecedentes_gineco_obstetricos->Sustitucion_Hormonal = $request->input('Sustitucion_Hormonal');
        $antecedentes_gineco_obstetricos->Especifique_Hormonal = $request->input('Especifique_Hormonal');
        $antecedentes_gineco_obstetricos->PAP = $request->input('PAP');
        $antecedentes_gineco_obstetricos->Resultado = $request->input('Resultado');
        $antecedentes_gineco_obstetricos->Numero_Expediente = $request->input('Numero_Expediente');
        
        //saving the user to database
        $antecedentes_gineco_obstetricos->save();
        
        //unsetting the password so that it will not be returned 
       // unset($user->password);
 
        //returning the registered user 
        return array('error' => false, 'antecedentes_gineco_obstetricos' => $antecedentes_gineco_obstetricos);
    }
}