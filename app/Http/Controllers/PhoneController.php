<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Phone;
use App\Models\User;

class PhoneController extends Controller
{
    public function index(User $user){
        $user = Auth::user();
        return view('list', ['user' => $user]);
    }
}
