<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class SectorController extends Controller
{
    public function ViewInsert()
    {
        return view('Sector/insert');
    }

    public function InsertSector(Request $sec)
    {
        $sector = new App\Sector;
        $sector->NombreSector = $sec->NombreSector;
        $sector->NombreNuevoSector = $sec->NombreNuevoSector;
        $sector->save();

        return redirect('Sector/view');
    }
    
    public function ViewSector()
    {
        $sector = App\Sector::all();
        return view('Sector/view', compact('sector'));
    }

    public function DeleteSector($id)
    {
        $sec = App\Sector::FindOrFail($id);
        $sec->delete();

        return redirect('Sector/view');
    }

    public function DatosUpdate($id)
    {
        $sec = App\Sector::FindOrFail($id);
        return view('Sector/update', compact('sec'));
    }

    public function UpdateSector(Request $sec)
    {
        $sector = App\Sector::FindOrFail($sec->id);
        $sector->NombreSector = $sec->NombreSector;
        $sector->NombreNuevoSector = $sec->NombreNuevoSector;
        $sector->update();

        return redirect('Sector/view');

    }
} 
