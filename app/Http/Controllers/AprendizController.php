<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use Illuminate\Support\Facades\DB;

class AprendizController extends Controller
{
    public function ViewInsert()
    {
        $ficha = App\Ficha::all();

        return view('Aprendiz/insert', compact('ficha'));
    }

    public function InsertAprendiz(Request $apre)
    {
        $aprendiz = new App\Aprendiz();
        $aprendiz->NombreAprendiz = $apre->NombreAprendiz;
        $aprendiz->TipoDocumento = $apre->TipoDocumento;
        $aprendiz->NumeroDocumento = $apre->NumeroDocumento;
        $aprendiz->CorreoAprendiz = $apre->CorreoAprendiz;
        $aprendiz->GeneroAprendiz = $apre->GeneroAprendiz;
        $aprendiz->EstadoAprendiz = $apre->EstadoAprendiz;
        $aprendiz->TelefonoAprendiz = $apre->TelefonoAprendiz;
        $aprendiz->id_ficha = $apre->id_ficha;
        $aprendiz->save();

        return redirect('Aprendiz/view');
    }

    public function ViewAprendiz()
    {
        $info = DB::table('aprendizs')
        ->join('fichas', 'fichas.id', '=', 'aprendizs.id_ficha')
        ->select('aprendizs.*', 'fichas.IdUnicoFicha')
        ->get();

        return view('Aprendiz/view', compact('info'));
    }

    public function DeleteAprendiz($id)
    {
        $apr = App\Aprendiz::FindOrFail($id);
        $apr->delete();

        return redirect('Aprendiz/view');
    }

    public function ViewUpdate($id)
    {
        $apr = App\Aprendiz::FindOrFail($id);
        $ficha = App\Ficha::all();

        return view('Aprendiz/update', compact('apr', 'ficha'));
    }

    public function UpdateAprendiz(Request $apre)
    {
        $aprendiz = App\Aprendiz::FindOrFail($apre->id);
        $aprendiz->NombreAprendiz = $apre->NombreAprendiz;
        $aprendiz->TipoDocumento = $apre->TipoDocumento;
        $aprendiz->NumeroDocumento = $apre->NumeroDocumento;
        $aprendiz->CorreoAprendiz = $apre->CorreoAprendiz;
        $aprendiz->GeneroAprendiz = $apre->GeneroAprendiz;
        $aprendiz->EstadoAprendiz = $apre->EstadoAprendiz;
        $aprendiz->TelefonoAprendiz = $apre->TelefonoAprendiz;
        $aprendiz->id_ficha = $apre->id_ficha;
        $aprendiz->update();

        return redirect('Aprendiz/view');

    }
}
 