<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ImageContainer extends Component
{
    public $image;
    public $user;
    public $description;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($image, $user, $description)
    {
        //
        $this->image = $image;
        $this->user = $user;
        $this->description = $description;
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
