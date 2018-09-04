<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       User::create([
       	'name'		=>'Filipe Souza',
       	'email'		=>'filipe@gmail.com',
       	'password'	=>bcrypt('123'),
       	]);
    }
}
//https://github.com/jeroennoten/Laravel-AdminLTE
//#composer dump-autoload 
	//insere dados no bd
//#php artisan db:seed
