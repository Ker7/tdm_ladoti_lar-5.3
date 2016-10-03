<?php

use Illuminate\Database\Seeder;

use Carbon\Carbon;
use Faker\Factory as Factory;

class FieldsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('userfield_habit')->delete();
        
        $fields = array(
            array('id' => 1,'name' => 'Tervis',             'color' => '#FF6384','author_user' => 1,'clicked' => 0, 'verified' => 0, 'created_at' => Carbon::now()),
            array('id' => 2,'name' => 'Vaimsus',            'color' => '#4BC0C0','author_user' => 2,'clicked' => 0, 'verified' => 0, 'created_at' => Carbon::now()),
            array('id' => 3,'name' => 'Finants',            'color' => '#9476AB','author_user' => 2,'clicked' => 1, 'verified' => 0, 'created_at' => Carbon::now()),
            array('id' => 4,'name' => 'Sotsialiseerumine',  'color' => '#E7E9ED','author_user' => 2,'clicked' => 1, 'verified' => 0, 'created_at' => Carbon::now()),
            array('id' => 5,'name' => 'Muusika',            'color' => '#36A2EB','author_user' => 2,'clicked' => 1, 'verified' => 0, 'created_at' => Carbon::now()),
            array('id' => 6,'name' => 'Programmeerimine',   'color' => '#D4BA6A','author_user' => 2,'clicked' => 1, 'verified' => 0, 'created_at' => Carbon::now()),
            array('id' => 7,'name' => 'T��',                'color' => '#420029','author_user' => 2,'clicked' => 1, 'verified' => 0, 'created_at' => Carbon::now())
            );
        
        //"#FF6384","#4BC0C0","#9476AB","#E7E9ED","#36A2EB","#D4BA6A","#420029","#E7E9ED"
        
        DB::table('fields')->insert($fields);
        
        
        $faker = Factory::create();
        foreach (range(1,100) as $index) {
	        DB::table('ufdatalog')->insert([
                'id' => $index,
                'userfield_id' => Rand(1,8),
                'date' => $faker->dateTimeBetween('-3 month', 'now')->format('Y-m-d'),
	            'value' => Rand(0,100),
	            'comment' => $faker->sentence
	       ]);
        }
    }
}
