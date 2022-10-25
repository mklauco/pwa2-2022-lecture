<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\LoginRetention;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */
    
    use AuthenticatesUsers;
    
    /**
    * Where to redirect users after login.
    *
    * @var string
    */
    protected $redirectTo = RouteServiceProvider::HOME;
    
    /**
    * Create a new controller instance.
    *
    * @return void
    */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    
    function authenticated(Request $request, $user)
    {
        LoginRetention::create([
            'user_id'       => $user->id,
            'login_ip'      => $request->ip(),
            'login_time'    => Carbon::now(),
            'user_agent'    => $request->userAgent(),
        ]);       
    }
}
