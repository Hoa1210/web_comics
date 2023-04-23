<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class SocicalController extends Controller
{
    public function socical($provider)
    {
        try {
            $user = Socialite::driver($provider)->user();
            if ($user) {
                $createUser = User::UpdateOrCreate([
                    'provider_id' => $user->getId(),
                    'provider' => $provider,
                ], [
                        'name' => $user->name,
                        'email' => $user->email,
                        'avatar' => $user->avatar,
                    ]);
                Auth::loginUsingId($createUser->id,$remember = true);
                return redirect()->route('home');
            }
        } catch (\Throwable $th) {
            dd($th);
        }
    }
}