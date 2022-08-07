<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use app\Models\User;

class GoogleController extends Controller
{
    //
    // public function redirectGoogle()
    // {
    //     return Socialite::driver('google')->redirect();
    // }

    // public function handleGoogleCallback()
    // {
    //     try {
    //         $user = Socialite::driver('google')->user();
    //         $finduser = User::where('google_id', $user->id)->first();
    //         if ($finduser) {
    //             Auth::login($finduser);
    //             return redirect('/home');
    //         } else {
    //             $newUser = User::create([
    //                 'name' => $user->name,
    //                 'email' => $user->email,
    //                 'google_id' => $user->id,
    //                 'password' => encrypt('12345678'),
    //             ]);
    //             Auth::login($newUser);
    //             return redirect('/home');
    //         }
    //     } catch (Exception $e) {
    //         dd($e->getMessage());
    //     }
    //}
    //s **************************************************** */

    public function loginWithGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function callbackFromGoogle()
    {
        try {
            $user = Socialite::driver('google')->user();
            //dd($user);
            $is_user = User::where('email', $user->getEmail())->first();
            if (!$is_user) {
                $saveUser = User::updateOrCreate(
                    ['google_id' => $user->getId()],
                    [
                        'name' => $user->getName(),
                        'email' => $user->getEmail(),

                        'password' => Hash::make(
                            $user->getName() . '@' . $user->getId()
                        ),
                    ]
                );
            } else {
                $saveUser = User::where('email', $user->getEmail())->update([
                    'google_id' => $user->getId(),
                ]);
                $saveUser = User::wherw('email', $user->getEmail())->fist();
            }

            Auth::loginUsingId($saveUser->id);
            return redirect('home');
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
