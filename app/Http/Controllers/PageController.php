<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Phone;
use Excel;
use App\Imports\PhoneImport;

class PageController extends Controller
{
    public function __construct(){
        $this->middleware('auth', ['only' => ['index', 'phone']]);
    }

    public function index(){
        return view('welcome');
    }

    public function phone(){
        return view('phone');
    }

    public function addPhone(Request $request){
        $this->validate($request, [
            'name' => 'required|string',
            'phone' => 'required|numeric'
        ]);

        Phone::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'user_id' => Auth::id(),
        ]);

        return redirect()->back()->with('success','Phone successfully inserted!');
    }

    public function importForm(){
        return view('import');
    }

    public function import(Request $request){
        Excel::import(new PhoneImport, $request->file);
        return redirect()->back()->with('excel','Phone inserted successfully!');
    }
}
