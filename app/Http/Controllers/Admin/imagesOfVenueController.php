<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\imagesOfVenue;
use App\Models\venuesPhoto;
use Illuminate\Http\Request;

class imagesOfVenueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $imagesofvenue = imagesOfVenue::where('Name_of_Venue', 'LIKE', "%$keyword%")
                ->orWhere('location', 'LIKE', "%$keyword%")
                ->orWhere('Number_of_sits', 'LIKE', "%$keyword%")
                ->orWhere('Uploade_Images', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $imagesofvenue = imagesOfVenue::latest()->paginate($perPage);
        }

        return view('admin.images-of-venue.index', compact('imagesofvenue'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.images-of-venue.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {

        $i_ofVenue =  imagesOfVenue::create([
            'Name_of_Venue' => $request->input('Name_of_Venue'),
            'location' => $request->input('location'),
            'Number_of_sits' => $request->input('Number_of_sits'),

        ]);

        $v_photo = new venuesPhoto();
        // $v_photo->id = 11111;
        $v_photo->imagesOfVenues_id = $i_ofVenue->id;
        if ($request->hasFile('Uploade_Images')) {
            $fileNameWithExtension = $request->file('Uploade_Images')->getClientOriginalName();
            $fileName = pathinfo($fileNameWithExtension, PATHINFO_FILENAME);
            $fileExtension = $request->file('Uploade_Images')->getClientOriginalExtension();
            $fullFileName = $fileName . '-' . time() . '.' . $fileExtension;
            //  $request->file('Uploade_Images')->move(public_path('images'), $fullFileName);
        } else {
            $fullFileName = 'noimage.jpg';
        }
        $v_photo->Uploade_Images = $fullFileName;
        $v_photo->save();

        return redirect('admin/images-of-venue')->with('flash_message', 'imagesOfVenue added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $imagesofvenue = imagesOfVenue::findOrFail($id);

        return view('admin.images-of-venue.show', compact('imagesofvenue'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $imagesofvenue = imagesOfVenue::findOrFail($id);

        return view('admin.images-of-venue.edit', compact('imagesofvenue'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {

        $requestData = $request->all();
                if ($request->hasFile('Uploade_Images')) {
            $requestData['Uploade_Images'] = $request->file('Uploade_Images')
                ->store('uploads', 'public');
        }

        $imagesofvenue = imagesOfVenue::findOrFail($id);
        $imagesofvenue->update($requestData);

        return redirect('admin/images-of-venue')->with('flash_message', 'imagesOfVenue updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        imagesOfVenue::destroy($id);

        return redirect('admin/images-of-venue')->with('flash_message', 'imagesOfVenue deleted!');
    }
}
