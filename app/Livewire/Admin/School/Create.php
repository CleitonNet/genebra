<?php

namespace App\Livewire\Admin\School;

use App\Models\School;
use App\Models\Segment;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;

    public $image;
    public $title;
    public $phone;
    public $address;
    public $urlScheduleVisite;
    public $urlHowToGetThere;
    public $enrollment;
    public $getImage;
    public $selectedSegments = [];

    public function save() {
        // dd($this->SelectedSegments);
        $school = School::create([
            'image' => $this->image,
            'title' => $this->title,
            'phone' => $this->phone,
            'address' => $this->address,
            'urlScheduleVisite' => $this->urlScheduleVisite,
            'urlHowToGetThere' => $this->urlHowToGetThere,
            'enrollment' => $this->enrollment
        ]);

        $school->segments()->sync($this->selectedSegments);
    }

    public function render()
    {
        return view('livewire.admin.school.create', [
            'segments' => Segment::all()
        ]);
    }
}
