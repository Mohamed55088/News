<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class CommentController extends Controller
{
    public function comment(Request $request)
    {
        // Validate the incoming request data
        $validator = Validator::make($request->all(), [
            'comment' => 'required|string|max:255', // Adjust max length as needed
            'id_blog' => 'required|exists:blogs,id',
        ]);

        if ($validator->fails()) {
            notify()->error($validator->errors()->first());
            return redirect()->back()->withErrors($validator)->withInput();
        }

        try {
            // Create the comment
            Comment::create([
                'comment' => $request->comment,
                'user_id' => Auth::guard('web')->user()->id,
                'blog_id' => $request->id_blog,
            ]);

            // flash('success', t('success_message'))->success();
            return redirect()->back();
        } catch (\Exception $e) {
            notify()->error($e->getMessage());
            return redirect()->back();
        }
    }
}
