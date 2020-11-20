<?php

use Illuminate\Database\Seeder;
use App\Molels\tugasuts;

class tugasutsSeeder extends Seeder
{
    /**
    * Run the database seeds.
    *
    * @return void
    */
    public function run()
    {
        //
        DB::table('tugasuts')->insert(array(
            [
                'kategori'=>'keyboard',
                'keterangan'=>'segala macam keyboard pc, laptop, tv'
            ],
            [
                'kategori'=>'mouse',
                'keterangan'=>'segala macam mouse wire maupun wireless'
            ],
            [
                'kategori'=>'flasdisk',
                'keterangan'=>'segala macam merk, ukuran flasdisk'
            ],
            [
                'kategori'=>'asdjasdjkashd',
                'keterangan'=>'segala macam merk, ukuran flasdisk'
            ]
        ));
    }
}
