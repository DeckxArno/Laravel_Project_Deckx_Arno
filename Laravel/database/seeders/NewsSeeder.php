<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\News;
use Illuminate\Support\Carbon;

class NewsSeeder extends Seeder
{
    public function run(): void
    {
        News::updateOrCreate(
            ['title' => 'Nieuwe spelcategorie: Wateractiviteiten'],
            [
                'content' => 'Activiteiten Net introduceert een nieuwe categorie: wateractiviteiten! Perfect voor warme zomerdagen op kamp. Ontdek nu de leukste spellen met water.',
                'published_at' => Carbon::now()->subDays(2),
                'image' => 'news_images/wateractiviteiten.jpg',
            ]
        );

        News::updateOrCreate(
            ['title' => 'Handleiding voor nieuwe leiding beschikbaar'],
            [
                'content' => 'Om nieuwe leiding een goede start te geven, heeft Activiteiten Net een uitgebreide handleiding toegevoegd. Dit document bevat tips en voorbeelden voor het organiseren van activiteiten.',
                'published_at' => Carbon::now()->subDay(),
                'image' => 'news_images/handleiding_leiding.jpg',
            ]
        );

        News::updateOrCreate(
            ['title' => 'Top 10 avondspellen voor op kamp'],
            [
                'content' => 'Activiteiten Net heeft een lijst samengesteld met de top 10 favoriete avondspellen van gebruikers. Perfect om de avond op een leuke manier af te sluiten!',
                'published_at' => Carbon::now()->subDays(3),
                'image' => 'news_images/avondspellen.jpg',
            ]
        );

        News::updateOrCreate(
            ['title' => 'Kampverhalen: Deel jouw ervaring!'],
            [
                'content' => 'Gebruikers kunnen nu hun leukste kampverhalen en ervaringen delen via Activiteiten Net. Inspireer anderen met jouw creativiteit!',
                'published_at' => Carbon::now()->subDays(4),
                'image' => 'news_images/kampverhalen.jpg',
            ]
        );
    }
}
