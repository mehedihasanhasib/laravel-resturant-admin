<?php

namespace App\Http\Controllers;

use App\Models\HouseRent;
use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        // menus
        $starters = DB::table('menus')->where('category', '=', 'starter')->get();
        $breakfasts = DB::table('menus')->where('category', '=', 'breakfast')->get();
        $lunches = DB::table('menus')->where('category', '=', 'lunche')->get();
        $dinners = DB::table('menus')->where('category', '=', 'dinner')->get();

        return view('user.home', [
            'starters' => $starters,
            'breakfasts' => $breakfasts,
            'lunches' => $lunches,
            'dinners' => $dinners,
        ]);
    }
}
