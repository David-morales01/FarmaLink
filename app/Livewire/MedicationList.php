<?php

namespace App\Livewire;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Medication;
use Carbon\Carbon;

class MedicationList extends DataTableComponent
{
    protected $model = Medication::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
        $this->setConfigurableAreas([
            'toolbar-left-end' => 'tables.buttons',
          ]);
    }

    public function columns(): array
    {
        return [
            Column::make("Id", "id")
                ->sortable(),
            Column::make("Nombre", "name")->searchable()->sortable(),
            Column::make("Descripción", "description")
                ->searchable()->sortable()->collapseAlways(),
            Column::make("Precio", "price")
                ->searchable()->sortable(),
            Column::make("Fecha de creación", "created_at")
                ->sortable()->format(
                    fn ($value) =>  Carbon::createFromFormat('Y-m-d H:i:s', $value)->format("d/m/y")
                ),
            Column::make("Fecha de edición", "updated_at")
                ->sortable()->format(
                    fn ($value) =>  Carbon::createFromFormat('Y-m-d H:i:s', $value)->format("d/m/y")
                ),
            Column::make("Acciones")
                ->label(
                    fn ($row) => view('tables.actions', compact('row'))
                ),
        ];
    }
}
