<?php

use Illuminate\Database\Seeder;
use App\Rol;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
    //	DB::statement('TRUNCATE TABLE roles RESTART IDENTITY CASCADE');
       
        $role = new Rol();
        $role->name = 'admin';
        $role->save();

        $role = new Rol();
        $role->name = 'user';
        $role->save();


    }
}
