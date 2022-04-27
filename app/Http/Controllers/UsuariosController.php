<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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
        $users = User::paginate();

        return view('user.index', compact('users'))
            ->with('i', (request()->input('page', 1) - 1) * $users->perPage());
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
            'tipo' => ['integer'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]); 

        $user = User::create([
            'name' => $request['name'],
            'tipo' => $request['tipo'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);


        // request()->validate(User::$rules);

        // $user = User::create($request->all());

        return redirect()->route('usuarios.index')
            ->with('success', 'User created successfully.');
        //return $request;
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

        //Continuar trabajando en el Actualizar
        $this->validate($request, [
            'email' => [
                'required',
                Rule::unique('users')->ignore($user->id),
                'string',
                'email', 
                'max:255',
            ],
            'name' => 'required|string|max:255',
            'tipo' => 'integer',
            'password' => 'required|string|min:8',
            
        ]); 

        // $usuario = User::find($user->id);
        // $usuario->name = $request->name;
        // $usuario->tipo = $request->tipo;
        // $usuario->email = $request->email;
        // $usuario->password = Hash::make($request->password);


        // if(password_verify('123456789', $crypt_password_string)) {
        //     // in case if "$crypt_password_string" actually hides "1234567"
        //     return $usuario;
        // }else
        // return 'No ingreso';

        // $user = User::create([
        //     'name' => $request['name'],
        //     'tipo' => $request['tipo'],
        //     'email' => $request['email'],
        //     'password' => Hash::make($request['password']),
        // ]);
        //$user->update($request->all());

        // return redirect()->route('usuarios.index')
        //     ->with('success', 'User updated successfully');
        return $request;
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $user = User::find($id)->delete();

        return redirect()->route('usuarios.index')
            ->with('success', 'User deleted successfully');
    }
}
