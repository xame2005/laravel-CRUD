<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('expense_reports')->insert([
            'id' => Int::random(10),
            'password' => Hash::make('password'),
        ]);
    }
}
