<?php 

class GuestsControllerTest extends \TestCase
{
	public function testIndex()
	{
		$this->call('GET', 'guest');
		$this->assertResponseOk();
	}

	public function testShow()
	{
		$this->call('GET', 'guest/details/1');
		$this->assertResponseOk();
	}

	public function testCreate()
	{
		$this->call('GET', 'guest/create');
		$this->assertResponseOk();
	}

	public function testEdit()
	{
		$this->call('GET', 'guest/edit/1');
		$this->assertResponseOk();
	}
}
