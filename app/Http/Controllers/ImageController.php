<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function index()
    {
        $images = Image::all()->latest()->paginate(5);
        return view('images.index',compact('images'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('images.create');
    }


    public function store(Request $request)
    {
        //
        $request->validate([
            'description' => 'required',
        ]);
        $request->merge(['user_id'=>auth()->id()]);
        $images = $request->file('files', []);
        $descriptions = $request->input('descriptions', []);
        for ($i = 0 ; $i < count($images) ; $i++)
        {
            $path = Storage::disk('public')->putFile('images', $images[$i]);
//            dd($path);
            $image = new Image();
            $image->org_path = $path;
            $image->description = $descriptions[$i];
            $image->save();
            Compress::dispatch($image);
        }

        return redirect()->route('images.index')
            ->with('success','Image added successfully.');

    }

    public function destroy(Image $image)
    {
        //
        if (! Gate::allows('update-image', $image)) {
            abort(403);
        }
        $image->delete();

        return redirect()->route('images.index')
            ->with('success','Image deleted successfully');
    }
}
