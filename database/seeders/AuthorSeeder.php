<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Database\Seeders\AuthorModel;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
{
    DB::table('authors')->insert([
        [
            'author_id' => (string) Str::uuid(),
            'author_name' => 'Tere Liye',
            'author_description' => 'Tere Liye book authors',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'author_id' => (string) Str::uuid(),
            'author_name' => 'Raditya Dika',
            'author_description' => 'Raditya Dika book authors',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
    ]);
}
}
