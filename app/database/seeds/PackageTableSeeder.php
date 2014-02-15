<?php

class PackageTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		 DB::table('package')->truncate();

        Package::create(array(
            'user_id'     => 1,
            'country'    =>  'BE',
            'city'       =>  'Westerlo',
            'address'    =>  'Stekelbesstraat 10',
            'postal_code' =>  '2260'
        ));

		// Uncomment the below to run the seeder
		// DB::table('package')->insert($package);
	}

}
