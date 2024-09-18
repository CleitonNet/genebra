<?php

namespace App\Livewire\Website\Welcome;

use App\Models\Slides;
use Livewire\Component;

class Header extends Component
{
    public function render()
    {
        return view('livewire.website.welcome.header', [
            'slides' => Slides::all()
        ]);
    }
}
