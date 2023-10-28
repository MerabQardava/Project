<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuizSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('quizzes')->insert([
            ['name' => 'qvizi 1', 'description' => 'qvizi 1'],
            ['name' => 'qvizi 2', 'description' => 'qvizi 2'],
            ['name' => 'qvizi 3', 'description' => 'qvizi 3'],
            ['name' => 'qvizi 4', 'description' => 'qvizi 4'],
            ['name' => 'qvizi 5', 'description' => 'qvizi 5'],

        ]);
    }
}
