<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\posts;
use App\Models\images;
class frontPageController extends Controller
{
    // To Display the entire venue list.



    // To Show the selected venue
    public function index(Request $id )
    {
        $posts = posts::with('images')->paginate(8);

        return view('welcome', compact('posts'));
    }
}
