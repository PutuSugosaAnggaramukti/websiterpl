<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\koordinator;
use Auth;
use Socialite;
use Exception;
use Illuminate\Support\Str;

class login_controller extends Controller
{
    public function index(){
        return view('login.index');
    }

    public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }

    public function Callback(Request $request)
    {
        try 
        {
    
            $user = Socialite::driver('google')->stateless()->user();
     
            $finduser = User::where('google_id', $user->id)->first();
            
            $user_dosen = koordinator::where('google_id', $user->id)->first();
            if($finduser)
            {
     
                Auth::login($finduser);
    
                return redirect('/kp');
     
            }
            elseif($user_dosen)
            {
                Auth::guard('koordinator')->loginUsingId($user_dosen->id, true);
                return redirect('/ProfilDosen');
            }
            else
            {
                if(Str::endsWith($user->email, "@si.ukdw.ac.id"))
                {
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'google_id'=> $user->id,
                ]);
    
                Auth::login($newUser);
     
                return redirect('/kp');
                }
                elseif(Str::endsWith($user->email, "@gmail.com"))
                {

                    $userDosen = koordinator::create([
                        'name' => $user->name,
                        'email' => $user->email,
                        'google_id'=> $user->id,
                    ]);
        
                    Auth::guard('koordinator')->loginUsingId($userDosen->id, true);
                    return redirect('/ProfilDosen');
                }
            }
    
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
    public function logout(Request $request)
    {
        Auth::guard()->logout();
        $request->session()->flush();
        $request->session()->regenerate();

        return redirect('/login');
    }
}
