<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function showLogin() {
        return view('login');
    }

    public function viewFeedback() {
        if (auth()->guard('admin')->check()) {
            return view('feedback');
        } else {
            return redirect('login');
        }

    }

    public function checkLogin(Request $request) {

        $this->validate($request, [
            'mail' => 'required|min:4|max:191',
            'password' => 'required|min:4',
        ]);

        if (Auth::guard('admin')->attempt(['mail' => $request->mail, 'password' => $request->password])) {
            return redirect('/admin/feedback');
        } else {
            return redirect()->back()->with('error', 'Kullanıcı Adı veya Şifre Yanlış');
        }
    }

    public function logout() {
        Auth::guard('admin')->logout();
        return redirect('login');
    }
}
