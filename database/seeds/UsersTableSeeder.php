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
        $now = \Carbon\Carbon::now()->toDateTimeString();
        \App\User::create( [
            'name' => 'Prime Plus',
            'email' => 'teste@teste.com',
            'password' => bcrypt('12345678'),
            'admin' => '1',
            'created_at' => $now,
            'updated_at' => $now
        ]);
    }
}
