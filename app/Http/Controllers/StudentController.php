<?php

namespace App\Http\Controllers;

use App\Models\TestimonialComment;
use App\Models\TestimonialVideo;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'favoriteVideo' => TestimonialVideo::where('is_favorite', true)->first(),
            'unfavoriteVideo' => TestimonialVideo::where('is_favorite', false)->get(),
            'users' => TestimonialComment::all()
        ];

        return view('pages.student.index', $data);
    }
}
