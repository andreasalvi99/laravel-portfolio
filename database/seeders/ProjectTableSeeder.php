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

        $newProject->nome = 'Wineguys';
        $newProject->cliente = 'Boolean';
        $newProject->periodo = '2026-04-01';
        $newProject->riassunto = "Wineguys nasce come progetto di gruppo finalizzato alla valutazione delle competenze acquisite nella prima parte del corso Boolean, con particolare focus su HTML, CSS, SQL, React, Node.js ed Express.
        La passione condivisa per il mondo del vino e l’esperienza maturata nel settore ci hanno permesso di progettare un database solido e ben strutturato, elemento fondamentale per garantire affidabilità ed efficienza all’intera applicazione.
        L’e-commerce sviluppato è completamente funzionante e consente all’utente di visualizzare uno o più vini, selezionare quantità variabili in base alle disponibilità di magazzino e completare l’acquisto tramite una procedura intuitiva e fluida. Il sistema include inoltre un form dedicato all’inserimento degli indirizzi di spedizione e fatturazione, oltre alla possibilità di effettuare pagamenti sia con carta di credito sia tramite PayPal.";

        $newProject->save();
    }
}
