<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reviews = DB::table('reviews')->orderByDesc('created_at')->paginate(5);
        return view('admin.pages.manage_review', [
            'reviews' => $reviews
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.add_review');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|max:255',
            'position' => 'required',
            'description' => 'required|max:500',
            'image' => 'image|required|mimes:jpeg,png,jpg|max:2048'
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $file_name = time() . "-" . trim($image->getClientOriginalName());
            $path = public_path() . '/review_images';
            $image->move($path, $file_name);

            $data['image'] = $file_name;
            $data['created_at'] = now();
            $data['updated_at'] = now();
            $data['description'] = trim($request->description);

            DB::table('reviews')->insert($data);
        }

        return back()->with('status', "Review added successfully");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $review = DB::table('reviews')->find($id);
        return view('admin.pages.edit_reviews', [
            'review' => $review
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'name' => 'required|max:255',
            'position' => 'required',
            'description' => 'required|max:500',
            'image' => 'image|required|mimes:jpeg,png,jpg|max:2048'
        ]);

        if ($request->hasFile('image')) {

            $imagePath = DB::table('reviews')
                ->where('id', $id)
                ->value('image');

            if ($imagePath) {
                $fullImagePath = public_path('review_images/' . $imagePath);
                if (File::exists($fullImagePath)) {
                    File::delete($fullImagePath);
                }
            }

            $image = $request->file('image');
            $file_name = time() . "-" . trim($image->getClientOriginalName());
            $path = public_path() . '/review_images';
            $image->move($path, $file_name);

            $data['image'] = $file_name;
            $data['created_at'] = now();
            $data['updated_at'] = now();
            $data['description'] = trim($request->description);

            DB::table('reviews')->where('id', $id)->update($data);
        }

        return redirect()->route('manage_review')->with('status', "Review updated successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $imagePath = DB::table('reviews')
            ->where('id', $id)
            ->value('image');

        $affectedRows = DB::table('reviews')
            ->where('id', $id)
            ->delete();

        if ($affectedRows > 0) {
            if ($imagePath) {
                $fullImagePath = public_path('review_images/' . $imagePath);
                if (File::exists($fullImagePath)) {
                    File::delete($fullImagePath);
                }
            }
            return redirect()->route('manage_review')->with('status', "Review deleted successfully");
        }
    }
}
