<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Client;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Client::factory(30)->create();

        $client = [
            [
                'last_name' => 'Bahenting',
                'first_name' => 'Rea Jen',
                'middle_name' => 'Buaya',
                'phone_number' => '09457562829',
                'address' => 'Kang-iras, Catigbian, Bohol.',
                'birth_date' => '1995-12-23',
                'email' => 'eraenjgnitnehab@gmail.com',
                'initial_deposit' => 10000,
            ],
            [
                'last_name' => 'Bahinting',
                'first_name' => 'Sarah',
                'middle_name' => 'Buaya',
                'phone_number' => '09632715955',
                'address' => 'Kang-iras, Catigbian, Bohol.',
                'birth_date' => '1998-03-13',
                'email' => 'archer.tarius@gmail.com',
                'initial_deposit' => 15000,
            ],
            [
                'last_name' => 'gnitnehab',
                'first_name' => 'Aer Nej.',
                'middle_name' => 'AyauB',
                'phone_number' => '0947562828',
                'address' => 'Kang-ras, Catigbian, Bohol.',
                'birth_date' => '1995-11-23',
                'email' => 'reajenbahenting121@gmail.com',
                'initial_deposit' => 20000,
            ],

            [
                'last_name' => 'Maldura',
                'first_name' => 'Realyn',
                'middle_name' => 'Buaya',
                'phone_number' => '09755453647',
                'address' => 'Kang-iras, Catigbian, Bohol.',
                'birth_date' => '2002-04-16',
                'email' => 'jenruy123@gmail.com',
                'initial_deposit' => 16000,
            ],
        ];

        foreach ($client as $c) {
            Client::create($c);
        }
    }
}
