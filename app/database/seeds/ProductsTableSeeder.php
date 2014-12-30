<?php
use Faker\Factory as Faker;
// Composer: "fzaninotto/faker": "v1.3.0"

class ProductsTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();
		$ctr = 0;

		foreach(range(1, 10) as $index)
		{
			$ctr++;
			Product::create([
				'name' => 'Product 0'.$ctr,
				'category' => 'Category 0'.$ctr,
				'price' => $faker->randomNumber(2),
				'description' => $faker->sentence($nbWords = 10)
			]);
		}
	}

}