<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User; // Thêm model User
use Illuminate\Support\Facades\Auth; // Thêm Auth facade
use Exception;

class SocialiteController extends Controller{

    public function googleLogin(){
        return Socialite::driver('google')->redirect();
    }

    public function googleAuthenication() {
        try {
            $googleUser = Socialite::driver('google')->user();
            
            // Tìm user trong database bằng google id hoặc email
            $user = User::where('google_id', $googleUser->id)
                        ->orWhere('email', $googleUser->email)
                        ->first();
            
            // Nếu không tìm thấy, tạo user mới
            if(!$user){
                $user = User::create([
                    'name' => $googleUser->name,
                    'email' => $googleUser->email,
                    'google_id' => $googleUser->id,
                    'password' => bcrypt(rand(100000,999999)), // Mật khẩu random
                ]);
            } else {
                // Cập nhật google_id nếu chưa có
                if (empty($user->google_id)) {
                    $user->google_id = $googleUser->id;
                    $user->save();
                }
            }
            
            // Đăng nhập
            Auth::login($user);
            
            // Chuyển hướng đến trang chính sau khi đăng nhập
            return redirect()->route('index');
            
        } catch (Exception $e) {
            return redirect('login')->with('error', 'Google authentication failed: ' . $e->getMessage());
        }
    }
}