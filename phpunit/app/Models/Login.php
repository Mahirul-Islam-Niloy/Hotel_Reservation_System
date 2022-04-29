<?php

namespace App\Models;

class Login
{
	public $usname;

    public $id;

	public $pass;



    public function setName($usname)
	{
		$this->usname = trim($usname);

	}

    public function getName()
	{
		return $this->usname;
	}



	public function setID($id_)
	{
		$this->id = $id_;
	}

	public function getID()
	{
		return $this->id;

    }

    public function setPass($pass)
    {
        $this->pass = $pass;
    }

    public function getPass()
    {
        return $this->pass;
    }



}
