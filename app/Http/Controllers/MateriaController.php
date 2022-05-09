<?php

namespace App\Http\Controllers;

use App\Models\Carrera;
use App\Models\Materia;

use Illuminate\Http\Request;

use Illuminate\Validation\Rule;

/**
 * Class MateriaController
 * @package App\Http\Controllers
 */
class MateriaController extends Controller
{
    
    public $valor=0;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $materias = Materia::paginate();

        return view('materia.index', compact('materias'))
            ->with('i', (request()->input('page', 1) - 1) * $materias->perPage());
    }

    public function getCategoria(Request $request, $id){

        if($request->ajax()){

            $categorias = Carrera::find($id);

            return response()->json($categorias);

        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $materia = new Materia();
        //$carreras = Carrera::get();
        $carreras = Carrera::get();
        return view('materia.create', compact('materia','carreras'));
        //return $carrera;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        request()->validate(Materia::$rules);

        $materia = Materia::create($request->all());
        
        
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
        $materia = Materia::find($id);
        
        return view('materia.show', compact('materia'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $materia = Materia::find($id);
        $carreras = Carrera::get();
        return view('materia.edit', compact('materia','carreras'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Materia $materia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Materia $materia)
    {
        $this->validate($request, [
            'carrera_id' => 'required',
            'nombre' => 'required|max:255',
            'codigo' => [
                'required',
                Rule::unique('materias')->ignore($materia->id),
                'string',
                'max:15',
            ],
            'hora_a' => 'required|numeric',
            'hora_p' => 'required|numeric',
            'hora_d' => 'required|numeric',
        ]);

        $materias = Materia::find($materia->id);
        $materias->carrera_id = $request->carrera_id;
        $materias->nombre = $request->nombre;
        $materias->codigo = $request->codigo;
        $materias->hora_a = $request->hora_a;
        $materias->hora_p = $request->hora_p;
        $materias->hora_d = $request->hora_d;

        $materias->save();

        // request()->validate(Materia::$rules);

        // $materia->update($request->all());

        return redirect()->route('materias.index')
        ->with('message', 'Registro actualizado correctamente.');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $materia = Materia::find($id);

        try {
            $materia->delete();
            return redirect()->route('materias.index')
            ->with('message', 'Registro eliminado correctamente');
        } catch (\Throwable $th) {
            return redirect()->route('materias.index')
            ->with('danger', 'Registro relacionado, imposible de eliminar');
        }
    }
}
