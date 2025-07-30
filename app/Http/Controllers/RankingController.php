<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RankingController extends Controller
{
    public function index()
    {
        $ranking = User::orderBy('points', 'desc')
        ->select('id','name','points')
        ->get();

        $ranking = User::orderBy('points', 'desc')
                        ->limit(10)
                        ->select('id', 'name', 'points') 
                        ->get();

        return response()->json($ranking);
    }
}
