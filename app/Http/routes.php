<?php

	Route::get('xxx',function(){


 /*$firstname='';
	Maatwebsite\Excel\Facades\Excel::load('public/xls/sql2.xlsx')->byConfig('excel::import.sheets', function($sheet) {

    // The firstname getter will correspond with a cell coordinate set inside the config
    $firstname = $sheet->firstname;



	return $firstname;
});
*/
	Maatwebsite\Excel\Facades\Excel::batch('public/xls/sql2.xlsx', function($rows, $file) {

    // Explain the reader how it should interpret each row,
    // for every file inside the batch
    $rows->each(function($row) {

        // Example: dump the firstname
        dd($row->firstname);

    });

});


});

Route::get('contra/{contra}',function($contra){

	return bcrypt($contra);
});

Route::get('todos',function(){
$users=CNKTCOTIZA\User::all();
foreach ($users as $user) {
	return $user->with('direccion.contacto')->get();
}

});
Route::auth();




Route::group(['middleware'=>'auth'],function(){
Route::get('/', function () {
    return redirect('home');
});



});

Route::get('/home', 'HomeController@index');


Route::group(['prefix'=>'cotiza'],function(){

	Route::get('/','CotizadorController@inicio');

	Route::get('/cotizacion','CotizadorController@crear');



}); 
Route::group(['prefix'=>'admin' ,'middleware'=>'admin'],function(){

	Route::get('/','AdminController@inicio');

	Route::resource('user/UserController', 'CapitalHumanoController');
	

	Route::group(['prefix'=>'user'],function(){

			Route::get('crear','CapitalHumanoController@ViewCrear');
			Route::get('modificar','CapitalHumanoController@ViewModificar');
			Route::get('eliminar','CapitalHumanoController@ViewEliminar');
			Route::get('buscar','CapitalHumanoController@busquedaUser');
			Route::get('WizardModificar','CapitalHumanoController@WizardModificar');
			

	});
	//Route::get('user/crear','CapitalHumanoController@ViewCrear');

	Route::resource('clientes/EmpresaController', 'EmpresaController');
	Route::group(['prefix'=>'clientes'],function(){


			Route::get('crear','EmpresaController@ViewCrear');
			Route::get('modificar','EmpresaController@ViewModificar');
			Route::get('eliminar','EmpresaController@ViewEliminar');
			Route::get('buscar','EmpresaController@busquedaUser');
			Route::get('WizardModificar','EmpresaController@WizardModificar');
	});

});