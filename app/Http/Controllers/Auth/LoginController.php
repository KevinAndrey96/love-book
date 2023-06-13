<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected function redirectTo()
    {
        return redirect()->route('admin.index');
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * Handle a login request to the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Http\JsonResponse
     */
    public function login(Request $request)

{
    $email = $request->input('email');
    $password = $request->input('password');

    // Buscar el usuario por su correo electrónico en la tabla de usuarios
    $user = User::where('email', $email)->first();

    if ($user) {
        if (md5($password) == $user->password) {
            Auth::login($user);
            return redirect()->route('admin.index');
        }
    }

    // Las credenciales no son correctas
    return back()->withErrors([
        'email' => 'Las credenciales proporcionadas no son correctas.',
    ]);
}
}
