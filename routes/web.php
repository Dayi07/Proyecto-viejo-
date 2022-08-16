<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Http\Controllers\MunicipioController;
use App\Http\Controllers\PaisController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome'); 
});

#region pais
Route::get('Pais/insert', 'PaisController@ViewInsert')->name('ViewInsert');
Route::post('Pais/insert', 'PaisController@Insert')->name('Insert');
Route::get('Pais/view', 'PaisController@View')->name('ViewPais');
Route::get('Pais/delete/{id}', 'PaisController@DeletePais');
Route::get('Pais/update/{id}', 'PaisController@DatosUpdate')->name('ViewUpdate');
Route::post('Pais/update', 'PaisController@Update')->name('UpdatePais');
#endregion

#region municipio
Route::get('Municipio/insert', 'MunicipioController@ViewInsert')->name('ViewInsertMunicipio');
Route::post('Municipio/insert', 'MunicipioController@InsertMun')->name('InsertMunicipio');
Route::get('Municipio/view', 'MunicipioController@ViewMun')->name('ViewMunicipio');
Route::get('Municipio/delete/{id}', 'MunicipioController@DeleteMun');
Route::get('Municipio/update/{id}', 'MunicipioController@DatosUpdate')->name('DatosUpdateMun');
Route::post('Municipio/update', 'MunicipioController@Update')->name('Update');
#endregion

#region departamento
Route::get('Departamento/insert', 'DepartamentoController@ViewInsert')->name('ViewInsertDepartamento');
Route::get('Departamento/view', 'DepartamentoController@ViewDepartamento')->name('ViewDepartamento');
Route::post('Departamento/insert', 'DepartamentoController@Insert')->name('InsertDepartamento');
Route::get('Departamento/delete/{id}', 'DepartamentoController@DeleteDep');
Route::get('Departamento/update/{id}', 'DepartamentoController@DatosUpdate')->name('DatosUpdate');
Route::post('Departamento/update', 'DepartamentoController@UpdateDep')->name('UpdateDep');
#endregion

