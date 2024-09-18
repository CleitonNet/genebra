<?php

namespace App\Livewire\Website\School;

use App\Models\School;
use Livewire\Component;

class Container extends Component
{
    public function render()
    {
        return view('livewire.website.school.container', [
            'schools' => School::with('segments')->get() // Pré-carrega os segmentos
        ]);
    }
}
