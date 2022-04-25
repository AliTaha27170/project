<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class AdminLoignController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest:admin')->except('logout');
    }
    
    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect('/admin/login');
    }
    use AuthenticatesUsers;
    
    protected function redirectTo()
    {

        if (\Auth::guard('admin')->check())
        {
            return route('/admin/index');
        }
        else
        {
            return '/admin/login';
        }
    }

    public function showAdminLoginForm()
    {
        return view('auth.login');
    }

    public function adminLogin(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {

            return redirect()->intended('/admin/index');
        }
        return back()->withInput($request->only('email', 'remember'));
    }
}
