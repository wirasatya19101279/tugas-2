<?php

use Illuminate\Database\Seeder;


class produkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('produks')->insert(array(
          ['namaproduk'=>"Flashdisk 4GB KongStong",
          'id_kat'=>'3',
          'qyt'=>'210',
          'harga_jual'=>'60000',
          'harga_beli'=>'45000'],
          ['namaproduk'=>"Flashdisk 8GB KongStong",
          'id_kat'=>'3',
          'qty'=>'210',
          'harga_jual'=>'85000',
          'harga_beli'=>'60000']
      ));
    }
}
