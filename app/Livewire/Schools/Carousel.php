<?php

namespace App\Livewire\Schools;

use App\Models\School;
use Livewire\Component;

class Carousel extends Component
{
    public function render()
    {
        return view('livewire.schools.carousel', [
            'schools' => School::all()
        ]);
    }
}
