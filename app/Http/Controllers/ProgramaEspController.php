<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use App;

class ProgramaEspController extends Controller
{
    public function ViewInsert()
    {
        $sec = App\Sector::all();

        return view('ProgramaEspecial/insert', compact('sec'));
    }

    public function InsertEspecial(Request $esp)
    {
        $especial = new App\ProgramaEspecial();  
        $ruta = Storage::disk('public')->put('ProgramaFormacion', $esp->file('URL'));
        $especial->NombreProgEspecial = $esp->NombreProgEspecial;
        $especial->ModalidadProgEspecial = $esp->ModalidadProgEspecial;
        $especial->id_sector = $esp->id_sector;
        $especial->URL = $ruta;
        $especial->save();

        return redirect('ProgramaEspecial/view');
    }

    public function ViewEspecial()
    {
        $esp = DB::table('programa_especials')
        ->join('sectors', 'sectors.id', '=', 'programa_especials.id_sector')
        ->select('programa_especials.*', 'sectors.NombreSector')
        ->get();

        return view('ProgramaEspecial/view', compact('esp'));
    }

    public function DeleteEspecial($id)
    {
        $especial = App\ProgramaEspecial::FindOrFail($id);
        $especial->delete();

        return redirect('ProgramaEspecial/view');
    }

    public function ViewUpdate($id)
    {
        $esp = App\ProgramaEspecial::FindOrFail($id);
        $sec = App\Sector::all();

        return view('ProgramaEspecial/update', compact('esp', 'sec'));
    }

    public function UpdateEspecial(Request $esp)
    {
        $especial = App\ProgramaEspecial::FindOrFail($esp->id);
        $especial->NombreProgEspecial = $esp->NombreProgEspecial;
        $especial->ModalidadProgEspecial = $esp->ModalidadProgEspecial;
        $especial->id_sector = $esp->id_sector;
        $especial->URL = $esp->URL;
        $especial->update();

        return redirect('ProgramaEspecial/view');
    }
}
