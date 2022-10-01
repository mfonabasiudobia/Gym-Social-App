<?php

namespace App\View\Components\buttons;

use Illuminate\View\Component;

class follow1 extends Component
{
    
    public $userId;

    public function __construct($userId)
    {
        $this->userId = $userId;
    }

    public function render()
    {
        return view('components.buttons.follow1');
    }
}
