<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Footer extends Component
{
    public $company;
    public $designer;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($company, $designer)
    {
        //
        $this->company = $company;
        $this->designer = $designer;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.footer');
    }
}
