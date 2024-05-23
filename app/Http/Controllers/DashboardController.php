<?php

namespace App\Http\Controllers;

use App\Models\HouseRent;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.pages.index');
    }
    public function add_menue()
    {
        return view('admin.pages.add_menue');
    }
    public function store(Request $request)
    {
      dump($request->all());
    }
    public function menue()
    {
        return view('admin.pages.menue');
    }
    public function add_review()
    {
        return view('admin.pages.add_review');
    }
    public function manage_review()
    {
        return view('admin.pages.manage_review');
    }
    public function add_chefs()
    {
        return view('admin.pages.add_chefs');
    }
    public function manage_chefs()
    {
        return view('admin.pages.manage_chefs');
    }
    public function manage_book_message()
    {
        return view('admin.pages.manage_book_message');
    }

}
