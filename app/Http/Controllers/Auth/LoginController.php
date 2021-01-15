<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Role;
use App\Users;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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
   
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }


   /* public function authenticated($request , $user){

        if($user->role=='user'){
            return redirect()->route('product.show') ;
        }else{
            return redirect()->route('product.index') ;
        }
    
    
    
}*/

/*public function redirectPath(){
    if(auth()->users()->email == 'carmenvc1999cuellar@gmail.com'){
        return redirect()->route('product.index') ;
    }
    return redirect()->route('product.show') ;
}*/
}
