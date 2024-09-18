<?php

namespace App\Livewire\Admin\Slides;

use App\Models\Slides;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class Index extends Component
{
    public function deleteSlide($slideId)
    {
        // Busca o registro no banco de dados
        $slide = Slides::findOrFail($slideId);

        // Se houver uma imagem associada, apaga o arquivo
        if ($slide->image && Storage::exists('public/'.$slide->image)) {
            Storage::delete('public/'.$slide->image);
            session()->flash('message', 'Slide excluído com sucesso.');
        } else {
            session()->flash('message', 'Slide excluído com sucesso.');
        }


        // Exclui o registro do banco de dados
        $slide->delete();

        // Emite uma mensagem de sucesso
        $this->dispatch('message');

    }

    public function render()
    {
        return view('livewire.admin.slides.index',[
            'slides' => Slides::paginate(5)
        ]);
    }
}
