<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ImageContainer extends Component
{
    public $username;
    public $description;
    public $image_org_path;
    public $image_thumbnail_path;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($image_org_path, $image_thumbnail_path, $username, $description)
    {
        $this->username = $username;
        $this->description = $description;
        $this->image_org_path = $image_org_path;
        $this->image_thumbnail_path = $image_thumbnail_path;
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
