<?php

namespace App\Http\Controllers;

use App\Models\HouseRent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.pages.index');
    }

    public function manage_book_message()
    {
        return view('admin.pages.manage_book_message');
    }

    public function booking_store(Request $request)
    {
        DB::table('bookings')->insert([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'date' => $request->date,
            'time' => $request->time,
            'person' => $request->person,
            'message' => $request->message,
        ]);
    }
}
