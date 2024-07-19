<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use PhpParser\Node\Stmt\Foreach_;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $trains = [
            [
                "Azienda" => "Trenitalia",
                "Stazione_di_partenza" => "Roma Termini",
                "Stazione_di_arrivo" => "Milano Centrale",
                "Orario_di_partenza" => "08:00",
                "Orario_di_arrivo" => "11:00",
                "Codice_Treno" => "FR1234",
                "Numero_Carrozze" => "10",
                "In_orario" => true,
                "Cancellato" => false,
            ],
            [
                "Azienda" => "Italo",
                "Stazione_di_partenza" => "Napoli Centrale",
                "Stazione_di_arrivo" => "Torino Porta Nuova",
                "Orario_di_partenza" => "09:30",
                "Orario_di_arrivo" => "14:00",
                "Codice_Treno" => "IT5678",
                "Numero_Carrozze" => "8",
                "In_orario" => false,
                "Cancellato" => false,
            ],
            [
                "Azienda" => "Trenitalia",
                "Stazione_di_partenza" => "Venezia Santa Lucia",
                "Stazione_di_arrivo" => "Firenze Santa Maria Novella",
                "Orario_di_partenza" => "10:15",
                "Orario_di_arrivo" => "12:45",
                "Codice_Treno" => "FR9012",
                "Numero_Carrozze" => "9",
                "In_orario" => true,
                "Cancellato" => false,
            ],
            [
                "Azienda" => "Italo",
                "Stazione_di_partenza" => "Bologna Centrale",
                "Stazione_di_arrivo" => "Verona Porta Nuova",
                "Orario_di_partenza" => "11:45",
                "Orario_di_arrivo" => "13:00",
                "Codice_Treno" => "IT3456",
                "Numero_Carrozze" => "7",
                "In_orario" => false,
                "Cancellato" => true,
            ],
            [
                "Azienda" => "Trenitalia",
                "Stazione_di_partenza" => "Genova Piazza Principe",
                "Stazione_di_arrivo" => "Pisa Centrale",
                "Orario_di_partenza" => "13:30",
                "Orario_di_arrivo" => "15:30",
                "Codice_Treno" => "FR7890",
                "Numero_Carrozze" => "6",
                "In_orario" => true,
                "Cancellato" => false,
            ]
        ]; // ? ARRAY ASSOCIATIVO PER AGGIUNGERE I DATI A MANO NEL DB TRAMITE SEEDER

        // > Foreach CHE CICLA I DATI DELL'ARRAY , CREA UNA NUOVA ISTANZA DELLA CLASSE(MODEL) DA SALVARE ED ASSEGNAMO I VALORE ALLE VARIABILI DI INSTANZA
        foreach ($trains as $trainData) {
            $trainList = new Train();
            $trainList->Azienda = $trainData["Azienda"];
            $trainList->Stazione_di_partenza = $trainData["Stazione_di_partenza"];
            $trainList->Stazione_di_arrivo = $trainData["Stazione_di_arrivo"];
            $trainList->Orario_di_partenza = $trainData["Orario_di_partenza"];
            $trainList->Orario_di_arrivo = $trainData["Orario_di_arrivo"];
            $trainList->Codice_Treno = $trainData["Codice_Treno"];
            $trainList->Numero_Carrozze = $trainData["Numero_Carrozze"];
            $trainList->In_orario = $trainData["In_orario"];
            $trainList->Cancellato = $trainData["Cancellato"];
            $trainList->save();
        }
    }
}
