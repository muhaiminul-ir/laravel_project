<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $totalUser = User::count();


        return view('welcome', [
            'total_user' => $totalUser,
            'name' => 'Rahad'
        ]);
    }
}