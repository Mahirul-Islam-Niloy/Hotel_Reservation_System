<?php

class PatientTest extends \PHPUnit\Framework\TestCase
{
	
	public function testName()
	{
		$user = new \App\Models\Login;

		$user->setName('Niloy');

		$this->assertEquals($user->getName(), 'Niloy');
	}

    public function testID()
	{
		$user = new \App\Models\Login;

		$user->setID('5');

		$this->assertEquals($user->getID(), '5');
	}

	public function testPass()
	{
		$user = new \App\Models\Login;

		$user->setPass(1234);

		$this->assertEquals($user->getPass(), '1234');

		
	}

    
}



