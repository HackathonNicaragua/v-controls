<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('createuser', 'userController@create');

$router->post('createdatospersonales','Datos_personalesController@create'); //Crear un dato
$router->get('mostrardatospersonales','Datos_personalesController@mostrar'); // Mostrar todos los datos
$router->get('buscarpornumero','Datos_personalesController@buscarpornumero');//buscarpornumero
$router->get('buscarpornombre','Datos_personalesController@buscarpornombre');//buscarpornombre
$router->post('actualizardatospersonales','Datos_PersonalesController@actualizardatospersonales');//actualizar datos personales
$router->get('eliminarusuario','Datos_personalesController@eliminarusuario');// PRIMERA
$router->get('mostrarNumeroNombre','Datos_personalesController@mostrarNumeroNombre');


$router->post('createconsulta','ConsultasController@create');//----------->>>>>><SEGUNDA
$router->get('mostrarconsulta','ConsultasController@mostrarconsultas');
$router->get('buscarconsultafecha','ConsultasController@buscarconsultas');
$router->get('buscarpornumeroexpedienteconsultas','ConsultasController@buscarpornumeroexpediente');
$router->post('ActualizarSegunda','ConsultasController@ActualizarSegunda');
$router->delete('eliminarSegunda','ConsultasController@eliminarSegunda2');



$router->post('createexamenfisico','Examen_fisicoController@create');//----------->>>>>>>>>>>>>>>>>-----------TERCERA
$router->get('mostrarexamenesfisicos','Examen_fisicoController@mostrarexamenesfisicos');
$router->get('buscarexamenesfisicosid','Examen_fisicoController@buscarexamenesfisicosid');
$router->get('buscarpornumeroexpediente','Examen_fisicoController@buscarpornumeroexpediente');
$router->post('actualizartercera','Examen_fisicoController@actualizartercera');
$router->get('eliminartercera','Examen_fisicoController@eliminartercera');


$router->post('createFisico_cabeza_cuellos','Fisico_cabeza_cuellosController@create');//--------->>>>>>>>>>>>>>>>>>>>>>>>>>< CUARTA
$router->get('mostrarFisico_cabeza_cuellos','Fisico_cabeza_cuellosController@mostrarFisico_cabeza_cuellos');
$router->get('buscarFisico_abdomen_pelvisidcabeza','Fisico_cabeza_cuellosController@buscarFisico_abdomen_pelvisidcabeza');
$router->get('buscarporCodigo_E_Fisicocabeza','Fisico_cabeza_cuellosController@buscarporCodigo_E_Fisicocabeza');
$router->post('actualizarCUARTA','Fisico_cabeza_cuellosController@actualizarCUARTA');
$router->get('eliminarCuarta','Fisico_cabeza_cuellosController@eliminarCuarta');




$router->post('createfisico_genitourinarios','Fisico_genitourinariosController@create');//------------>>>>>>>>>>>>>>>>>>>>>>>>>> QUINTA
$router->get('mostrarFisico_genitourinarios','Fisico_genitourinariosController@mostrarFisico_genitourinarios');
$router->get('buscarporId_Genitourinario','Fisico_genitourinariosController@buscarporId_Genitourinario');
$router->get('buscarporCodigoGenitourinario','Fisico_genitourinariosController@buscarporCodigoGenitourinario');
$router->post('actualizarquinta','Fisico_genitourinariosController@actualizarquinta');
$router->get('eliminarquinta','Fisico_genitourinariosController@buscarporCodigoGenitourinario');


$router->post('createfisico_muscuesqueleticos','Fisico_muscuesqueleticosController@create');//----------------->>>>>>>>>>>>>>>SEXTA
$router->get('mostrarFisico_muscuesqueleticos','Fisico_muscuesqueleticosController@mostrarFisico_muscuesqueleticos');
$router->get('buscarporId_MuscuesqueleticoPrimaria','Fisico_muscuesqueleticosController@buscarporId_MuscuesqueleticoPrimaria');
$router->get('buscarpocodigofisicomuscuesqueletico','Fisico_muscuesqueleticosController@buscarpocodigofisicomuscuesqueletico');
$router->post('actualizarsexta','Fisico_muscuesqueleticosController@actualizarsexta');
$router->get('eliminarsexta','Fisico_muscuesqueleticosController@eliminarsexta');




$router->post('createFisicoTorax','Fisico_toraxController@create');//------------>>>>>>>>>>>>>>>SEPTIMA
$router->get('mostrarFisico_torax','Fisico_toraxController@mostrarFisico_torax');
$router->get('buscarporId_Torax','Fisico_toraxController@buscarporId_Torax');
$router->get('buscarpocodigofisicotorax','Fisico_toraxController@buscarpocodigofisicotorax');
$router->post('actualizarseptima','Fisico_toraxController@actualizarseptima');
$router->get('eliminarseptima','Fisico_toraxController@eliminarseptima');



$router->post('Createfisico_abdomen_pelvis','Fisico_abdomen_pelvisController@create');//--------------->>>>>>>>><OCTAVA
$router->get('mostrarFisico_abdomen_pelvis','Fisico_abdomen_pelvisController@mostrarFisico_abdomen_pelvis');
$router->get('buscarFisico_abdomen_pelvisid','Fisico_abdomen_pelvisController@buscarFisico_abdomen_pelvisid');
$router->get('buscarporCodigo_E_Fisico','Fisico_abdomen_pelvisController@buscarporCodigo_E_Fisico');
$router->post('actualizaroctava','Fisico_abdomen_pelvisController@actualizaroctava');
$router->get('borraroctava','Fisico_abdomen_pelvisController@borraroctava');




$router->post('createHistoria_antecedentes','Historia_antecedentesController@create');//------->>>>>>>>>>>>>>>>>>>>>>>>NOVENA
$router->get('mostrarHistoria_antecedentes','Historia_antecedentesController@mostrarHistoria_antecedentes');
$router->get('buscarporId_Historia_Antecedentes','Historia_antecedentesController@buscarporId_Historia_Antecedentes');
$router->get('buscarNumero_ExpedienteHistoriaantecendentes','Historia_antecedentesController@buscarNumero_ExpedienteHistoriaantecendentes');
$router->post('actualizarnovena','Historia_antecedentesController@actualizarnovena');
$router->get('eliminarnovena','Historia_antecedentesController@eliminarnovena');


$router->post('createhistoria_laboral','Historia_laboralesController@create');//DECIMA
$router->get('mostrarHistoria_laborales','Historia_laboralesController@mostrarHistoria_laborales');
$router->get('buscarporCodigo_Historia_Laboral','Historia_laboralesController@buscarporCodigo_Historia_Laboral');
$router->get('buscarNumero_ExpedienteHistoriaLaboral','Historia_laboralesController@buscarNumero_ExpedienteHistoriaLaboral');
$router->post('actualizardecima','Historia_laboralesController@actualizardecima');
$router->get('eliminardecima','Historia_laboralesController@eliminardecima');


$router->post('createantecedentes_fam_patologicos','Antecedentes_fam_patologicosController@create');//---------------->>>>>>>>>>>>>>>>>>> DECIMA PRIMERA
$router->get('createantecedentes_fam_patologicosMostrar','Antecedentes_fam_patologicosController@mostrar');
$router->get('createbuscarporidantecendentes','Antecedentes_fam_patologicosController@buscarporidpatologicos');
$router->get('createbuscarpoidconsulta','Antecedentes_fam_patologicosController@buscarporidconsulta');
$router->get('eliminarAntecedentesFam','Antecedentes_fam_patologicosController@eliminarAntecedentesFam');
$router->post('actualizardecimaprimera','Antecedentes_fam_patologicosController@actualizardecima');



$router->post('createantecedentes_gineco_obstetricos','Antecedentes_gineco_obstetricosController@create');//-------------->>>>>>>>>>>>>>>>>>>>>>DECIM SEGUNDA
$router->get('createmostrarginecoObstetrico','Antecedentes_gineco_obstetricosController@mostrarantecedentes_gineco_obstetricos');
$router->get('buscarporId_Gineco_Obstetrico','Antecedentes_gineco_obstetricosController@buscarporIdGinecoObstetrico');
$router->get('buscarpornumeroexpediente','Antecedentes_gineco_obstetricosController@buscarponumeroexpediente');
$router->post('actualizarDecimePrimera','Antecedentes_gineco_obstetricosController@actualizarDecimePrimera');
$router->get('eliminarDecimaPrimera','Antecedentes_gineco_obstetricosController@eliminarDecimaPrimera');



$router->post('createAntecedentes_personales_nopatologicos','Antecedentes_personales_nopatologicosController@create');//----------->>>>>>>> DECIMA TERCERA
$router->get('mostrarAntecedentes_personales_nopatologicos','Antecedentes_personales_nopatologicosController@mostrarAntecedentes_personales_nopatologicos');
$router->get('buscarAntecedentes_personales_nopatologicos','Antecedentes_personales_nopatologicosController@buscarporIdnopatologicas');
$router->get('buscarnumero_expediente','Antecedentes_personales_nopatologicosController@buscarpornumeroexpediente');
$router->post('ActualizarDecimaTercera','Antecedentes_personales_nopatologicosController@ActualizarDecimaTercera');
$router->get('eliminarDecimatercera','Antecedentes_personales_nopatologicosController@eliminarDecimatercera');



$router->post('createAntecedentes_personales_patologicos','Antecedentes_personales_patologicosController@create');//--------------> DECIMA CUARTA
$router->get('mostrarAntecedentes_personales_patologicos','Antecedentes_personales_patologicosController@mostrarAntecedentes_personales_patologicos');
$router->get('createbuscarporIdpatologicas','Antecedentes_personales_patologicosController@buscarporIdpatologicas');
$router->get('createbuscarporE_Infecto_Contagiosas','Antecedentes_personales_patologicosController@buscarporE_Infecto_Contagiosas');
$router->post('ActualizarDecimaCuarta','Antecedentes_personales_patologicosController@ActualizarDecimaCuarta');
$router->get('EliminarDecimaCuarta','Antecedentes_personales_patologicosController@EliminarDecimaCuarta');




$router->post('createresultados','ResultadosController@create');//---------------------->>>>>>>>>>>DECIMA QUINTA
$router->get('mostrarResultados','ResultadosController@mostrarResultados');
$router->get('buscarporId_Resultados2','ResultadosController@buscarporId_Resultados2');
$router->get('buscarNumero_Expedientereslutados','ResultadosController@buscarNumero_Expedientereslutados');
$router->post('actualizardecimaquinta','ResultadosController@actualizardecimaquinta');
$router->get('eliminardecimaquinta','ResultadosController@eliminardecimaquinta');

