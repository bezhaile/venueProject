<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\venuesPhoto;
use App\Models\imagesOfVenue;

class frontPageController extends Controller
{
    // To Display the entire venue list.



    // To Show the selected venue
    public function showSingleVenue($id)
    {
        $imagesOfVenue = imagesOfVenue::find($id);

        $records = venuesPhoto::where('imagesOfVenues_id', $imagesOfVenue->id)
        ->orderBy('created_at', 'DESC')->paginate(30);

        $venue = imagesOfVenue::where('id', $imagesOfVenue->id)->get();

        return view('showSingleVenue', compact('records', 'venue'));
    }
}
