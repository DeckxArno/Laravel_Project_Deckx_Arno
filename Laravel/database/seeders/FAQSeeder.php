<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\FAQCategory;
use App\Models\FAQ;

class FAQSeeder extends Seeder
{
    public function run(): void
    {
        $generalCategory = FAQCategory::updateOrCreate(
            ['name' => 'Algemeen'],
            ['description' => 'Algemene vragen over de website.']
        );

        $accountCategory = FAQCategory::updateOrCreate(
            ['name' => 'Account'],
            ['description' => 'Vragen over gebruikersaccounts.']
        );

        FAQ::updateOrCreate(
            ['question' => 'Hoe voeg ik een nieuwe jeugdgroep toe aan de site?'],
            [
                'answer' => 'Neem contact op met de beheerder om een nieuwe jeugdgroep te laten toevoegen.',
                'category_id' => $generalCategory->id,
            ]
        );

        FAQ::updateOrCreate(
            ['question' => 'Hoe wijzig ik mijn profielinformatie?'],
            [
                'answer' => 'Klik op je naam vanboven aan het scherm. Ga vervolgens naar profiel en daar kan je jouw gegevens aanpassen.',
                'category_id' => $accountCategory->id,
            ]
        );

        FAQ::updateOrCreate(
            ['question' => 'Hoe kan ik mijn account verwijderen?'],
            [
                'answer' => 'Neem contact op met onze klantenservice om je account te verwijderen.',
                'category_id' => $accountCategory->id,
            ]
        );
    }
}
