<?php

namespace App\Http\Controllers;

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
        $docenteMaterias = DocenteMateria::paginate();

        return view('docente-materia.index', compact('docenteMaterias'))
            ->with('i', (request()->input('page', 1) - 1) * $docenteMaterias->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $docenteMateria = new DocenteMateria();
        $docentes = DB::table('docentes')->where('estado', 'Activo')->get();
        $periodos = Periodo::get();
        $materias = Materia::get();
        // $materias = DB::select('select materias.id,CONCAT(materias.nombre,", ",carreras.nombre) as nombre from materias,carreras where (materias.carrera_id = carreras.id) AND (carreras.estado like "Activo")');
        return view('docente-materia.create', compact('docenteMateria','docentes','periodos','materias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(DocenteMateria::$rules);

        $docenteMateria = DocenteMateria::create($request->all());

        return back()
        ->with('message', 'Registro creado correctamente');
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
        $docentes = Docente::get();
        $periodos = Periodo::get();
        
        $materias = DB::select('select materias.id,CONCAT(materias.nombre,", ",carreras.nombre) as nombre from materias,carreras where materias.carrera_id = carreras.id');

        return view('docente-materia.edit', compact('docenteMateria','docentes','periodos','materias'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  DocenteMateria $docenteMateria
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DocenteMateria $docenteMateria)
    {
        request()->validate(DocenteMateria::$rules);

        $docenteMateria->update($request->all());

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
        $docenteMateria = DocenteMateria::find($id)->delete();

        

            return redirect()->route('docente-materias.index')
            ->with('message', 'Registro eliminado correctamente');
            
            
        
    }
}
