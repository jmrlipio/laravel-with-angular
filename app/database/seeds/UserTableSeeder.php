<?php

use Faker\Factory as Faker;

class UserTableSeeder extends Seeder
{

	public function run()
	{
		$faker = Faker::create();
		
		foreach(range(1, 10) as $index)	{
		
		User::create(array(
			'name' => $faker->name,
			'address' => $faker->address,
			'email' => $faker->safeEmail
		));

		}
	}
}