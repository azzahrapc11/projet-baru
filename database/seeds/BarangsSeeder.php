<?php

use Illuminate\Database\Seeder;

class BarangsSeeder extends Seeder
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
		 'stok' => $faker->randomNumber(10),
		 'harga' => $faker->randomNumber(6),
		 'expired_date' => $faker->date,
		 'tanggal_produksi' => $faker->date,
	
	
	 ]);
    }
}
