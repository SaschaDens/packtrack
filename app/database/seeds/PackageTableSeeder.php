<?php

class PackageTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		 DB::table('package')->truncate();

        Package::create(array(
            'client_id'     => 1,
            'to_country'    =>  'Belgium',
            'to_city'       =>  'Westerlo',
            'to_Address'    =>  'Stekelbesstraat 10',
            'to_postalcode' =>  '2260',
            'tracking_code' =>  '4PKJKVJ826057'
        ));

		// Uncomment the below to run the seeder
		// DB::table('package')->insert($package);
	}

}
