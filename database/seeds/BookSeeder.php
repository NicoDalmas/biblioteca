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

        $book = new Book();
        $book->name = 'The Great Gatsby';
        $book->author = 'Scott Fritzgal';
        $book->subject = 'Drama';
        $book->description = 'A rich guy in NYC, long island, with a lot of friend and parties.';
        $book->date = '1920';
        $book->save();

        $book = new Book();
        $book->name = 'The old man & the sea';
        $book->author = 'Ernest Hemmingway';
        $book->subject = 'Novel';
        $book->description = 'A old man in boat travel around the sea with himself.';
        $book->date = '1952';
        $book->save();
    }
}
