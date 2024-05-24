<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Medication;

class MedicationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Medication::create([
            'name' => 'Acenocumarol',
            'description' => 'El acenocumarol es un medicamento que sirve para mantener la sangre líquida. Acenocumarol evita que la sangre se espese y circule bien por todo el cuerpo.',
            'price' =>  50.50
        ]);
        Medication::create([
            'name' => 'Aripiprazol',
            'description' => 'El aripiprazol es un medicamento antipsicótico, utilizado para tratar problemas de salud mental, como delirios y alucinaciones.',
            'price' =>  500.50
        ]);
        Medication::create([
            'name' => 'Amoxicilina',
            'description' => 'La amoxicilina es un antibiótico. Es un medicamento que se utiliza para las infecciones provocadas por algunos tipos por bacterias.',
            'price' =>  550.50
        ]);

        // Crear 10 registros aleatorios con MedicationFactory
        Medication::factory()->count(10)->create();
    }
}
