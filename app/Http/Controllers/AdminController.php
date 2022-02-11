<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Phone;

class AdminController extends Controller
{
    public function index(){
        return view('admin.dashboard');
    }

    public function user(){
        $users = User::where('is_admin',NULL)->get();
        return view('admin.user', compact('users'));
    }

    public function phone(){
        $users = User::where('is_admin',NULL)->get();
        return view('admin.phone', compact('users'));
    }

    public function list($id){
        $user = User::findOrFail($id);
        return view('admin.list', ['users' => $user]);
    }

    public function delete($id){
        $removes = User::findOrFail($id);

        $removes->delete();
        return redirect()->back()->with('remove','User successfully deleted!');
    }

    public function search(){
        $query = $_GET['query_search'];
        $search = Phone::where('phone','LIKE','%'.$query.'%')->get();

        return view('admin.search', ['search' => $search]);
    }
}
