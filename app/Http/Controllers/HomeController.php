<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $all_users = User::all();
        return $all_users;
    }
}
