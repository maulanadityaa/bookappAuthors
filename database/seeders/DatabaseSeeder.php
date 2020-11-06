<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('books')->insert([
        //     'title' => 'War of the Worlds',
        //     'description' => 'A science fiction masterpiece about Martians invading London',
        //     'author' => 'H. G. Wells',
        //     'created_at' => Carbon::now(),
        //     'updated_at' => Carbon::now(),
        // ]);

        // DB::table('books')->insert([
        //     'title' => 'A  Wrinkle in Time',
        //     'description' => 'A young girl goes on a mission to save her father who has gone missing after working on a mysterious project called tesseract.',
        //     'author' => 'Madeleine L\'Eagle',
        //     'created_at' => Carbon::now(),
        //     'updated_at' => Carbon::now()
        // ]);

        DB::table('authors')->insert([
            'name' => 'Rick Riordan',
            'gender' => 'male',
            'biography' => 'Seorang lelaki asal Texas berumur 56 tahun',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('authors')->insert([
            'name' => 'Madeleine L\'Engle',
            'gender' => 'female',
            'biography' => 'Seorang lelaki asal New York yang meninggal saat berumur 89 tahun',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
