<?php

namespace App\Http\Controllers;

use Laravel\Socialite\Facades\Socialite;
use Exception;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class OauthController extends Controller
{
    public function redirectToProvider()
    {
        return Socialite::driver('google')->redirect();
    }
    public function handleProviderCallback()
    {
        try {

            $user = Socialite::driver('google')->user();

            $finduser = User::where('gauth_id', $user->id)->first();

            if ($finduser) {

                Auth::login($finduser);

                return redirect('/dashboard');
            } else {
                $newUser = User::create([
                    'gauth_id' => $user->id,
                    'gauth_type' => 'google',
                    'name' => $user->name,
                    'password' => encrypt('admin@123'),
                    'email' => $user->email,
                    'email_verified_at' => now(),
                    'avatar' => $user->getAvatar()
                ]);

                $newUser->assignRole('student');

                Auth::login($newUser);

                return redirect('/dashboard');
            }
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}
