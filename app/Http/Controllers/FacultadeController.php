<?php

namespace App\Http\Controllers;

use App\Models\Facultade;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

/**
 * Class FacultadeController
 * @package App\Http\Controllers
 */
class FacultadeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $facultades = Facultade::paginate();

        return view('facultade.index', compact('facultades'))
            ->with('i', (request()->input('page', 1) - 1) * $facultades->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $facultade = new Facultade();
        return view('facultade.create', compact('facultade'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Facultade::$rules);

        $facultade = Facultade::create($request->all());

        return redirect()->route('facultades.index')
            ->with('success', 'Facultade created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $facultade = Facultade::find($id);

        return view('facultade.show', compact('facultade'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $facultade = Facultade::find($id);
        
        return view('facultade.edit', compact('facultade'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Facultade $facultade
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Facultade $facultade)
    {

        $this->validate($request, [
            'nombre' => [
                'required',
                Rule::unique('facultades')->ignore($facultade->id),
                'string',
            ],
        ]); 

        $Facultades = Facultade::find($facultade->id);

        $Facultades->nombre = $request->nombre;

        $Facultades->save();


        // request()->validate(Facultade::$rules);

        // $facultade->update($request->all());

        return redirect()->route('facultades.index')
            ->with('success', 'Facultade updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $facultade = Facultade::find($id)->delete();

        return redirect()->route('facultades.index')
            ->with('success', 'Facultade deleted successfully');
    }
}
