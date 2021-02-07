<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Http\Controllers\DailyController;

class LoginController extends Controller
{
    public function authenticate(Request $request)
    {
        $credentials = $request->only('name','password');
        if (Auth::attempt($credentials,true)){  
            $request->session()->regenerate();

            return redirect()->action([DailyController::class, 'getToday'],['user' => $request->name]);
        }
        return back()->withErrors([
            'name' => 'الرجاء التأكد من الاسم وكلمة المرور',
        ]);
    }
}
