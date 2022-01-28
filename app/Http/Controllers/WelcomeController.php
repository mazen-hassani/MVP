<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param Request $request
     *
     * @return Application|Factory|View
     */
    public function __invoke(Request $request)
    {
        $images = Image::with('votes')->get()->take(36);

        return view('welcome')->with('images', $images);
    }
}
