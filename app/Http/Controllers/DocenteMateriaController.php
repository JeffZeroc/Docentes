<?php

namespace App\Http\Controllers;

use App\Models\Carrera;
use App\Models\Docente;
use App\Models\DocenteMateria;
use App\Models\Materia;
use App\Models\Periodo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

/**
 * Class DocenteMateriaController
 * @package App\Http\Controllers
 */
class DocenteMateriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $docenteMaterias = DocenteMateria::get();
        $i = 0;

        // return $docenteMaterias;
        return view('docente-materia.index', compact('docenteMaterias', 'i'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $docenteMateria = new DocenteMateria();
        $p = Periodo::where('estado', '1')->first();
        $docentes = DB::table('docentes')->where('estado', 'Activo')->where('periodo','!=',$p->id)->get();
        $periodos = Periodo::get();
        $materias = Materia::get();
        $carreras = Carrera::get();
        // return $docentes;
        return view('docente-materia.create', compact('docenteMateria', 'docentes', 'periodos', 'materias', 'carreras'));
    }


    public function materias($id, $n)
    {
        return Materia::where('carrera_id', $id)
            ->where('nivel', $n)
            ->get();
    }
    public function nivel($id)
    {
        return Carrera::where('id', $id)->get();
    }





    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            request()->validate(DocenteMateria::$rules);
            try {
                $this->validate($request, [
                    'codigo' => 'unique:docente_materias',
                ]);
                try {

                    $docenteMateria = new DocenteMateria;
                    $docenteMateria->docente_id = $request->docente_id;
                    $docenteMateria->periodo_id = $request->periodo_id;
                    $docenteMateria->materia_id = $request->materia_id;
                    $docenteMateria->paralelo = $request->paralelo;
                    $docenteMateria->codigo = $request->codigo;
                    $docenteMateria->save();

                    $docente = Docente::find($request->docente_id);
                    $docente->periodo = $request->periodo_id;
                    $docente->save();
                    return response()->json(['success' => '4']);
                } catch (\Throwable $th) {
                    return response()->json(['success' => '3']);
                }
            } catch (\Throwable $th) {
                return response()->json(['success' => '2']);
            }
        } catch (\Throwable $th) {
            return response()->json(['success' => '1']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $docenteMateria = DocenteMateria::find($id);

        return view('docente-materia.show', compact('docenteMateria'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $docenteMateria = DocenteMateria::find($id);
        $docentes = DB::table('docentes')->where('id', $docenteMateria->docente_id)->get();
        $periodos = Periodo::get();
        $materias = Materia::get();
        $carreras = Carrera::get();
        return view('docente-materia.create', compact('docenteMateria', 'docentes', 'periodos', 'materias', 'carreras'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  DocenteMateria $docenteMateria
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        try {
            request()->validate(DocenteMateria::$rules);
            try {
                $this->validate($request, [
                    'codigo' => 'unique:docente_materias',
                ]);
                try {
                    $docenteMateria = DocenteMateria::find($request->id);
                    $docenteMateria->docente_id = $request->docente_id;
                    $docenteMateria->periodo_id = $request->periodo_id;
                    $docenteMateria->materia_id = $request->materia_id;
                    $docenteMateria->paralelo = $request->paralelo;
                    $docenteMateria->codigo = $request->codigo;
                    $docenteMateria->save();

                    return response()->json(['success' => '4']);
                } catch (\Throwable $th) {
                    return response()->json(['success' => '3']);
                }
            } catch (\Throwable $th) {
                return response()->json(['success' => '2']);
            }
        } catch (\Throwable $th) {
            return response()->json(['success' => '1']);
        }
        return redirect()->route('docente-materias.index')
            ->with('message', 'Registro actualizado correctamente.');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $docenteMateria = DocenteMateria::find($id);

        try {
            $d = Docente::find($docenteMateria->docente_id);
            $d->periodo = '0';
            $d->save();
            $docenteMateria->delete();
            return redirect()->route('docente-materias.index')
                ->with('message', 'Registro eliminado correctamente');
        } catch (\Throwable $th) {
            return redirect()->route('docente-materias.index')
                ->with('danger', 'Registro imposible de eliminar');
        }
    }
}
