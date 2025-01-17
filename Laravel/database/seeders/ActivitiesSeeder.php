<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

class ActivitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('activities')->insert([
            [
                'title' => 'Bosspelen',
                'description' => 'Een avontuurlijk spel waarbij leden verschillende posten in het bos moeten vinden met een kaart en kompas.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Waterestafette',
                'description' => 'Een spel waarin teams tegen elkaar strijden om water zo snel mogelijk naar de finish te transporteren zonder iets te morsen.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Reuze ganzenbord',
                'description' => 'Een levensgroot bordspel waarbij de leden opdrachten uitvoeren bij elke stap die ze zetten.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Vuurtechnieken leren',
                'description' => 'Leden leren verschillende methoden om een kampvuur te maken en veilig te beheren.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
