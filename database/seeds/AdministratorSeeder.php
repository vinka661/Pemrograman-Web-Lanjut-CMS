<?php

use Illuminate\Database\Seeder;

class AdministratorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new \App\User; //menambahkan data berdasarkan model User
        $admin->name = "administrator";
        $admin->email = "admin@gmail.com";
        $admin->password = \Hash::make("admin123");
        $admin->roles = "Administrator";
        $admin->foto = url("../assets/img/admin.jpg");

        $admin->save(); //untuk save ke db

        $this->command->info("Admin berhasil ditambah");
    }
}
