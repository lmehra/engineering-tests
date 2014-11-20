<?php

class DatabaseSeeder extends Seeder {
	protected $faker;

	public function getFaker()
	{
		if(empty($this->faker)) {
			$this->faker = Faker\Factory::create();
		}

		return $this->faker;
	}



	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		//$this->call('RestaurantTableSeeder');
		//$this->call('GuestsTableSeeder');
		//$this->call('OffersTableSeeder');
	}

}

class RestaurantTableSeeder extends Seeder {

    public function run()
    {
        DB::table('restaurant')->delete();

        Restaurant::create(
            array(
                'name'=>'Barbeque Nation',
                'address'=>'Sec 26',
                'city'=>'Chandigarh',
                'state'=>'Punjab',
                'country'=>'India'
            ));
        Restaurant::create(
            array(
                'name'=>'Girl In The Cafe',
                'address'=>'Sec 17',
                'city'=>'Chandigarh',
                'state'=>'Punjab',
                'country'=>'India'
            ));
        Restaurant::create(
            array(
                'name'=>'The Night Factory',
                'address'=>'Industrial area',
                'city'=>'Chandigarh',
                'state'=>'Punjab',
                'country'=>'India'
            ));
        Restaurant::create(
            array(
                'name'=>'Burger & Lobster',
                'address'=>'40 St Johns Street, Smithfield',
                'city'=> 'Farringdon',
                'state'=>'London',
                'country'=>'U.K'
            ));
        Restaurant::create(
            array(
                'name'=>'OXO Tower Restaurant',
                'address'=>'OXO Tower Wharf, Barge House Street, South Bank',
                'city'=>'London',
                'state'=>'London',
                'country'=>'U.K'
            ));
        Restaurant::create(
            array(
                'name'=>'Hauz Khas Social ',
                'address'=>'9A & 12, Hauz Khas Village',
                'city'=>'New Delhi',
                'state'=>'New Delhi',
                'country'=>'India'
            ));
        Restaurant::create(
        array(
                'name'=>'Lodi - The Garden Restaurant ',
                'address'=>'Opposite Mausam Bhawan, Near Gate 1, Lodhi Road',
                'city'=>'New Delhi',
                'state'=>'New Delhi',
                'country'=>'India'
            )
        );
	}

}
