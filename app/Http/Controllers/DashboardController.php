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
    public function add_menue()
    {
        return view('admin.pages.add_menue');
    }

    // adding new menu
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

            $data['image'] = $file_name;
            $data['created_at'] = now();
            $data['updated_at'] = now();
            $data['description'] = trim($request->description);

            DB::table('menus')->insert($data);
        }

        return back()->with('status', "Menu added successfully");
    }

    //load menu edit page
    public function edit(string $id)
    {
        $menu = DB::table('menus')->find($id);
        return view('admin.pages.edit_menu', [
            'menu' => $menu
        ]);
    }

    // update menu
    public function update(Request $request, string $id)
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

            $data['image'] = $file_name;
            $data['created_at'] = now();
            $data['updated_at'] = now();
            $data['description'] = trim($request->description);

            DB::table('menus')->where('id', $id)->update($data);
        }

        return redirect()->route('menue')->with('status', "Menu updated successfully");
    }

    // delete menu
    public function destroy(string $id)
    {

        $imagePath = DB::table('menus')
            ->where('id', $id)
            ->value('image');

        $affectedRows = DB::table('menus')
            ->where('id', $id)
            ->delete();

        if ($affectedRows > 0) {
            if ($imagePath) {
                $fullImagePath = public_path('menu_images/' . $imagePath);
                if (File::exists($fullImagePath)) {
                    File::delete($fullImagePath);
                }
            }
            return redirect()->route('menue')->with('status', "Menu deleted successfully");
        }
    }


    public function menue()
    {
        $menus = DB::table('menus')->orderByDesc('created_at')->paginate(5);
        return view('admin.pages.menue', [
            "menus" => $menus
        ]);
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
