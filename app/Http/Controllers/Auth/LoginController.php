<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{

    use AuthenticatesUsers;

    protected $redirectTo = '/login';


    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request)

    {

        $input = $request->all();



        $this->validate($request, [

            'email' => 'required|email',

            'password' => 'required',

        ]);



        if(auth()->attempt(array('email' => $input['email'], 'password' => $input['password'])))

        {

            if (auth()->user()->is_admin == 0) {

                return redirect()->route('admin.dashboard');

            }elseif(auth()->user()->is_admin == 1){

                return redirect()->route('kepalapuskesmas.dashboard');

            }elseif(auth()->user()->is_admin == 2){

                return redirect()->route('reservator.dashboard');

            }else{

                return redirect()->route('/login');

            }

        }else{

            return redirect()->route('login')

                ->with('error','Email-Address And Password Are Wrong.');

        }



    }

    public function loginPage()
    {
        return view('auth.login');
    }
}
