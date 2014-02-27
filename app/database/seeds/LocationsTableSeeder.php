<?php

class LocationsTableSeeder extends Seeder {

	public function run()
	{
        $faker = Faker\Factory::create();

		// Uncomment the below to wipe the table clean before populating
		DB::table('locations')->truncate();

        Location::create(array(
            // EMPTY
        ));

        // https://maps.googleapis.com/maps/api/geocode/json?address=Kleinhoefstraat 4,+BE&sensor=false&key=AIzaSyBXpdZ1klzTuFAmTTHYclJe2n_hkaBOpbU
        Location::create(array(
            // Locatie
            'type'  =>  1,
            'lat'   =>  51.1613582,
            'long'  =>  4.9635834,
            'address'   =>  'Kleinhoefstraat 4',
            'country'   =>  'Belgium',
            'city'      =>  'Geel',
            'postal_code'   => '2260'
        ));

        Location::create(array(
            // Locatie
            'type'  =>  1,
            'lat'   =>  51.0681995,
            'long'  =>  4.5003056,
            'address'   =>  'Jan Pieter de Nayerlaan 5',
            'country'   =>  'Belgium',
            'city'      =>  'Sint - Katelijne - Waver',
            'postal_code'   => '2860'
        ));

        Location::create(array(
            // Locatie
            'type'  =>  1,
            'lat'   =>  51.3174437,
            'long'  =>  4.9292241,
            'address'   =>  'Campus Blairon 800',
            'country'   =>  'Belgium',
            'city'      =>  'Turnhout',
            'postal_code'   => '2300'
        ));

        Location::create(array(
            // Locatie
            'type'  =>  1,
            'lat'   =>  51.0237383,
            'long'  =>  4.4878799,
            'address'   =>  'Zandpoortvest 60',
            'country'   =>  'Belgium',
            'city'      =>  'Mechelen',
            'postal_code'   => '2800'
        ));

        Location::create(array(
            // Locatie
            'type'  =>  1,
            'lat'   =>  51.1340337,
            'long'  =>  4.5664259,
            'address'   =>  'Antwerpsestraat 99',
            'country'   =>  'Belgium',
            'city'      =>  'Lier',
            'postal_code'   => '2500'
        ));

        Location::create(array(
            // Locatie
            'type'  =>  1,
            'lat'   =>  51.2013227,
            'long'  =>  4.7730239,
            'address'   =>  'Lepelstraat 2',
            'country'   =>  'Belgium',
            'city'      =>  'Vorselaar',
            'postal_code'   => '2290'
        ));

        Location::create(array(
            // Locatie
            'type'  =>  1,
            'lat'   =>  51.2163282,
            'long'  =>  4.3972872,
            'address'   =>  'Sint-Andriesstraat 2',
            'country'   =>  'Belgium',
            'city'      =>  'Antwerpen',
            'postal_code'   => '2000'
        ));

        Location::create(array(
            // Locatie
            'type'  =>  0,
            'lat'   =>  5,
            'long'  =>  4,
        ));

		// Uncomment the below to run the seeder
		// DB::table('users')->insert($users);
	}

}
