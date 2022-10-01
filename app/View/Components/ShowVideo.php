<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ShowVideo extends Component
{
    public $path;

    public function __construct($path)
    {
        $this->path = $path;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.show-video');
    }
}
