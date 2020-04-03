<?php

use Illuminate\Database\Seeder;
use App\Book;
class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $book = new Book();
        $book->name = 'Cinco semanas en globo';
        $book->author = 'Jules Verne';
        $book->subject = 'Adventures';
        $book->description = 'Adventures about 5 people on aerostate globe, on a travel around the world';
        $book->date = '1889';
        $book->save();
    }
}
