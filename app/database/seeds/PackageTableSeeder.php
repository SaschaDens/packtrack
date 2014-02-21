<?php

class PackageTableSeeder extends Seeder {

	public function run()
	{
        $faker = Faker\Factory::create();
		// Uncomment the below to wipe the table clean before populating
		 DB::table('package')->truncate();

        Package::create(array(
            'user_id'     => 1,
            'reciever_name'       =>  $faker->name,
            'country'    =>  'BE',
            'city'       =>  $faker->city,
            'address'    =>  $faker->address,
            'postal_code' =>  $faker->postcode,
            'reciever_mail' => $faker->email,
            'description' =>  $faker->sentence(10)
        ));
        /*foreach(range(1, 30) as $index)
        {
            Package::create(array(
                'user_id'     => $faker->randomNumber(1, 5),
                'reciever_name'       =>  $faker->name,
                'country'    =>  'BE',
                'city'       =>  $faker->city,
                'address'    =>  $faker->address,
                'postal_code' =>  $faker->postcode,
                'reciever_mail' => $faker->email,
                'description' =>  $faker->sentence(10)
            ));
        }//*/
		// Uncomment the below to run the seeder
		// DB::table('package')->insert($package);
	}

}
