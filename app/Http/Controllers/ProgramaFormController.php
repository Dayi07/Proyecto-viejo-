<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;


class ProgramaFormController extends Controller
{
    public function ViewInsert()
    {
        $sec = App\Sector::all();
        return view('ProgramaFormacion/insert', compact('sec'));
    }

    public function InsertPrograma(Request $prom)
    {              
        $programa = new App\ProgramaFormacion;
        $ruta = Storage::disk('public')->put('ProgramaFormacion', $prom->file('URL'));
        $programa->NombrePrograma = $prom->NombrePrograma;
        $programa->ModalidadFormacion = $prom->ModalidadFormacion;
        $programa->TipoFormacion = $prom->TipoFormacion;
        $programa->DuracionPrograma = $prom->DuracionPrograma;
        $programa->VersionPrograma = $prom->VersionPrograma;
        $programa->NivelFormacion = $prom->NivelFormacion;
        $programa->id_sector = $prom->id_sector;
        $programa->URL = $ruta;
        $programa->save(); 

        return redirect('ProgramaFormacion/view');
    }
  
    public function ViewPrograma()
    { 
        $pro = DB::table('programa_formacions')
        ->join('sectors', 'sectors.id', '=', 'programa_formacions.id_sector')
        ->select('programa_formacions.*', 'sectors.NombreSector')
        ->get();

        return view('ProgramaFormacion/view', compact('pro'));
    }

    public function DeletePrograma($id)
    {
        $pro = App\ProgramaFormacion::FindOrFail($id);
        $pro->delete();

        return redirect('ProgramaFormacion/view');
    }
    
    public function DatosUpdate($id)
    {
        $pro = App\ProgramaFormacion::FindOrFail($id);
        $sec = App\Sector::all();

        return view('ProgramaFormacion/update', compact('pro', 'sec'));
    }

    public function UpdatePrograma(Request $prom)
    {
        $programa = App\ProgramaFormacion::FindOrFail($prom->id);
        $programa->NombrePrograma = $prom->NombrePrograma;
        $programa->ModalidadFormacion = $prom->ModalidadFormacion;
        $programa->TipoFormacion = $prom->TipoFormacion;
        $programa->DuracionPrograma = $prom->DuracionPrograma;
        $programa->VersionPrograma = $prom->VersionPrograma;
        $programa->NivelFormacion = $prom->NivelFormacion;
        $programa->id_sector = $prom->id_sector;
        $programa->URL = $prom->URL;
        $programa->update();

        return redirect('ProgramaFormacion/view');
    }

    public function ViewUpdateFile($id)
    {
        $pro = App\ProgramaFormacion::FindOrFail($id);
        return view('ProgramaFormacion/updateFile', compact('pro'));

    }

    public function UpdateFile(Request $prom)
    {    
        $programa = App\ProgramaFormacion::FindOrFail($prom->id);
        $ruta = Storage::disk('public')->put('ProgramaFormacion', $prom->file('URL'));
        $programa->URL = $ruta;
        $programa->update();

        return redirect('ProgramaFormacion/view');
    }
}
