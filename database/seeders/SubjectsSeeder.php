<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubjectsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('email_subjects')->insert([
            [
                'subject' => 'Besoin de conseils'
            ],
            [
                'subject' => "Demande d'informations supplémentaires"
            ],
            [
                'subject' => 'Devis'
            ]
        ]);
    }
}
