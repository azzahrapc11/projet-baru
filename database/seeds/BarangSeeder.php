<?php

use Illuminate\Database\Seeder;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     $faker = Faker\Factory::create(); //import library faker
	 
	 $limit = 5; //batasan berapa banyak data
	 
	 for ($i = 0; $i < $limit; $i++){
		 DB::table('barangs')->insert([ //mengisi data di database
		'nama_barang' => $faker->name,//email unique sehingga tidak ada yg sama
		 'stok' => $faker->randomNumber,
		 'harga' => $faker->randomNumber,
		 'expired_date' => $faker->dateTime,
		 'tanggal_produksi' => $faker->dateTime,
	
	
	 ]);
    }
}
}