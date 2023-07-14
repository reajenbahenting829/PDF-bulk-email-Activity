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
                'address' => 'Cang-iras, Catigbian, Bohol.',
                'birth_date' => '1995-12-23',
                'email' => 'eraenjgnitnehab@gmail.com',
                'initial_deposit' => 20000,
            ],
            [
                'last_name' => 'Mulato',
                'first_name' => 'Sarah Jane',
                'middle_name' => 'Buaya',
                'phone_number' => '09482772278',
                'address' => 'Buwangan, Clarin, Bohol.',
                'birth_date' => '1997-03-13',
                'email' => 'sarahjanemulato@gmail.com',
                'initial_deposit' => 18000,
            ],
            [
                'last_name' => 'Buaya',
                'first_name' => 'Elgene',
                'middle_name' => 'Gonzaga',
                'phone_number' => '09398292167',
                'address' => 'San Antonio, Sagbayan, Bohol.',
                'birth_date' => '2002-08-21',
                'email' => 'elgenebuaya@gmail.com',
                'initial_deposit' => 30000,
            ],
            [
                'last_name' => 'Maldura',
                'first_name' => 'Realyn',
                'middle_name' => 'Buaya',
                'phone_number' => '09755453647',
                'address' => 'Mantasida, Catigbian, Bohol.',
                'birth_date' => '2002-04-16',
                'email' => 'realynmadura@gmail.com',
                'initial_deposit' => 30000,
            ],
            [
                'last_name' => 'Gonzaga',
                'first_name' => 'Celedonio',
                'middle_name' => 'Buaya',
                'phone_number' => '0937562823',
                'address' => 'Salvador, Cortes, Bohol.',
                'birth_date' => '1991-05-11',
                'email' => 'celedoniogonzaga@gmail.com',
                'initial_deposit' => 20000,
            ],
            [
                'last_name' => 'Gonzaga',
                'first_name' => 'Misel',
                'middle_name' => 'Buaya',
                'phone_number' => '0987562828',
                'address' => 'Tawala, Panglao, Bohol.',
                'birth_date' => '1990-12-16',
                'email' => 'miselgonzaga@gmail.com',
                'initial_deposit' => 20000,
            ],
            [
                'last_name' => 'Concon',
                'first_name' => 'Vince Peter',
                'middle_name' => 'Buaya',
                'phone_number' => '0987562828',
                'address' => 'Salvador, Cortes, Bohol.',
                'birth_date' => '1997-11-10',
                'email' => 'vinceconcon@gmail.com',
                'initial_deposit' => 20000,
            ],
            [
                'last_name' => 'gnitnehab',
                'first_name' => 'Aer Nej.',
                'middle_name' => 'AyauB',
                'phone_number' => '0947562828',
                'address' => 'Triple, Catigbian, Bohol.',
                'birth_date' => '1995-11-23',
                'email' => 'jenruy123.com',
                'initial_deposit' => 20000,
            ],
            [
                'last_name' => 'Maldura',
                'first_name' => 'Rio',
                'middle_name' => 'Buaya',
                'phone_number' => '0976562828',
                'address' => 'Taloto, Tagbilaran, Bohol.',
                'birth_date' => '2000-05-11',
                'email' => 'riomaldura@gmail.com',
                'initial_deposit' => 20000,
            ],
            [
                'last_name' => 'Buaya',
                'first_name' => 'Grace',
                'middle_name' => 'Buaya',
                'phone_number' => '0977562828',
                'address' => 'Sagbayan, Catigbian, Bohol.',
                'birth_date' => '2003-10-23',
                'email' => 'gracebuaya@gmail.com',
                'initial_deposit' => 20000,
            ],
        ];

        foreach ($client as $c) {
            Client::create($c);
        }
    }
}
