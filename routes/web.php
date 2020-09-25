<?php

use Illuminate\Http\Request;

							/* MENU INICIO: INVERSIONISTA - EMPRESA   */
Route::get('/empresa', 'Inicio\InicioController@empresa')->name('empresa');
Route::get('/inversionista', 'Inicio\InicioController@inversionista')->name('inversionista');
Route::get('/', 'Inicio\InicioController@index')->name('asistenciahoy');
		
										/* LOGIN Y REGISTRO */	

Route::get('home', 'HomeController@index')->name('home');
Route::get('pru', 'Inicio\InicioController@pruebita2')->name('pru');
Route::get('pru2', 'Inicio\InicioController@pruebita3')->name('pru2');


 //LOGIN
Route::get('login','Auth\LoginController@showLoginForm')->name('login');

Route::post('login','Auth\LoginController@authenticate')->name('logii');

//LOGOUT
Route::post('logout','Auth\LoginController@logout')->name('logout');

 


 /*Auth::routes();*/
 

Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');

Route::get('/inversionista/login', function () {
    return view('auth/inversionista/login');
});

Route::get('/empresa/login', function () {
    return view('auth/empresa/login');
});

Route::get('/admin', function () {
    return view('auth/admin/login');
});

//Route::get('/auth-inversionista-register','AuthenticationController@registerinversionistaPage');
//Route::get('/','REGISTER');
Route::get('/inversionista/registro', function () {
    return view('auth/inversionista/register');
});

Route::get('/empresa/registro', function () {
    return view('auth/empresa/register');
});	
	
									/* VISTAS INICIAL DEL LOGIN */
Route::group(['prefix' => 'empresa', 'as' => 'empresa.', 'middleware' => ['empresa']], function () {

	Route::get('perfil', 'Empresa\EmpresaController@perfil')->name('perfil');	
	Route::get('/proyectos', 'Empresa\EmpresaController@index')->name('proyectos');	
	Route::get('/proyectos/solicitud', 'Empresa\EmpresaController@solicitud')->name('solicitar');	
	Route::post('/proyectos/solicitud', 'Empresa\EmpresaController@store')->name('proyecto.soli');

	Route::get('/proyectos/{id}', 'Empresa\EmpresaController@show')->name('proyecto.show');
	Route::get('/proyectos/{id}/editar', 'Empresa\EmpresaController@edit')->name('proyecto.edit');	

	Route::put('/proyectos/{id}', 'Empresa\EmpresaController@update')->name('proyecto.update');	
	Route::delete('/proyectos/{id}', 'Empresa\EmpresaController@destroy')->name('proyecto.destroy');

	Route::get('/proyectos/{id}/image', 'Empresa\EmpresaController@image')->name('proyecto.image');	

}	
);

