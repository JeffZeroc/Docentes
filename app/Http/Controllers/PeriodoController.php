<?php

namespace App\Http\Controllers;

use App\Models\Periodo;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

/**
 * Class PeriodoController
 * @package App\Http\Controllers
 */
class PeriodoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $periodos = Periodo::paginate();

        return view('periodo.index', compact('periodos'))
            ->with('i', (request()->input('page', 1) - 1) * $periodos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $periodo = new Periodo();
        return view('periodo.create', compact('periodo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        request()->validate(Periodo::$rules);
        $periodo = Periodo::create($request->all());

        return redirect()->route('periodos.index')
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
        $periodo = Periodo::find($id);

        return view('periodo.show', compact('periodo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $periodo = Periodo::find($id);

        return view('periodo.edit', compact('periodo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Periodo $periodo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Periodo $periodo)
    {
        $this->validate($request, [
            'nombre' => [
                'required',
                Rule::unique('periodos')->ignore($periodo->id),
                'max:25',
            ],
            'codigo' => [
                'required',
                Rule::unique('periodos')->ignore($periodo->id),
                'max:25',
            ],
            'inicio_periodo' => 'required',
            'fin_periodo' => 'required',
        ]); 

        $periodos = Periodo::find($periodo->id);

        $periodos->nombre = $request->nombre;
        $periodos->codigo = $request->codigo;
        $periodos->inicio_periodo = $request->inicio_periodo;
        $periodos->fin_periodo = $request->fin_periodo;

        $periodos->save();

        // request()->validate(Periodo::$rules);

        // $periodo->update($request->all());

        return redirect()->route('periodos.index')
        ->with('message', 'Registro actualizado correctamente.');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $periodo = Periodo::find($id);
        try {
            $periodo->delete();
            return redirect()->route('periodos.index')
            ->with('message', 'Registro eliminado correctamente');
        } catch (\Throwable $th) {
            return redirect()->route('periodos.index')
            ->with('danger', 'Registro relacionado, imposible de eliminar');
        }
    }
}
