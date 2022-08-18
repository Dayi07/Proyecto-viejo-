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

#region jornada
Route::get('Jornada/insert', 'JornadaController@ViewInsert')->name('ViewInsertJornada');
Route::post('Jornada/insert', 'JornadaController@InsertJornada')->name('InsertJornada');
Route::get('Jornada/view', 'JornadaController@ViewJornada')->name('ViewJornada');
Route::get('Jornada/delete/{id}', 'JornadaController@DeleteJornada')->name('DeleteJornada');
Route::get('Jornada/update/{id}', 'JornadaController@DatosUpdate')->name('ViewUpdateJornada');
Route::post('Jornada/update', 'JornadaController@UpdateJornada')->name('UpdateJornada');
#endregion
 
#region sector
Route::get('Sector/insert', 'SectorController@ViewInsert')->name('ViewInsertSector');
Route::post('Sector/insert', 'SectorController@InsertSector')->name('InsertSector');
Route::get('Sector/view', 'SectorController@ViewSector')->name('ViewSector');
Route::get('Sector/delete/{id}', 'SectorController@DeleteSector')->name('DeleteSector');
Route::get('Sector/update/{id}', 'SectorController@DatosUpdate')->name('DatosUpdateSector');
Route::post('Sector/update', 'SectorController@UpdateSector')->name('SectorUpdateBD');
#endregion 

#region curso
Route::get('Curso/insert', 'CursoController@ViewInsert')->name('ViewInsertCurso');
Route::post('Curso/insert', 'CursoController@InsertCurso')->name('InsertCurso');
Route::get('Curso/view', 'CursoController@ViewCurso')->name('ViweCurso');
Route::get('Curso/delete/{id}', 'CursoController@DeleteCurso')->name('DeleteCurso');
Route::get('Curso/update/{id}', 'CursoController@DatosUpdate')->name('ViewUpdateCurso');
Route::post('Curso/update', 'CursoController@UpdateCurso')->name('UpdateCurso');

#endregion

#region empresa
Route::get('Empresa/insert', 'EmpresaController@ViewInsert')->name('ViewInsertEmpresa');
Route::post('Empresa/insert', 'EmpresaController@InsertEmpresa')->name('InsertEmpresa');
Route::get('Empresa/view', 'EmpresaController@ViewEmpresa')->name('ViewEmpresa');
Route::get('Empresa/delete/{id}', 'EmpresaController@DeleteEmpresa')->name('DeleteEmpresa');
Route::get('Empresa/update/{id}', 'EmpresaController@DatosUpdate')->name('ViewUpdateEmpresa');
Route::post('Empresa/update', 'EmpresaController@UpdateEmpresa')->name('UpdateEmpresas');
#endregion

#region convenio
Route::get('Convenio/insert', 'ConvenioController@ViewInsert')->name('ViewInsertConvenio');
Route::post('Convenio/insert', 'ConvenioController@InsertConvenio')->name('InsertConvenio');
Route::get('Convenio/view', 'ConvenioController@ViewConvenio')->name('ViewConvenio');
Route::get('Convenio/delete/{id}', 'ConvenioController@Deleteconvenio')->name('DeleteConvenio');
Route::get('Convenio/update/{id}', 'ConvenioController@DatosUpdate')->name('ViewUpdateConvenio');
Route::post('Convenio/update', 'ConvenioController@UpdateConvenio')->name('UpdateConvenio');
#endregion

#region programa de formacion
Route::get('ProgramaFormacion/insert', 'ProgramaFormController@ViewInsert')->name('ViewInsertPrograma');
Route::post('ProgramaFormacion/insert', 'ProgramaFormController@InsertPrograma')->name('InsertProgramaFor');
Route::get('ProgramaFormacion/view', 'ProgramaFormController@ViewPrograma')->name('ViewPrograma');
Route::get('ProgramaFormacion/delete/{id}', 'ProgramaFormController@DeletePrograma')->name('DeleteProgramaForm');
Route::get('ProgramaFormacion/update/{id}', 'ProgramaFormController@DatosUpdate')->name('ViewUpdateProgramaForm');
Route::post('ProgramaFormacion/update', 'ProgramaFormController@UpdatePrograma')->name('UpdateProgramaForm');
Route::get('ProgramaFormacion/updateFile/{id}', 'ProgramaFormController@ViewUpdateFile')->name('ViewUpdateFile');
Route::post('ProgramaFormacion/updateFile', 'ProgramaFormController@UpdateFile')->name('UpdateFilePrograma');

#endregion
 
