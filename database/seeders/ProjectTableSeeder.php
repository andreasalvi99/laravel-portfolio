<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $newProject = new Project();

        $newProject->nome = 'DC Comics';
        $newProject->cliente = 'Boolean';
        $newProject->periodo = '2026-01-01';
        $newProject->riassunto = 'Riproduzione del design grafico di una pagina web della DC. Il progetto aveva lo scopo di verificare le competenze acquisite in merito ad HTML, CSS e Bootstrap.';

        $newProject->save();
    }
}
