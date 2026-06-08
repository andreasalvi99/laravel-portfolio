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

        $newProject->id = 2;
        $newProject->nome = 'DC Comics';
        $newProject->cliente = 'Boolean';
        $newProject->periodo = '2026-01-01';
        $newProject->riassunto = 'Sempre per verificare le competenze acquisite (CSS, HTML) Boolean ha commisionato la riproduzione di una pagina del sito web della DC.';

        $newProject->save();
    }
}
