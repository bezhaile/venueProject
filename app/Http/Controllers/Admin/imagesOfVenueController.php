<?php

namespace App\\Http\\Controllers\\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\imagesOfVenue;
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
            $imagesofvenue = imagesOfVenue::where('Name of Venue', 'LIKE', "%$keyword%")
                ->orWhere('location', 'LIKE', "%$keyword%")
                ->orWhere('Number of sits', 'LIKE', "%$keyword%")
                ->orWhere('Uploade Images', 'LIKE', "%$keyword%")
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
        
        $requestData = $request->all();
                if ($request->hasFile('Uploade Images')) {
            $requestData['Uploade Images'] = $request->file('Uploade Images')
                ->store('uploads', 'public');
        }

        imagesOfVenue::create($requestData);

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
                if ($request->hasFile('Uploade Images')) {
            $requestData['Uploade Images'] = $request->file('Uploade Images')
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
