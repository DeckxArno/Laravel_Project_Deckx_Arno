<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ContactMessage;

class ContactSeeder extends Seeder
{
    public function run(): void
    {
        ContactMessage::updateOrCreate(
            ['email' => 'user@ehb.be'],
            [
                'name' => 'Pieter Peeters',
                'subject' => 'Vraag naar Admin rechten',
                'message' => 'Hallo, ik ben van Scouts X. Wij zouden graag een admin account hebben zodat we onze eigen accounts kunnen beheren. Is dit mogelijk?',
                'created_at' => now()->subDays(3),
            ]
        );

        ContactMessage::updateOrCreate(
            ['email' => 'admin@ehb.be'],
            [
                'name' => 'Admin Support',
                'subject' => 'Feedback over de website',
                'message' => 'Bij het tonen/toevoegen van de activiteiten en spellen botsen we steeds tegen een error. Zelf heb ik hem nog niet gevonden. Kunnen jullie er is naar kijken?',
                'created_at' => now()->subDay(),
            ]
        );
    }
}
