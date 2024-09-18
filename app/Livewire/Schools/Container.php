<?php

namespace App\Livewire\Schools;

use App\Models\School;
use Livewire\Component;

class Container extends Component
{
    public function render()
    {
        return view('livewire.schools.container', [
            'schools' => School::all()
        ]);
    }
}
