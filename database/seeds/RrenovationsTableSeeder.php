<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class RrenovationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rrenovations')->insert([
            [
            'renotype'=>'PPS',
            'renoname'=>'Salle de Bain'
            ],
            [
            'renotype'=>'PPS',
            'renoname'=>'Cuisine'
            ],
            [
            'renotype'=>'PPS',
            'renoname'=>'Sol-Mur-Palfonds'
            ],
            [
            'renotype'=>'PPS',
            'renoname'=>'Fenétres'
            ],
            [
            'renotype'=>'PPS',
            'renoname'=>'Menuiseries interieurs'
            ],
            [
            'renotype'=>'PPS',
            'renoname'=>'Toiture-Charpente-Combles'
            ],
            [
            'renotype'=>'PPS',
            'renoname'=>'Isolation-Chauffage-Clim'
            ],
            [
            'renotype'=>'PPS',
            'renoname'=>'Electricité'
            ],

            [
            'renotype'=>'PPS',
            'renoname'=>'Autres'
            ],
            [
            'renotype'=>'PC',
            'renoname'=>'Appartement'
            ],
            [
            'renotype'=>'PC',
            'renoname'=>'Maison'
            ],
            [
            'renotype'=>'PC',
            'renoname'=>'Studio'
            ],
            [
            'renotype'=>'PC',
            'renoname'=>'Extension-Surélévation'
            ],
            [
            'renotype'=>'PC',
            'renoname'=>'Bar-Restaurent-commerce'
            ]
            
        ]);
    }
}
