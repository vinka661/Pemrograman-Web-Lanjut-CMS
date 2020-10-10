<?php

use Illuminate\Database\Seeder;

class CollectionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Collection::insert([
            [
              'nama' => 'Lenovo',
              'merk' =>  'Lenovo Ideapad 320-14IKB',
              'keterangan' => 'Operating System : Windows 10 Home 64 Bit
                                Processor : Intel Core i5 7200U (Dual Core 2.5 - 3.1 GHZ, 3MB)
                                Memory RAM : 4 GB DDR4 Onboard + 1 Slot kosong (Max 12 GB)
                                Penyimpanan : 1 TB
                                Ukuran Layar : 14 inch HD (1366 x 768) Antiglare
                                Resolusi : 1366 x 768'
            ],
            [
                'nama' => 'Lenovo',
                'merk' =>  'Lenovo Ideapad S340 14',
                'keterangan' => 'Operating System : Windows 10 Home
                                    Processor : Intel Core i5-8265U processor
                                    Memory RAM : 16 GB (8+8) DDR4 RAM
                                    Penyimpanan : HDD SATA 1 TB / 2 TB
                                    Ukuran Layar : 14 inch FHD (1920 x 1080) IPS, 250 nits'
            ],
            [
                'nama' => 'HP',
                'merk' =>  'HP Chromebook',
                'keterangan' => 'Processor : Intel Celeron N3060 (1.60 GHZ, Turbo up to 2.48 GHz) 2 MB 1600 MHz L2 cache, 2 cores
                                    Memory RAM : 2 GB or 4 GB
                                    Penyimpanan : 16 GB or 32 GB eMMC
                                    Ukuran Layar : 11.6 inch diagonal HD WELD 1366 x 768, Corning Gorilla Glass NBT (Touch Version)
                                    Resolusi : 1366 x 768'
            ],
            [
                'nama' => 'HP',
                'merk' =>  'HP Omen DH0105TX',
                'keterangan' => 'Operating System : Windows 10 Home
                                    Processor : Intel Core i7-9750H
                                    Memory RAM : 16 GB DDR4
                                    Penyimpanan : 512 GB SSD + 1 TB HDD
                                    Ukuran Layar : 15.6 inch Full HD IPS Anti-Glare, 144 Hz'
            ],
            [
                  'nama' => 'Asus',
                  'merk' =>  'Asus ZenBook Flip 14',
                  'keterangan' => 'Operating System : Windows 10
                                    Processor : Intel Core i78550U, 2.5 GHz 
                                    Memory RAM : 16 GB
                                    Penyimpanan : 512 GB HDD
                                    Ukuran Layar : 14 inch
                                    Resolusi : 1920 x 1080 pixels'
            ],
            [
                  'nama' => 'Asus',
                  'merk' =>  'Asus VivoBook S13 S330FA',
                  'keterangan' => 'Operating System : Windows 10 Home
                                    Processor : Intel Core i5-8265U
                                    Memory RAM : 4 GB LPDDR3
                                    Penyimpanan : 256 GB SSD
                                    Ukuran Layar : 13.3-inch Full HD Ultraslim'
            ],
        ]);
    }
}
