<?php

namespace App\Http\Controllers;

use App\Models\HouseRent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        $data = $request->validate([
            'title' => 'required|max:255',
            'price' => 'required',
            'description' => 'required|max:500',
            'category' => 'required|max:255',
            'image' => 'image|required|mimes:jpeg,png,jpg|max:2048'
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $file_name = time() . "-" . trim($image->getClientOriginalName());
            $path = public_path() . '/menu_images';
            $image->move($path, $file_name);
            $data['image'] = $path . "/" . $file_name;
            $data['created_at'] = now();
            $data['updated_at'] = now();
            DB::table('menus')->insert([$data]);
        }

        return back()->with('status', "Menu added successfully");
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
