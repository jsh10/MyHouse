<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;

class LoginController extends Controller
{
    //
    /**
     * Función para iniciar sesión al dashboard administrador.
     * @param  \Illuminate\Http\Request  $request
     * @return Si la cuenta esta autenticada y tiene permiso Admin se le autoriza el acceso.
    */

    public function login(Request $request){

        $remenber = $request-> filled('remember');

        /**Evaluando si la cuenta esta registrada en la BD y tiene permiso Administrador */
        if(Auth::attempt($request->only('email', 'password'), $remenber)) {
            $request-> session()->regenerate(); /**Regenerando token de acceso a sesión*/

            return redirect()->intended('dashboard');/**Redireccionando a la vista del Dashboard */
        }

        return redirect('login')->with('status', 'Usuario no autorizado'); /**Vuelta al Login */
    }


    /**
     * Función para cerrar sesión en el dashboard.
     * @param \Illuminate\Http\Request  $request
     * @param \Illuminate\Htttp\Redirector $redirect
     * @return Se invalida los Cookies y se reinicia la sesión restringiendo el acceso.
    */

    public function logout(Request $request, Redirector $redirect){
        Auth::logout();

        $request->session()->invalidate(); /**Invalidando Cooies de inicio de sesión */
        $request->session()->regenerateToken(); /**Reiniciando Token de inicio de sesión */

        return $redirect->to('/login')->with('status', "Ha cerrado Sessión"); /**Vuelta al Login */
    }

}
