<?php

namespace App\Http\Controllers;

use App\Models\HouseRent;
use App\Models\Room;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('user.home');
    }
}
