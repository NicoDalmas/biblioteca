<?php

use Illuminate\Database\Seeder;
use App\UserLibrary;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new UserLibrary();
        $user->name = 'User';
        $user->email = 'user@example.com';
        $user->password = bcrypt('secret');
        $user->rol_id = '2';
        $user->save();

        $user = new UserLibrary();
        $user->name = 'Admin';
        $user->email = 'admin@example.com';
        $user->password = bcrypt('secret');
        $user->rol_id = '1';
        $user->save();

        $user = new UserLibrary();
        $user->name = 'Nicolás Dalmás';
        $user->email = 'ndalmas9@gmail.com';
        $user->password = bcrypt('nicolas123');
        $user->rol_id = '1';
        $user->save();
        


       /* $user = factory(UserLibrary::class)->create([
	        'name' => 'Nicolás Dalmás',
	        'email' => 'ndalmas9@gmail.com',
	        //'phone' => '153796796',
	        //'address' => 'Francia 4731',
	        'password' => bcrypt('nicolas123'),
	        'rol_id' => '1'
	        ]); */

    }
}
