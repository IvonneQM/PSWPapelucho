<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;


class AuthController extends Controller
{
    protected $rut = 'rut';
    protected $username = 'rut';
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait t o add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'getLogout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {

    }


    public function loginPath()
    {
        return route('home');
    }



    public function redirectPath()
    {
        if(\Auth::user()->role == 'admin')
        {
            return 'administrador';
        }
        else
        {
            return 'apoderado';
        }
    }

    /* Tiempo de bloqueo*/

    protected function getLockoutErrorMessage($seconds)
    {

        $minutes = round($seconds/60);

        return \Lang::has('auth.throttle')
            ? \Lang::get('auth.throttle', ['minutes' => $minutes])
            : 'Too many login attempts. Please try again in '.$minutes.' minutes.';
    }

    /* BLOQUEADO POR 5 MIN*/
    protected function lockoutTime()
    {
        return property_exists($this, 'lockoutTime') ? $this->lockoutTime : 0;
    }
/*POR MEDIO DEL AUTHENTICATED CALL BACK PARA REGISTRAR LA
ULTIMA HORA EN LA QUE SE CONECTO UN USUARIO
    protected function handleUserWasAuthenticated(Request $request, $throttles)
    {
        if ($throttles) {
            $this->clearLoginAttempts($request);
        }

        if (method_exists($this, 'authenticated')) {
            return $this->authenticated($request, Auth::user());
        }

        return redirect()->intended($this->redirectPath());
    }
*/

    protected function isUsingThrottlesLoginsTrait()
    {
        return false;
    }
}
