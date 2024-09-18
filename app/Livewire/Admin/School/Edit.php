<?php

namespace App\Livewire\Admin\School;

use App\Models\School;
use App\Models\Segment;
use Livewire\Component;
use Livewire\WithFileUploads;

class Edit extends Component
{
    use WithFileUploads;

    public $school;
    public $image;
    public $title;
    public $phone;
    public $address;
    public $urlScheduleVisite;
    public $urlHowToGetThere;
    public $enrollment;
    public $getImage;
    public $selectedSegments = [];

    public function mount (School $school) {
        $this->school            = $school;
        $this->image             = $school->image;
        $this->title             = $school->title;
        $this->phone             = $school->phone;
        $this->address           = $school->address;
        $this->urlScheduleVisite = $school->urlScheduleVisite;
        $this->urlHowToGetThere  = $school->urlHowToGetThere;
        $this->enrollment        = $school->enrollment;
        $this->getImage          = $school->getImage;

        // Preencher o array $selectedSegments com os IDs dos segmentos já associados à escola
        $this->selectedSegments = $this->school->segments->pluck('id')->toArray();

    }

    public function updateSchool() {
        $this->school->update([
            'title' => $this->title,
            'phone' => $this->phone,
            'address' => $this->address,
            'urlScheduleVisite' => $this->urlScheduleVisite,
            'urlHowToGetThere' => $this->urlHowToGetThere,
            'enrollment' => $this->enrollment
        ]);

        if ($this->getImage !== null && $this->getImage !== '') {
            $this->getImage->storeAs('school/','image_'.$this->school->id.'.jpg', 'public');
            $this->school->update(['image'=>'school/image_'.$this->school->id.'.jpg']);
        }

        $this->school->segments()->sync($this->selectedSegments);

        $this->dispatch('form-updated');

    }

    public function render()
    {
        return view('livewire.admin.school.edit', [
            'segments' => Segment::all()
        ]);
    }
}
