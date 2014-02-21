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

        User::create(array(
            'first_name'    =>  'SupportGeel',
            'last_name'     =>  'ICT',
            'email'         =>  'supportgeel@packandtrack.be',
            'password'      =>  'abc123!',
            'activation_key'    => Generate::activation_key(),
            'activated'        =>  1,
            'permission_level'        =>  1,
            'country'       =>  'BE',
            'city'          =>  'Geel',
            'postal_code'   =>  '2440',
            'address'       =>  "Kleinhoefstraat 4",
            'location_id'       =>  '4'
        ));

        User::create(array(
            'first_name'    =>  'SupportSKW',
            'last_name'     =>  'ICT',
            'email'         =>  'supportskw@packandtrack.be',
            'password'      =>  'abc123!',
            'activation_key'    => Generate::activation_key(),
            'activated'        =>  1,
            'permission_level'        =>  1,
            'country'       =>  'BE',
            'city'          =>  'Sint - Katelijne - Waver',
            'postal_code'   =>  '2860',
            'address'       =>  'Jan Pieter de Nayerlaan 5',
            'location_id'       =>  '5'
        ));

        User::create(array(
            'first_name'    =>  'SupportTurnhout',
            'last_name'     =>  'ICT',
            'email'         =>  'supportturnhout@packandtrack.be',
            'password'      =>  'abc123!',
            'activation_key'    => Generate::activation_key(),
            'activated'        =>  1,
            'permission_level'        =>  1,
            'country'       =>  'BE',
            'city'          =>  'Turnhout',
            'postal_code'   =>  '2300',
            'address'       =>  'Campus Blairon 800',
            'location_id'       =>  '6'
        ));

        User::create(array(
            'first_name'    =>  'SupportMechelen',
            'last_name'     =>  'ICT',
            'email'         =>  'supportmechelen@packandtrack.be',
            'password'      =>  'abc123!',
            'activation_key'    => Generate::activation_key(),
            'activated'        =>  1,
            'permission_level'        =>  1,
            'country'       =>  'BE',
            'city'          =>  'Mechelen',
            'postal_code'   =>  '2800',
            'address'       =>  'Zandpoortvest 60',
            'location_id'       =>  '7'
        ));

        User::create(array(
            'first_name'    =>  'SupportLier',
            'last_name'     =>  'ICT',
            'email'         =>  'supportlier@packandtrack.be',
            'password'      =>  'abc123!',
            'activation_key'    => Generate::activation_key(),
            'activated'        =>  1,
            'permission_level'        =>  1,
            'country'       =>  'BE',
            'city'          =>  'Lier',
            'postal_code'   =>  '2500',
            'address'       =>  'Antwerpsestraat 99',
            'location_id'       =>  '8'
        ));

        User::create(array(
            'first_name'    =>  'SupportVorselaar',
            'last_name'     =>  'ICT',
            'email'         =>  'supportvorselaar@packandtrack.be',
            'password'      =>  'abc123!',
            'activation_key'    => Generate::activation_key(),
            'activated'        =>  1,
            'permission_level'        =>  1,
            'country'       =>  'BE',
            'city'          =>  'Vorselaar',
            'postal_code'   =>  '2290',
            'address'       =>  'Sint-Andriesstraat 2',
            'location_id'       =>  '9'
        ));

        User::create(array(
            'first_name'    =>  'SupportAntwerpen',
            'last_name'     =>  'ICT',
            'email'         =>  'supportantwerpen@packandtrack.be',
            'password'      =>  'abc123!',
            'activation_key'    => Generate::activation_key(),
            'activated'        =>  1,
            'permission_level'        =>  1,
            'country'       =>  'BE',
            'city'          =>  'Antwerpen',
            'postal_code'   =>  '2000',
            'address'       =>  'Sint-Andriesstraat 2',
            'location_id'       =>  '10'
        ));

        // Uncomment the below to run the seeder
		// DB::table('users')->insert($users);
	}

}
