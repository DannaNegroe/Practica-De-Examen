<?php

namespace App\Http\Controllers;

use App\Models\userPractica;
use Illuminate\Http\Request;

class userController extends Controller
{
    public function index(){
        $users=userPractica::orderBy('id', 'desc')->paginate(10);
        return view('users.users-index', compact('users'));
    }
}
