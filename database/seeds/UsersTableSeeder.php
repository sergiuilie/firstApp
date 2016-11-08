<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        \App\Models\User::create([
            'name' => 'Sergiu Ilie',
            'email' => 'ilie.sergiu@it-systems.ro',
            'password' => bcrypt('123456'),
            'gender' => 0,
            'birthDate' => \Carbon\Carbon::createFromFormat("d-m-Y", '12-10-1994')
        ]);

        factory(\App\Models\User::class, 100)->create();
    }

}
