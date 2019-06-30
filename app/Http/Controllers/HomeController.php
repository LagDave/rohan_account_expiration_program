<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(){
        $all_users = DB::select("SELECT * FROM RohanUser.dbo.TUser");
        return $all_users;
    }
}
