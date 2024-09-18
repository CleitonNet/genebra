<?php

namespace App\Livewire\Welcome;

use App\Models\Slides;
use Livewire\Component;

class Header extends Component
{
    public $slides;

    public function mount()
    {
        $this->slides = Slides::all();
    }

    public function render()
    {
        return view('livewire.welcome.header');
    }
}
