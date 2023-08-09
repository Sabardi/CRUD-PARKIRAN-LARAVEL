<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Psy\Command\WhereamiCommand;

class LoginController extends Controller
{
   public function login ()
   {
    return view('form-login');
   }
   public function register ()
   {
    return view('form-register');
   }
   public function prosesLogin (Request $request)
   {
      $request->validate([
        'username' =>'required',
        'password' =>'required',
      ]);

      $user = User::where('name','=',$request ->username)->first();

      if ($user)
      {
         if (md5($request->post('password')) == $user->password){
            session(['username' => $user->name]);
            return redirect()->route('pengguna.index');
         }
        else {
            return back()->withInput()->with('pesan',"Password tidak valid");
        }

      }
        else{
            return back()->withInput()->with('pesan',"Username tidak valid");
        }
   }
  public function prosesRegister (Request $req){
    $req->validate ([
        'username',
        'email',
        'password',
    ]);
    $passMD5 =md5($req->post('password'));
    User::create(
        [
            'name'=> $req->username,
            'email'=> $req->email,
            'password'=> $passMD5
        ]
        );
        return redirect()->route('pengguna.index');
  }

public function logout ()
{
    session()->forget('username');
    return redirect('login')->with('pesan','Logout berhasil');
}

}
