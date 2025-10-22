<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $data = $request->only(['name', 'email', 'password', 'password_confirmation', 'supdomin', 'phone']);

        $validator = Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'subdomain' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:20'],

        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => $data['password'],
            'supdomin' => $data['supdomin'] ,
            'phone' => $data['phone'] ,
        ]);

        // Optionally, log the user in. Leaving out for simplicity.

        return redirect('/')->with('status', 'Registration successful.');
    }

    protected function create(array $data)
    {
        return \App\Models\User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => $data['password'],
            'status' => 'pending', // المستخدم لسه تحت المراجعة
            'supdomin' => $data['supdomin'],
            'phone' => $data['phone'],
        ]);
    }

    protected function registered(Request $request, $user)
    {
        // سجل خروج المستخدم بعد التسجيل
        Auth::logout();

        // رجّعه بصفحة فيها رسالة
        return redirect()->route('pending');
    }
}
