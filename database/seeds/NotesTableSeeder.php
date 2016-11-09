<?php

use Illuminate\Database\Seeder;

class NotesTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        \App\Models\Note::create([
            'body' => 'sdaklmsdlkm adlkmasd lasd',
            'user_id' => 1
        ]);
    }

}
