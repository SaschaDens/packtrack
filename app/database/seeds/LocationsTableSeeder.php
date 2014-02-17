<?php

class LocationsTableSeeder extends Seeder {

	public function run()
	{
        $faker = Faker\Factory::create();

		// Uncomment the below to wipe the table clean before populating
		DB::table('locations')->truncate();

        Location::create(array(
            // Koerier
            'type'  =>  0,
            'lat'   =>  53.02,
            'long'  =>  41.03
        ));

        Location::create(array(
            // Locatie
            'type'  =>  1,
            'address'   =>  'Kleinhoefstraat 4',
            'country'   =>  'Belgium',
            'city'      =>  'Geel'
        ));


		// Uncomment the below to run the seeder
		// DB::table('users')->insert($users);
	}

}
