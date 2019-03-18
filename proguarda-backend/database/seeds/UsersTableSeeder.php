<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'nome' => 'Cristóvão Bahiense dos Santos',
            'matricula' => '1111',
            'cpf' => '2222',
            'email' => 'bahiense500@gmail.com',
            'password' => bcrypt('1234'),
        ]);
    }
}
