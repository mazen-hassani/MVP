<?php

namespace App\Http\Controllers;

use App\Jobs\Compress;
use App\Models\Image;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    public function index(Request $request)
    {
        $user_id = auth()->id();
        $user = User::find($user_id);
        $images = $user->images()->latest()->paginate(5);

        return view('images.index', compact('images'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('images.create');
    }

    public function store(Request $request)
    {
        $request->merge(['user_id'=>auth()->id()]);
        $images = $request->file('files', []);
        $descriptions = $request->input('descriptions', []);
        for ($i = 0; $i < count($images); $i++) {
            $path = Storage::disk('public')->putFile('images', $images[$i]);
            $image = new Image();
            $image->votes = 1;
            $image->user_id = auth()->id();
            $image->org_path = $path;
            $image->description = $descriptions[$i];
            $image->save();
            Compress::dispatch($image);
        }

        return redirect()->route('images.index')
            ->with('success', 'Image added successfully.');
    }

    public function destroy(Image $image)
    {
        $image->delete();

        return redirect()->route('images.index')
            ->with('success', 'Image deleted successfully');
    }
}
