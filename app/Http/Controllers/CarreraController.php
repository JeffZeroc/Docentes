<?php

namespace App\Http\Controllers;

use App\Models\Carrera;
use App\Models\Facultade;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

/**
 * Class CarreraController
 * @package App\Http\Controllers
 */
class CarreraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $carreras = Carrera::paginate();
        $carreras = Carrera::all();
        return view('carrera.index', compact('carreras'));
            // ->with('i', (request()->input('page', 1) - 1) * $carreras->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $carrera = new Carrera();
        $facultades = Facultade::get();

        
        return view('carrera.create', compact('carrera','facultades'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        request()->validate(Carrera::$rules);

        $Carreras = new Carrera();
        $Carreras->facultad_id = $request->facultad_id;
        $Carreras->nombre = $request->nombre;
        $Carreras->codigo = $request->codigo;
        $Carreras->duracion = $request->duracion;
        $Carreras->estado = $request->estado;

        $Carreras->save();

        
        // $carrera = Carrera::create($request->all());

        return redirect()->route('carreras.index')
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
        $carrera = Carrera::find($id);

        return view('carrera.show', compact('carrera'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $carrera = Carrera::find($id);
        $facultades = Facultade::get();
       

        return view('carrera.edit', compact('carrera','facultades'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Carrera $carrera
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Carrera $carrera)
    {
        $this->validate($request, [
            'facultad_id' => 'required',
            'codigo' => [
                'required',
                Rule::unique('carreras')->ignore($carrera->id),
                'max:15'
            ],
            'nombre' => [
                'required',
                Rule::unique('carreras')->ignore($carrera->id),
                'max:100',
            ],
            'duracion' => 'required|numeric|max:11',
            'estado' => 'required',
        ]); 

        $carreras = Carrera::find($carrera->id);
        $carreras->facultad_id = $request->facultad_id;
        $carreras->nombre = $request->nombre;
        $carreras->codigo = $request->codigo;
        $carreras->duracion = $request->duracion;
        $carreras->estado = $request->estado;
        $carreras->save();

        return redirect()->route('carreras.index')
            ->with('message', 'Registro actualizado correctamente.');
        
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $carrera = Carrera::find($id);
        try {
            $carrera->delete();
            return redirect()->route('carreras.index')
            ->with('message', 'Registro eliminado correctamente');
        } catch (\Throwable $th) {
            return redirect()->route('carreras.index')
            ->with('danger', 'Registro relacionado, imposible de eliminar');
        }
    }
}
