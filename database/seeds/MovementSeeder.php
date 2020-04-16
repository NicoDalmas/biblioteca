<?php

use Illuminate\Database\Seeder;
use App\Movement;

class MovementSeeder extends Seeder
{
    public function run(){
        $movement = new Movement();
        $movement->user_id = '1';
        $movement->book_id = '1';
        $movement->state = 'Retired';
        $movement->save();


        $movement = new Movement();
        $movement->user_id = '3';
        $movement->book_id = '1';
        $movement->state = 'Retired';
        $movement->save();
	

        $movement = new Movement();
        $movement->user_id = '3';
        $movement->book_id = '2';
        $movement->state = 'Retired';
        $movement->save();


        $movement = new Movement();
        $movement->user_id = '3';
        $movement->book_id = '2';
        $movement->state = 'Returned';
        $movement->save();

	}
}
