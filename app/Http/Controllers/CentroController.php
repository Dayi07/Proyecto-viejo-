<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use Illuminate\Support\Facades\DB;

class CentroController extends Controller
{
    public function ViewInsert()
    {
        $reg = App\Regional::all();
        return view('Centro/insert', compact('reg'));
    }

    public function InsertCentro(Request $cen)
    {
        $centro = new App\Centro();
        $centro->NombreCentro = $cen->NombreCentro;
        $centro->id_regional = $cen->id_regional;
        $centro->save();

        return redirect('Centro/view');
    }

    public function ViewCentro()
    {
        $cen = DB::table('centros')
        ->join('regionals', 'regionals.id', '=', 'centros.id_regional')
        ->select('centros.*', 'regionals.NombreRegional')
        ->get();

        return view('Centro/view', compact('cen'));
    }

    public function DeleteCentro($id)
    {
       $centro = App\Centro::FindOrFail($id);
       $centro->delete();

       return redirect('Centro/view');
    }

    public function ViewUpdate($id)
    {
        $cen = App\Centro::FindOrFail($id);
        $reg = App\Regional::all();
        return view('Centro/update', compact('cen', 'reg'));
    }

    public function UpdateCentro(Request $cen)
    {
        $centro = App\Centro::FindOrFail($cen->id);
        $centro->NombreCentro = $cen->NombreCentro;
        $centro->id_regional = $cen->id_regional;
        $centro->update();

        return redirect('Centro/view');
    }
} 
