<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use Illuminate\Support\Facades\DB;

class ConvenioController extends Controller
{
    public function ViewInsert()
    {
        $emp = App\Empresa::all();
        $sec = App\Sector::all();

        return view('Convenio/insert', compact('sec', 'emp'));
    }

    public function InsertConvenio(Request $con)
    {
        $convenio = new App\Convenio();
        $convenio->NombreConvenio = $con->NombreConvenio;
        $convenio->AmpliacionCovertura = $con->AmpliacionCovertura;
        $convenio->id_sector = $con->id_sector;
        $convenio->id_empresa = $con->id_empresa;
        $convenio->save();

        return redirect('Convenio/view');
    }

    public function ViewConvenio()
    {
        $info = DB::table('convenios')
        ->join('empresas', 'empresas.id', '=', 'convenios.id_empresa')
        ->join('sectors', 'sectors.id', '=', 'convenios.id_sector')
        ->select('convenios.*', 'empresas.NombreEmpresa', 'sectors.NombreSector')
        ->get();
        return view('Convenio/view', compact('info'));
    }

    public function DeleteConvenio($id)
    {
        $con = App\Convenio::FindOrFail($id);
        $con->delete();

        return redirect('Convenio/view');
    }

    public function DatosUpdate($id)
    {
        $emp = App\Empresa::all();
        $sec = App\Sector::all();
        $con = App\Convenio::FindOrFail($id);

        return view('Convenio/update', compact('sec', 'emp', 'con'));
    }

    public function UpdateConvenio(Request $con)
    {
        $convenio = App\Convenio::FindOrFail($con->id);
        $convenio->NombreConvenio = $con->NombreConvenio;
        $convenio->AmpliacionCovertura = $con->AmpliacionCovertura;
        $convenio->id_sector = $con->id_sector;
        $convenio->id_empresa = $con->id_empresa;
        $convenio->update();

        return redirect('Convenio/view');
    }
}
