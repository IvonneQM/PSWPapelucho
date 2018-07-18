<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Support\Facades\Auth;

class PasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    /**
     * Create a new password controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function redirectPath()
    {
        if(\Auth::user()->role == 'admin')
        {
            $this->registerLogin();
            return 'administrador';
        }
        elseif(\Auth::user()->role == 'directiva')
        {
            $this->registerLogin();
            return 'directiva';
        }
        elseif(\Auth::user()->role == 'dueño')
        {
            $this->registerLogin();
            return 'dueño';
        }
        else{
            $this->registerLogin();
            return 'chofer';
        }
    }

    /**
     * Reset the given user's password.
     *
     * @param  \Illuminate\Contracts\Auth\CanResetPassword  $user
     * @param  string  $password
     * @return void
     */
    protected function resetPassword($user, $password)
    {
        $user->password = $password;
        $user->save();
        Auth::login($user);
    }

    /**
     * Get the e-mail subject line to be used for the reset link email.
     *
     * @return string
     */
    protected function getEmailSubject()
    {
        return trans('passwords.email_subject');
    }




}
