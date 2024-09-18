<?php

namespace App\Livewire\Website\School;

use App\Models\School;
use Livewire\Component;

class Carousel extends Component
{
    public function render()
    {
        return view('livewire.website.school.carousel', [
            'schools' => School::with('segments')->get() // Pré-carrega os segmentos
        ]);
    }
}
