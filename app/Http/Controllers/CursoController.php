<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use Illuminate\Support\Facades\DB;

class CursoController extends Controller
{
    public function ViewInsert()
    {
        $mun = App\MunicipioCurso::all();
        $sec = App\Sector::all();
        $jor = App\Jornada::all();

        return view('Curso/insert', compact('mun', 'sec', 'jor'));
    }

    public function InsertCurso(Request $cur)
    {
        $curso = new App\Curso();
        $curso->NumeroCursos = $cur->NumeroCursos ;
        $curso->NombreCurso = $cur->NombreCurso ;
        $curso->EstadoCurso = $cur->EstadoCurso ;
        $curso->TipoCurso = $cur->TipoCurso ;
        $curso->id_municipio = $cur->id_municipio ;
        $curso->id_sector = $cur->id_sector ;
        $curso->id_jornada = $cur->id_jornada ;
        $curso->save();

        return redirect('Curso/view');
    }

    public function ViewCurso()
    {
        $info = DB::table('cursos')
        ->join('municipio_cursos', 'municipio_cursos.id', '=', 'cursos.id_municipio')
        ->join('sectors', 'sectors.id', '=', 'cursos.id_sector')
        ->join('jornadas', 'jornadas.id', '=', 'cursos.id_jornada')
        ->select('cursos.*', 'municipio_cursos.NombreMunicipioCurso', 'sectors.NombreSector', 'jornadas.NombreJornada')
        ->get();

        return view('Curso/view', compact('info'));
    }

    public function DeleteCurso($id)
    {
        $curso = App\Curso::FindOrFail($id);
        $curso->delete();

        return redirect('Curso/view');
    } 

    public function DatosUpdate( Request $cur)
    {
        $mun = App\MunicipioCurso::all();
        $sec = App\Sector::all();
        $jor = App\Jornada::all();

        $curso = App\Curso::FindOrFail($cur->id);
        return view('Curso/update', compact('curso', 'mun', 'sec', 'jor'));
    }

    public function UpdateCurso(Request $cur)
    {
        $curso = App\Curso::FindOrFail($cur->id);
        $curso->NumeroCursos = $cur->NumeroCursos ;
        $curso->NombreCurso = $cur->NombreCurso ;
        $curso->EstadoCurso = $cur->EstadoCurso ;
        $curso->TipoCurso = $cur->TipoCurso ;
        $curso->id_municipio = $cur->id_municipio ;
        $curso->id_sector = $cur->id_sector ;
        $curso->id_jornada = $cur->id_jornada ;
        $curso->update();

        return redirect('Curso/view');

    }
}
