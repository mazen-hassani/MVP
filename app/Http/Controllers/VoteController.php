<?php

namespace App\Http\Controllers;

use App\Models\Image;

class VoteController extends Controller
{
    public function up(Image $image)
    {
//        dd($image);
        $image->votes()->syncWithoutDetaching([auth()->id() => ['value'=>1]]);

        return redirect('/');
    }

    public function down(Image $image)
    {
        $image->votes()->syncWithoutDetaching([auth()->id() => ['value'=>-1]]);

        return redirect('/');
    }
}
