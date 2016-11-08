<?php

use Illuminate\Database\Seeder;

class AddressTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        factory(\App\Models\Address::class, 200)->create();
    }

}
