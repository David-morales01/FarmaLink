<?php

namespace App\Livewire;

use Livewire\Component;

class MedicationDetail extends Component
{
    public $id;

    public function mount($id)
    {
        $this->id = $id;
    }
    public function render()
    {
        return view('livewire.medication-detail');
    }
}
