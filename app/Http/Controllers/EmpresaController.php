<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class EmpresaController extends Controller
{
    public function ViewInsert()
    {
        return view('Empresa/insert');
    }

    public function InsertEmpresa(Request $emp)
    {
        $empresa = new App\Empresa();
        $empresa->TipoIdentificacion = $emp->TipoIdentificacion;
        $empresa->NombreEmpresa = $emp->NombreEmpresa;
        $empresa->save();

        return redirect('Empresa/view');
    }

    public function ViewEmpresa()
    {
        $emp = App\Empresa::all();
        return view('Empresa/view', compact('emp'));
    }

    public function DeleteEmpresa($id)
    {
        $empresa = App\Empresa::FindOrFail($id);
        $empresa->delete();

        return redirect('Empresa/view');
    }

    public function DatosUpdate($id)
    {
        $emp = App\Empresa::FindOrFail($id);

        return view('Empresa/update', compact('emp'));
    }

    public function UpdateEmpresa(Request $emp)
    {
        $empresa = App\Empresa::FindOrFail($emp->id);
        $empresa->TipoIdentificacion = $emp->TipoIdentificacion;
        $empresa->NombreEmpresa = $emp->NombreEmpresa;
        $empresa->update();

        return redirect('Empresa/view');
    }
}
 