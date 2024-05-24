<?php

namespace App\Livewire;

use App\Models\Medication;
use Livewire\Component;
use LivewireUI\Modal\ModalComponent;
class MedicationCreate extends ModalComponent
{
    public $name;
    public $description;
    public $price;
    public static function modalMaxWidth(): string
    {
        return 'xl';
    }
    protected $rules = [

        'name' => 'required',
        'description' => 'required',
        'price' => 'required',
    ];

    public function submit()
    {
        $this->validate();


        Medication::create([
            'name' => $this->name,
            'description' => $this->description,
            'price' => $this->price,
        ]);

        $this->forceClose()->closeModal();

        // $this->dispatchBrowserEvent('swal:timer', [
        //     'title' => 'Medicamento creado exitosamente',
        //     'type' => 'success',
        //     'timer' => 1500,
        //     'showConfirmButton' => false
        // ]);

    }
    private function resetValues()
    {
        $this->name = null;
        $this->description = null;
        $this->price =  "";
    }
    public function render()
    {
        return view('livewire.medication-create');
    }
}
