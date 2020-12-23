<?php

use App\Student;
use Illuminate\Database\Seeder;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Vaciar la tabla
        Student::truncate();

        $faker= \Faker\Factory::create();

        for ($i=0; $i<10; $i++){
            Student::create([
                'identificacion'=>$faker->unique()->numberBetween($min=10000, $max=99999),
                'nombres'=>$faker->name,
                'apellidos'=>$faker->lastName,
                'fecNac'=>$faker->dateTime,
                'nivel'=>$faker->numberBetween($min=1, $max=10),
                'seccion'=>$faker->numberBetween($min=1, $max=10),
            ]);
        }
    }
}
