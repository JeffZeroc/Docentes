<?php

namespace App\Http\Controllers;

use App\Models\Docente;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

/**
 * Class DocenteController
 * @package App\Http\Controllers
 */
class DocenteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $docentes = Docente::paginate();

        return view('docente.index', compact('docentes'))
            ->with('i', (request()->input('page', 1) - 1) * $docentes->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $docente = new Docente();

        return view('docente.create', compact('docente'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        //porcentaje
        if ($request->discapacidad=='Si') {
            $this->validate($request, [
                'porcentaje' => 'required|numeric|max:100',
            ]); 
        }else {
            $request->porcentaje = null;
        }
        
        $this->validate($request, [
            'nombres' => 'required|string|max:50',
            'apellidos' => 'required|string|max:50',
            'cedula' => 'required|digits:10|unique:docentes',
            'celular' => 'required|digits:10|unique:docentes',
            'direccion' => 'required|max:255',
            'correo_institucional' => 'required|email:rfc,dns|max:50|unique:docentes',
            'correo_personal' => 'required|email:rfc,dns|max:50|unique:docentes',
            'sexo' => 'required|max:10',
            'etnia' => 'required|max:20',
            'titulo_3_n' => '',
            'titulo_4_n' => '',
            'doctorado' => '',
            'phd' => '',
            'discapacidad' => 'required|max:2',
            'estado' => 'required|max:15',
        ]); 

        $docentes = new Docente;
        $docentes->nombres = $request->nombres;
        $docentes->apellidos = $request->apellidos;
        $docentes->cedula = $request->cedula;
        $docentes->celular = $request->celular;
        $docentes->direccion = $request->direccion;
        $docentes->correo_institucional = $request->correo_institucional;
        $docentes->correo_personal = $request->correo_personal;
        
        $docentes->estado = $request->estado;
        $docentes->sexo = $request->sexo;
        $docentes->discapacidad = $request->discapacidad;
        $docentes->porcentaje = $request->porcentaje;
        $docentes->etnia = $request->etnia;

        //titulo 3
        if ($request->titulo_3_n=='') {
            $docentes->titulo_3_n = 'Ninguno';
        }else {
            $docentes->titulo_3_n = $request->titulo_3_n;
        }

        //titulo 4
        if ($request->titulo_4_n=='') {
            $docentes->titulo_4_n = 'Ninguno';
        }else {
            $docentes->titulo_4_n = $request->titulo_4_n;
        }
        //phd 
        if ($request->phd=='') {
            $docentes->phd = 'Ninguno';
        }else {
            $docentes->phd = $request->phd;
        }
        //doctorado
        if ($request->doctorado=='') {
            $docentes->doctorado = 'Ninguno';
        }else {
            $docentes->doctorado = $request->doctorado;
        }

        
        
        $docentes->save();


        // request()->validate(Docente::$rules);
        // $docente = Docente::create($request->all());

        return redirect()->route('docentes.index')
            ->with('success', 'Docente creado exitosamente.');
        // return $docentes;
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $docente = Docente::find($id);

        return view('docente.show', compact('docente'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $docente = Docente::find($id);
        
        return view('docente.edit', compact('docente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Docente $docente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Docente $docente)
    {
        
        //porcentaje
        if ($request->discapacidad=='Si') {
            $this->validate($request, [
                'porcentaje' => 'required|numeric|max:100',
            ]); 
        }else {
            $request->porcentaje = null;
        }
        
        $this->validate($request, [
            'nombres' => 'required|string|max:50',
            'apellidos' => 'required|string|max:50',
            'cedula' => [
                'required',
                Rule::unique('docentes')->ignore($docente->id),
                'digits:10',
            ],
            'celular' => [
                'required',
                Rule::unique('docentes')->ignore($docente->id),
                'digits:10',
            ],
            
            'correo_institucional' => [
                'required',
                Rule::unique('docentes')->ignore($docente->id),
                'email:rfc,dns',
                'max:50',
            ],
            'correo_personal' => [
                'required',
                Rule::unique('docentes')->ignore($docente->id),
                'email:rfc,dns',
                'max:50',
            ],
            'direccion' => 'required|max:255',
            'sexo' => 'required|max:9',
            'etnia' => 'required|max:20',
            'titulo_3_n' => '',
            'titulo_4_n' => '',
            'doctorado' => '',
            'phd' => '',
            'discapacidad' => 'required|max:2',
            'estado' => 'required|max:15',
        ]); 

        $docentes = Docente::find($docente->id);
        $docentes->nombres = $request->nombres;
        $docentes->apellidos = $request->apellidos;
        $docentes->cedula = $request->cedula;
        $docentes->celular = $request->celular;
        $docentes->direccion = $request->direccion;
        $docentes->correo_institucional = $request->correo_institucional;
        $docentes->correo_personal = $request->correo_personal;
        
        $docentes->estado = $request->estado;
        $docentes->sexo = $request->sexo;
        $docentes->discapacidad = $request->discapacidad;
        $docentes->porcentaje = $request->porcentaje;
        $docentes->etnia = $request->etnia;

        //titulo 3
        if ($request->titulo_3_n=='') {
            $docentes->titulo_3_n = 'Ninguno';
        }else {
            $docentes->titulo_3_n = $request->titulo_3_n;
        }

        //titulo 4
        if ($request->titulo_4_n=='') {
            $docentes->titulo_4_n = 'Ninguno';
        }else {
            $docentes->titulo_4_n = $request->titulo_4_n;
        }
        //phd 
        if ($request->phd=='') {
            $docentes->phd = 'Ninguno';
        }else {
            $docentes->phd = $request->phd;
        }
        //doctorado
        if ($request->doctorado=='') {
            $docentes->doctorado = 'Ninguno';
        }else {
            $docentes->doctorado = $request->doctorado;
        }

        $docentes->save();

        // $docentes->update($request->all());

        return redirect()->route('docentes.index')
            ->with('success', 'Docente updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $docente = Docente::find($id)->delete();

        return redirect()->route('docentes.index')
            ->with('success', 'Docente deleted successfully');
    }
}