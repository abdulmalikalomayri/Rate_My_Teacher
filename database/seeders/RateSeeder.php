<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Teacher;
use App\Models\Rate;
class RateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $rate = new Rate();
        //
        // for ($i=1; $i < 10; $i++) { 
        //     # code...
        //     $rate->counter = 0;
        //     $teacher = Teacher::find($i);
            
        // }
        $rates = [
            [
                'counter' => 0,
                'teacher_id' =>1
            ],
            ];

        // app('db')->table('rates')->delete();
        // app('db')->table('rates')->insert($rates);

        // $teacher->rate()->save($rate);


            for ($i=1; $i < Teacher::get()->count()+1; $i++) { 
            $rate = new Rate;
            $rate->counter = 0;
            $rate->teacher_id = $i;
            $rate->save();
            }
        // $profile = new Profile;
        // $profile->telephone = '614-867-5309';

        // $user = User::find(212);
        // $user->profile()->save($profile);
        
        // User::findOrFail(1)->roles()->sync(1);
        // User::findOrFail(2)->roles()->sync(2);
        // User::findOrFail(3)->roles()->sync(2);
        // User::findOrFail(4)->roles()->sync(2);
        
        // $profile = new Profile();
        // $profile->dob = '20-03-1999';
        // $profile->bio = 'A professional programmer.';

        // $user = User::find(1);
        // $user->profile()->save($profile);
        // $teachers = [
        //     [
        //         'name' => 'Zebin Alharbi',
        //     ],
        //     ];

        // app('db')->table('teachers')->delete();
        // app('db')->table('teachers')->insert($teachers);
    }
}
