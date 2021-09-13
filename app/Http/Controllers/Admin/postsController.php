<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\posts;
use App\Models\images;
use Illuminate\Http\Request;

class postsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
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
            $post = posts::where('Name_of_Venue', 'LIKE', "%$keyword%")
                ->orWhere('location', 'LIKE', "%$keyword%")
                ->orWhere('Number_of_sits', 'LIKE', "%$keyword%")
                ->orWhere('image', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $post = posts::latest()->paginate($perPage);
        }

        return view('admin.post.index', compact('post'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.post.create');
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

        $i_ofVenue =  posts::create([
            'Name_of_Venue' => $request->input('Name_of_Venue'),
            'location' => $request->input('location'),
            'Number_of_sits' => $request->input('Number_of_sits'),

        ]);

        $picture = new images();
        // $picture->id = 11111;
        $picture->posts_id = $i_ofVenue->id;
        if ($request->hasFile('image')) {

            $fileNameWithExtension = $request->file('image')->getClientOriginalName();

            $fileName = pathinfo($fileNameWithExtension, PATHINFO_FILENAME);

            $fileExtension = $request->file('image')->getClientOriginalExtension();

            $fullFileName = $fileName . '-' . time() . '.' . $fileExtension;

             $request->file('image')->move(public_path('/storage/images'), $fullFileName);
        } else {
            $fullFileName = 'noimage.jpg';
        }
        $picture->image = $fullFileName;
        $picture->save();

        return redirect('admin/post')->with('flash_message', 'posts added!');
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
        $post = posts::findOrFail($id);

        return view('admin.post.show', compact('post'));
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
        $post = posts::findOrFail($id);

        return view('admin.post.edit', compact('post'));
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
                if ($request->hasFile('image')) {
            $requestData['image'] = $request->file('image')
                ->store('uploads', 'public');
        }

        $post = posts::findOrFail($id);
        $post->update($requestData);

        return redirect('admin/post')->with('flash_message', 'posts updated!');
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
        posts::destroy($id);

        return redirect('admin/post')->with('flash_message', 'posts deleted!');
    }
}
