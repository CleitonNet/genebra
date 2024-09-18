<?php

namespace App\Livewire\Admin\Slides;

use App\Models\Slides;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;

    public $slide;
    public $title1;
    public $colorTitle1;
    public $weightTitle1;
    public $title2;
    public $colorTitle2;
    public $weightTitle2;
    public $btnlabel1;
    public $btnaction1;
    public $btnlabel2;
    public $btnaction2;
    public $image;
    public $getImage;
    public $alignTitle1;
    public $alignTitle2;
    public $btnactionSlide;
    public $slideTarget;
    public $withTitle;
    public $withBtns;
    public $newPage1;
    public $newPage2;

    public function mount () {
        $this->colorTitle1 = '#FFFFFF';
        $this->weightTitle1 = 400;
        $this->colorTitle2 = '#FFFFFF';
        $this->weightTitle2 = 700;
        $this->alignTitle1 = 'left';
        $this->alignTitle2 = 'left';
    }

    public function carouselWithTitle() { $this->withTitle = 1; }
    public function carouselUntitle() { $this->withTitle = 0; $this->title1 = null; $this->title2 = null; }

    public function carouselWithBtns() { $this->withBtns = 1; }
    public function carouselUnBtns() { $this->withBtns = 0; $this->btnaction1 = null; $this->btnaction2 = null; $this->btnlabel2 = null; $this->btnlabel2 = null; }

    public function alignTitle1Define($align1) { $this->alignTitle1 = $align1; }
    public function alignTitle2Define($align2) { $this->alignTitle2 = $align2; }

    public function addWeightTitle1(){ if ($this->weightTitle1 < 900) { $this->weightTitle1 = $this->weightTitle1 + 100; } }
    public function minusWeightTitle1(){ if ($this->weightTitle1 > 100) { $this->weightTitle1 = $this->weightTitle1 - 100; } }
    public function addWeightTitle2() { if ($this->weightTitle2 < 900) { $this->weightTitle2 = $this->weightTitle2 + 100; } }
    public function minusWeightTitle2() { if ($this->weightTitle2 > 100) { $this->weightTitle2 = $this->weightTitle2 - 100; } }

    public function save () {
        $this->slide = Slides::create([
            'title1'            => $this->title1,
            'colorTitle1'       => $this->colorTitle1,
            'weightTitle1'      => $this->weightTitle1,
            'title2'            => $this->title2,
            'colorTitle2'       => $this->colorTitle2,
            'colorTitle2'       => $this->colorTitle2,
            'weightTitle2'      => $this->weightTitle2,
            'btnlabel1'         => $this->btnlabel1,
            'btnaction1'        => $this->btnaction1,
            'btnaction1Target'  => $this->btnaction1,
            'btnlabel2'         => $this->btnlabel2,
            'btnaction2'        => $this->btnaction2,
            'btnaction2Target'  => $this->btnaction2,
            'alignTitle1'       => $this->alignTitle1,
            'alignTitle2'       => $this->alignTitle2,
            'btnactionSlide'    => $this->btnactionSlide,
            'slideTarget'       => $this->slideTarget,
            'newPage1'          => $this->newPage1,
            'newPage2'          => $this->newPage2,
        ]);

        if ($this->getImage !== null && $this->getImage !== '') {
            $this->getImage->storeAs('carousel/','image_'.$this->slide->id.'.jpg', 'public');
            $this->slide->update(['image'=>'carousel/image_'.$this->slide->id.'.jpg']);
        }
        $this->redirectRoute('admin.slides.index');
    }

    public function render()
    {
        return view('livewire.admin.slides.create');
    }
}
