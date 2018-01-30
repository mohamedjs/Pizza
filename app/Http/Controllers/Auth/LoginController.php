<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
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

    use AuthenticatesUsers {
    logout as performLogout;
          }

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
     public function logout(Request $request)
     {
     $this->performLogout($request);
     return redirect('/');
     }
    protected function redirectTo()
    {
      $user=Auth::user();
      if($user->id==1){
        return '/admin';
      }
        else{
          return '/';
        }
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
    //login api
    public function login(Request $request)
    {
        $this->validateLogin($request);

        if ($this->attemptLogin($request)) {
            $user = $this->guard()->user();
            $user->generateToken();

            return response()->json([
                'data' => $user->toArray(),
            ]);
        }

        return $this->sendFailedLoginResponse($request);
    }
    //logout api_token
    public function logout_api(Request $request)
    {
        $user = Auth::guard('api')->user();
        if ($user) {
            $user->api_token = null;
            $user->save();
            return response()->json(['data' => 'User logged out.'], 200);
        }
        return response()->json(['data' => 'User no.'], 404);
    }

  }
