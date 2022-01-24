<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ImageContainer extends Component
{
    public $username;
    public $description;
    public $image;
    public $thumbnail;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($image, $thumbnail, $username, $description)
    {
        $this->username = $username;
        $this->description = $description;
        $this->image = $image;
        $this->thumbnail = $thumbnail;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('layouts.image-container');
    }
}
