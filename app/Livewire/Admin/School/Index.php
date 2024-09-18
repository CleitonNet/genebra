<?php

namespace App\Livewire\Admin\School;

use App\Models\School;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class Index extends Component
{
    public function deleteSchool($schoolId)
    {
        // Busca o registro no banco de dados
        $school = School::findOrFail($schoolId);

        // Se houver uma imagem associada, apaga o arquivo
        if ($school->image && Storage::exists('public/'.$school->image)) {
            Storage::delete('public/'.$school->image);
            session()->flash('message', 'Registro excluído com sucesso.');
        } else {
            session()->flash('message', 'Registro excluído com sucesso.');
        }


        // Exclui o registro do banco de dados
        $school->delete();

        // Emite uma mensagem de sucesso
        $this->dispatch('message');

    }

    public function render()
    {
        return view('livewire.admin.school.index', [
            'schools' => School::paginate(5)
        ]);
    }
}
