<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

/**
 * Class UserController
 * @package App\Http\Controllers
 */
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::get();

        return view('user.index', compact('users'));
            // ->with('i', (request()->input('page', 1) - 1) * $users->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = new User();
        return view('user.create', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => ['required', 'string', 'max:255'],
            'tipo' => 'required|string',
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]); 

        $user = User::create([
            'name' => $request['name'],
            'tipo' => $request['tipo'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);


        return redirect()->route('users.index')
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
        $user = User::find($id);

        return view('user.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);

        return view('user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  User $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {

        if ($request->password!= null) {
            $this->validate($request, [
                'password' => 'required|string|min:8',
                
            ]); 
        }
        $this->validate($request, [
            'email' => [
                'required',
                Rule::unique('users')->ignore($user->id),
                'string',
                'email', 
                'max:255',
            ],
            'name' => 'required|string|max:255',
            'tipo' => 'required|string',          
        ]); 

        $usuario = User::find($user->id);
        $usuario->name = $request->name;
        $usuario->tipo = $request->tipo;
        $usuario->email = $request->email;
        if ($request->password == null) {
            
        } else {
            $usuario->password = Hash::make($request->password);
        }
        

        $usuario->save();
        //$user->update($request->all());

        return redirect()->route('users.index')
        ->with('message', 'Registro actualizado correctamente.');
        //return $usuario;
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $user = User::find($id)->delete();
        
        return redirect()->route('users.index')
        ->with('message', 'Registro eliminado correctamente');
        
    }
}
