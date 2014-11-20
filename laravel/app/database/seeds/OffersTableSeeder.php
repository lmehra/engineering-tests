<?php 

class OffersTableSeeder extends DatabaseSeeder 
{

	public function run()
	{
		$faker = $this->getFaker();

		for($i = 1; $i <= 10; $i++) {
			$offers = array(
				'restaurant_id' => $faker->randomDigitNotNull,
				'description' => $faker->word,
				'price' => $faker->randomFloat,
				'min_guest' => $faker->randomDigitNotNull,
				'max_guest' => $faker->randomDigitNotNull,
				'days_avail' => $faker->word,
				'timing' => $faker->word,
				'active' => $faker->boolean,
				'expire_on' => $faker->datetime,
			);
			Offers::create($offers);
		}
	}

}
