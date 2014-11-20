<?php 

class OffersControllerTest extends \TestCase
{
	public function testIndex()
	{
		$this->call('GET', 'offers');
		$this->assertResponseOk();
	}

	public function testShow()
	{
		$this->call('GET', 'offers/details/1');
		$this->assertResponseOk();
	}

	public function testCreate()
	{
		$this->call('GET', 'offers/create');
		$this->assertResponseOk();
	}

	public function testEdit()
	{
		$this->call('GET', 'offers/edit/1');
		$this->assertResponseOk();
	}
}
