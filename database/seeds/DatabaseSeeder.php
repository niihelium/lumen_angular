<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        for ($i = 0; $i < 5; ++$i) {
            $Book = App\Book::create([
          'title' => 'Title '.$i,
          'author' => 'Author '.$i, ]);
        }
    }
}
