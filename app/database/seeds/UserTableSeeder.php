<?php 

class UserTableSeeder extends Seeder {

    public function run()
    {

        $user = new User();
        $user->name = 'Andrew Powell-Morse';
        $user->email = 'andrewpomo89@live.com';
        $user->password = $_ENV['USER_PASSWORD'];
        $user->save();

        $user = new User();
        $user->name = 'Andrew Powell-Morse';
        $user->email = 'andrew@seatsmart.com';
        $user->password = $_ENV['USER_PASSWORD'];
        $user->save();

        $user = new User();
        $user->name = 'Andrew Powell-Morse';
        $user->email = 'andrew@besttickets.com';
        $user->password = $_ENV['USER_PASSWORD'];
        $user->save();
    }

}

?>