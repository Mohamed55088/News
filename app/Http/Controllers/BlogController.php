<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use function PHPUnit\Framework\isEmpty;

class BlogController extends Controller
{
    public function index()
    {
        $blog = Blog::all()->count();
        return view('Dashboard.content', compact('blog'));
    }
    // Add blog post
    public function store(Request $request)
    {
        try {
            // Validate the incoming request data
            $validatedData = $request->validate([
                'title_en' => 'required|string|max:255',
                'Brief_explanation_en' => 'required|string|max:500',
                'long_explaination_en' => 'required|string',
                'title_ar' => 'required|string|max:255',
                'Brief_explanation_ar' => 'required|string|max:500',
                'long_explaination_ar' => 'required|string',
                'title_er' => 'required|string|max:255',
                'Brief_explanation_er' => 'required|string|max:500',
                'long_explaination_er' => 'required|string',
                'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048', // Example validation for the photo
            ]);

            // Create a new Blog instance
            $blog = new Blog();

            // Set the translatable attributes for each language
            $blog->setTranslation('title', 'en', $validatedData['title_en']);
            $blog->setTranslation('brief_explanation', 'en', $validatedData['Brief_explanation_en']);
            $blog->setTranslation('long_explaination', 'en', $validatedData['long_explaination_en']);

            $blog->setTranslation('title', 'ar', $validatedData['title_ar']);
            $blog->setTranslation('brief_explanation', 'ar', $validatedData['Brief_explanation_ar']);
            $blog->setTranslation('long_explaination', 'ar', $validatedData['long_explaination_ar']);

            $blog->setTranslation('title', 'he', $validatedData['title_er']);
            $blog->setTranslation('brief_explanation', 'he', $validatedData['Brief_explanation_er']);
            $blog->setTranslation('long_explaination', 'he', $validatedData['long_explaination_er']);

            // Assign the admin ID (example value, adjust as needed)
            $blog->admin_id = Auth::guard('admin')->user()->id;
            // Save the blog post
            $blog->save();
            // Process the uploaded file
            if ($request->hasFile('photo')) {
                $file = $request->file('photo');
                // Generate a unique filename for each file
                $filename = '_' . time() . '_' . rand(1000, 9999) . $file->getClientOriginalName();
                // Store the file in the 'blogs' directory
                $file->storeAs('blogs', $filename);

                // Create an image record in the database for each file
                Image::create([
                    'folder_save' => 'blogs',
                    'url' => $filename,
                    'blog_id' => Blog::latest()->first()->id
                ]);
            }
            toastr()->success('Your account has been re-verified.');
            return redirect()->back();
        } catch (\Exception $e) {
            return dd($e->getMessage());
        }
        // Validate form inputs

    }
    public function destroy($id)
    {
        Blog::find($id)->delete();
        return redirect()->back();
    }
    public function showOne($id)
    {
        $blog = Blog::find($id);
        return view('News.Blog-details', compact('blog'));
    }
    public function show(Request $request)
    {
        if ($request->search) {
            $blogs = Blog::where(function ($query) use ($request) {
                $query->where('title', 'like', "%$request->search%")
                    ->orWhere('brief_explanation', 'like', "%$request->search%")
                    ->orWhere('long_explaination', 'like', "%$request->search%");
            })->paginate(7);
        } else {
            $blogs = Blog::paginate(7);
        }


        return view('News.Blog', compact('blogs'));

    }
    public function about()
    {
        return view('News.About');
    }

}
