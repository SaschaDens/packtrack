<?php

class UsersTableSeeder extends Seeder {

	public function run()
	{
        $faker = Faker\Factory::create();

		// Uncomment the below to wipe the table clean before populating
		DB::table('users')->truncate();

        User::create(array(
            'first_name'    =>  'Sascha',
            'last_name'     =>  'Dens',
            'email'         =>  'sascha@packandtrack.be',
            'password'      =>  'abc123!',
            'activation_key'    => Generate::activation_key(),
            'activated'        =>  1,
            'country'       =>  'BE',
            'city'          =>  $faker->city,
            'postal_code'   =>  '2260',
            'address'       =>  $faker->address
        ));

        User::create(array(
            'first_name'    =>  'Benjamin',
            'last_name'     =>  'Craane',
            'email'         =>  'benjamin@packandtrack.be',
            'password'      =>  'abc123!',
            'activation_key'    => Generate::activation_key(),
            'activated'        =>  1,
            'country'       =>  'BE',
            'city'          =>  $faker->city,
            'postal_code'   =>  '2260',
            'address'       =>  $faker->address
        ));

        User::create(array(
            'first_name'    =>  'Nicolas',
            'last_name'     =>  'Keustermans',
            'email'         =>  'nicolas@packandtrack.be',
            'password'      =>  'abc123!',
            'activation_key'    => Generate::activation_key(),
            'activated'        =>  1,
            'country'       =>  'BE',
            'city'          =>  $faker->city,
            'postal_code'   =>  '2260',
            'address'       =>  $faker->address
        ));

        User::create(array(
            'first_name'    =>  'Jonas',
            'last_name'     =>  'Dieltiens',
            'email'         =>  'jonas@packandtrack.be',
            'password'      =>  'abc123!',
            'activation_key'    => Generate::activation_key(),
            'activated'        =>  1,
            'country'       =>  'BE',
            'city'          =>  $faker->city,
            'postal_code'   =>  '2260',
            'address'       =>  $faker->address
        ));

        User::create(array(
            'first_name'    =>  'Brent',
            'last_name'     =>  'De Pauw',
            'email'         =>  'brent@packandtrack.be',
            'password'      =>  'abc123!',
            'activation_key'    => Generate::activation_key(),
            'activated'        =>  1,
            'country'       =>  'BE',
            'city'          =>  $faker->city,
            'postal_code'   =>  '2260',
            'address'       =>  $faker->address
        ));

        User::create(array(
            'first_name'    =>  'Support',
            'last_name'     =>  'ICT',
            'email'         =>  'support@packandtrack.be',
            'password'      =>  'abc123!',
            'activation_key'    => Generate::activation_key(),
            'activated'        =>  1,
            'permission_level'        =>  1,
            'country'       =>  'BE',
            'city'          =>  $faker->city,
            'postal_code'   =>  '2260',
            'address'       =>  $faker->address,
            'location_id'       =>  '3'
        ));

		// Uncomment the below to run the seeder
		// DB::table('users')->insert($users);
	}

}
