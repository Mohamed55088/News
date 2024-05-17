<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index()
    {
        $admins = Admin::all();
        return view('Dashboard.team', compact('admins'));
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'coverImage' => 'required|image',
            'firstName' => 'required|string|max:255',
            'lastName' => 'required|string|max:255',
            'userName' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'password' => 'required|string|max:255',
        ]);
        // Save the validated data to the database
        Admin::create([
            'name' => $request->firstName . '' . $request->lastName,
            'email' => $request->email,
            'role' => 1,
            'password' => Hash::make($request->password)
        ]);
        // if ($request->hasFile('coverImage')) {
        //     $file = $request->file('coverImage');
        //     // Generate a unique filename for each file
        //     $filename = '_' . time() . '_' . rand(1000, 9999) . $file->getClientOriginalName();
        //     // Store the file in the 'blogs' directory
        //     $file->storeAs('blogs', $filename);

        //     // Create an image record in the database for each file
        //     Image::create([
        //         'folder_save' => 'blogs',
        //         'url' => $filename,
        //         'blog_id' => Admin::latest()->first()->id
        //     ]);
        // }

        // Contact::create($validated); // Assuming you have a Contact model
        return redirect()->back()->with('success', 'Contact created successfully.');


    }
    public function calander()
    {
        return view('Dashboard.calander');
    }
}
