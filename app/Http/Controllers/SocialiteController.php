<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User; // Model User
use Illuminate\Support\Facades\Auth; // Facade Auth
use Illuminate\Support\Facades\Hash;
use Exception;

class SocialiteController extends Controller
{
    /**
     * Chuyển hướng người dùng đến trang đăng nhập của nhà cung cấp
     */
    public function authProviderRedirect($provider)
    {
        if ($provider) {
            return Socialite::driver($provider)->redirect();
        }
        abort(404);
    }

    /**
     * Xử lý callback từ nhà cung cấp đăng nhập
     */
    public function socialAuthentication($provider)
    {
        try {
            $sociaUser = Socialite::driver($provider)->user();
    
            $user = User::where('auth_provider_id', $sociaUser->id)->first();
    
            if (!$user) {
                $user = User::create([
                    'name' => $sociaUser->name ?? 'Unknown',
                    'email' => $sociaUser->email ?? 'nlan4670' . uniqid() . '@gmail.com',
                    'auth_provider_id' => $sociaUser->id,
                    'auth_provider' => $provider,
                    'password' => bcrypt('123456@'),
                ]);
            }
    
            Auth::login($user);
            return redirect()->route('index');
        } catch (Exception $e) {
            return redirect('login')->with('error', 'Đăng nhập thất bại: ' . $e->getMessage());
        }
    }
}
