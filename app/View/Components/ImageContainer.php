<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ImageContainer extends Component
{
    public $username;
    public $description;
    public $image;
    public $thumbnail;
    public $id;
    public $upVotes;
    public $downVotes;

    public function __construct($image, $thumbnail, $username, $description, $id, $upVotes, $downVotes)
    {
        $this->username = $username;
        $this->description = $description;
        $this->image = $image;
        $this->thumbnail = $thumbnail;
        $this->id = $id;
        $this->upVotes = $upVotes;
        $this->downVotes = $downVotes;
    }

    public function render()
    {
        return view('layouts.image-container');
    }
}
