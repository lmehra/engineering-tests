<?php 

class GuestsTableSeeder extends DatabaseSeeder 
{

	public function run()
	{
        DB::table('guests')->delete();

		$faker = $this->getFaker();

		for($i = 1; $i <= 10; $i++) {
			$guest = array(
				'id' => $i,
				'name' => $faker->name,
				'phone_number' => $faker->randomDigitNotNull,
			);
			Guest::create($guest);
		}
	}

}
