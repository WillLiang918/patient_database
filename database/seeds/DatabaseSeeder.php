<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('users')->delete();
      DB::table('patients')->delete();

      DB::table('users')->insert(array(
        array('name'=>'John Doe','email'=>'john@example.com','password'=> bcrypt('password')),
        array('name'=>'Mark Johnson','email'=>'mark@example.com','password'=> bcrypt('password')),
        array('name'=>'Karl Hu','email'=>'karl@example.com','password'=> bcrypt('password')),
      ));

      DB::table('patients')->insert(array(
        array('name'=>'Marl Parker','address'=> rand(1, 20) . ' street','phone_number'=>'917-213-4525', 'date_of_birth' => "1990-02-12", 'age' => 25, 'user_id' => rand(1,3)),
        array('name'=>'Mary Jane','address'=> rand(1, 20) . ' street','phone_number'=>'917-123-4425', 'date_of_birth' => "1980-04-12", 'age' => 35, 'user_id' => rand(1,3)),
        array('name'=>'Sally Smith','address'=> rand(1, 20) . ' street','phone_number'=>'917-923-9345', 'date_of_birth' => "1988-02-12", 'age' => 27, 'user_id' => rand(1,3)),
        array('name'=>'Taylor Adams','address'=> rand(1, 20) . ' street','phone_number'=>'917-675-2342', 'date_of_birth' => "1950-02-12", 'age' => 65, 'user_id' => rand(1,3)),
        array('name'=>'Sam Parker','address'=> rand(1, 20) . ' street','phone_number'=>'917-213-4525', 'date_of_birth' => "1994-02-12", 'age' => 21, 'user_id' => rand(1,3)),
        array('name'=>'Allen Baker','address'=> rand(1, 20) . ' street','phone_number'=>'917-123-4425', 'date_of_birth' => "1970-04-12", 'age' => 45, 'user_id' => rand(1,3)),
        array('name'=>'Jake Lee','address'=> rand(1, 20) . ' street','phone_number'=>'917-923-9345', 'date_of_birth' => "1968-02-12", 'age' => 47, 'user_id' => rand(1,3)),
        array('name'=>'Mike Gomez','address'=> rand(1, 20) . ' street','phone_number'=>'917-435-2342', 'date_of_birth' => "1949-02-12", 'age' => 64, 'user_id' => rand(1,3)),
        array('name'=>'Jacob John','address'=> rand(1, 20) . ' street','phone_number'=>'917-213-4525', 'date_of_birth' => "1994-02-12", 'age' => 21, 'user_id' => rand(1,3)),
        array('name'=>'Albert Simpson','address'=> rand(1, 20) . ' street','phone_number'=>'917-354-4425', 'date_of_birth' => "1970-04-12", 'age' => 45, 'user_id' => rand(1,3)),
        array('name'=>'Jerry Williams','address'=> rand(1, 20) . ' street','phone_number'=>'345-923-4651', 'date_of_birth' => "1968-02-12", 'age' => 47, 'user_id' => rand(1,3)),
        array('name'=>'Larry Gomez','address'=> rand(1, 20) . ' street','phone_number'=>'917-687-4353', 'date_of_birth' => "1949-02-12", 'age' => 64, 'user_id' => rand(1,3)),
      ));
    }

}
