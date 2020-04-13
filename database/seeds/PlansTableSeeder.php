<?php

use Illuminate\Database\Seeder;

class PlansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = \Carbon\Carbon::now()->toDateTimeString();
        \App\Plan::create( [
            'name' => 'Prime Plus',
            'description' => 'Entrega realizada atráves dos nossos parceiros de logística.',
            'price' => '150.00',
            'percentage' => '15',
            'status' => 'active',
            'created_at' => $now,
            'updated_at' => $now
        ]);
    }
}
