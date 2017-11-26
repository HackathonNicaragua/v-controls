<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Hashing\BcryptHasher;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Usuarios;
use Illuminate\Database\Eloquent\Model;

 
 
class UsuariosController extends Controller
{

    public function login(Request $usuario, Request $contraseña)
    {
        $Usuarios = Usuarios::where('Nombre_Usuario','=',$usuario->Nombre_Usuario,'AND', 'Contraseña','=',$contraseña->Contraseña)->get();
        return response()->json($Usuarios, 200);
    }

	 public function mostrarUsuarios(){
        $Usuarios= Usuarios::all();
        return response()->json($Usuarios, 200);
    }


     public function create(Request $request)
    {
        //creating a validator
        $validator = Validator::make($request->all(), [
 		'Id_Usuario' => 'required|unique:Usuarios',
 		'Nombre_Usuario' => 'required',
 		'Contraseña' => 'required',
 		'Niveles' => 'required'
        ]);
 
        //if validation fails 
        if ($validator->fails()) {
            return array(
                'error' => true,
                'message' => $validator->errors()->all()
            );
        }
    
        //creating a new user
        $Usuarios = new Usuarios();
        
        //adding values to the users
        $Usuarios->Id_Usuario = $request->input('Id_Usuario');
        $Usuarios->Nombre_Usuario = $request->input('Nombre_Usuario');
        $Usuarios->Contraseña = $request->input('Contraseña');
        $Usuarios->Niveles = $request->input('Niveles');
       

        
        //saving the user to database
        $Usuarios->save();
        
        //unsetting the password so that it will not be returned 
       // unset($user->password);
 
        //returning the registered user 
        return array('error' => false, 'Usuarios' => $Usuarios);
    }
}