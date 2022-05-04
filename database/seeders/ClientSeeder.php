<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $clients = [
            [
                'invoice' => '#54815',
                'fullname' => 'Bijoy Dhar',
                'email' => 'Bijoy@gmail.com',
                'amount' => '548050'
            ],
            [
                'invoice' => '#54754',
                'fullname' => 'Joy Dhar',
                'email' => 'joybd11632@gmail.com',
                'amount' => '5050'
            ],
            [
                'invoice' => '#1235',
                'fullname' => 'Rose Potter',
                'email' => 'Rose_Potter@gmail.com',
                'amount' => '255050'
            ],
            [
                'invoice' => '#1236',
                'fullname' => 'Bert Fletcher',
                'email' => 'Bert_Fletcher@gmail.com',
                'amount' => '514250'
            ],
            [
                'invoice' => '#0275',
                'fullname' => 'Jimmie Mills',
                'email' => 'Jimmie_Mills@gmail.com',
                'amount' => '355050'
            ],
            [
                'invoice' => '#1238',
                'fullname' => 'Armando Leonard',
                'email' => 'Armando_Leonard@gmail.com',
                'amount' => '364250'
            ], [
                'invoice' => '#90275',
                'fullname' => 'Irene Watts',
                'email' => 'Irene_Watts@gmail.com',
                'amount' => '25050'
            ],
            [
                'invoice' => '#12359',
                'fullname' => 'Ellen Dennis',
                'email' => 'Ellen_ennis@gmail.com',
                'amount' => '814250'
            ],
            [
                'invoice' => '#12375',
                'fullname' => 'Herbert Tyler',
                'email' => 'Herbert_Tyler@gmail.com',
                'amount' => '698745'
            ],
            [
                'invoice' => '#12435',
                'fullname' => 'Kayla Ballard',
                'email' => 'Kayla_Ballard@gmail.com',
                'amount' => '258794'
            ], [
                'invoice' => '#12235',
                'fullname' => 'Amelia Patterson',
                'email' => 'Amelia87Patterson@gmail.com',
                'amount' => '564648'
            ],
            [
                'invoice' => '#01235',
                'fullname' => 'Mark Martinez',
                'email' => 'Mark _artinez@gmail.com',
                'amount' => '914250'
            ],
        ];
        DB::table('clients')->insert($clients);
    }
}
