<?php

use Illuminate\Database\Seeder;

class BrandTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Brand::insert([
            [
              'nama' => 'Lenovo',
              'keterangan' =>  'Brand laptop terbaik nomor 1 yaitu Lenovo Ideapad 320-14IKB',
              'gambar' => url("1.jpg")
            ],
            [
                'nama' => 'HP',
                'keterangan' =>  'Brand laptop terbaik nomor 2 yaitu HP Chromebook',
                'gambar' => url("../assets/img/laptop/2.jpg")
            ],
              [
                'nama' => 'Asus',
                'keterangan' =>  'Brand laptop terbaik nomor 3 yaitu Asus ZenBook Flip 14',
                'gambar' => url("../assets/img/laptop/3.jpg")
              ],
        ]);
    }
}
