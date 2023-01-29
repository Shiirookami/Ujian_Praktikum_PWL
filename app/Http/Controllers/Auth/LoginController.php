<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
    public function login(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            if(Auth::user()->status == 1){
                $request->session()->regenerate();
                if (Auth::user()->role_id == 2 ) {
                    $admin = User::where('email', $request->email);
                    return redirect()->route('admin.dashboard.index');
                }
                if (Auth::user()->role_id == 1) {
                    return redirect()->route('superadmin.dashboard.index');
                }
                if (Auth::user()->role_id == 3) {
                    return redirect()->route('user_pengguna.dashboard.index');
                }
                return redirect()->intended('login');
            }
            auth()->logout();
            return back()->withErrors([
                'email'=>'Email tidak Aktif'
            ]);
        }
        return back()->withErrors([
            'email' => 'Email/Password salah'
        ]);
    }
}
