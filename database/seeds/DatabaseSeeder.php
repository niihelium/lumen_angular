<?php

use Illuminate\Database\Seeder;
use App\Models\Book;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        for ($i = 0; $i < 5; ++$i) {
            $Book = Book::create([
          'title' => 'Title '.$i,
          'author' => 'Author '.$i,
          'description' => 'Description '.$i,
          'year' => 2015 + $i ]);
        }
    }
}
