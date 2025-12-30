<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ScanController extends Controller
{
    public function qr()
    {
        return view('qr');
    }


    public function index()
    {
        return view('scan');
    }


    public function verify(Request $request)
    {
        $request->validate([
            'password' => 'required'
        ]);


        $user = User::where('entry_password', $request->password)->first();


        if (!$user) {
            return back()->with('error', 'Invalid Password');
        }


        return back()->with('name', $user->name);
    }
}
