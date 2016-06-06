<?php 

class UserTableSeeder extends Seeder {

    public function run()
    {
        $user = new User();
        $user->name = 'Andrew Powell-Morse';
        $user->username = 'andrewpomo';
        $user->email = 'andrewpomo815@gmail.com';
        $user->password = $_ENV['USER_PASSWORD'];
        $user->save();

        $user = new User();
        $user->name = 'Andrew Powell-Morse';
        $user->username = 'andrewpomo2';
        $user->email = 'andrewpomo89@live.com';
        $user->password = $_ENV['USER_PASSWORD'];
        $user->save();

        $user = new User();
        $user->name = 'Andrew Powell-Morse';
        $user->username = 'andrewpomo3';
        $user->email = 'andrew@seatsmart.com';
        $user->password = $_ENV['USER_PASSWORD'];
        $user->save();

        $user = new User();
        $user->name = 'Andrew Powell-Morse';
        $user->username = 'andrewpomo4';
        $user->email = 'andrew@besttickets.com';
        $user->password = $_ENV['USER_PASSWORD'];
        $user->save();
    }

}

?>