<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Teacher;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $teachers = [
            [
                'name' => 'Ahmed Alharbi',
            ],
            [
                'name' => 'example',
            ],
            [
                'name' => 'khlel almalki',
            ],
            [
                'name' => 'khalid alarfj',
            ],
            [
                'name' => 'mohammed abdullah',
            ],
            [
                'name' => 'majed alrbeah',
            ],
            [
                'name' => 'abdulmalik alomayri',
            ],
            [
                'name' => 'majed abdullah',
            ],
            [
                'name' => 'naruto uzumaki',
            ],
            [
                'name' => 'ahmed alzhrani',
            ]
            ];

        app('db')->table('teachers')->delete();
        app('db')->table('teachers')->insert($teachers);
    }
}
