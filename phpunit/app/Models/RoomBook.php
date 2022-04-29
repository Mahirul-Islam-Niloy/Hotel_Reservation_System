<?php

namespace App\Models;

class Roombook
{
	public $title;
    public $fname;
	public $lname;
	public $email;
	public $nat;
	public $country;
	public $Phone;
	public $troom;
	public $nroom;
	public $bed;
	public $meal;
	public $cin;
	public $cout;
	public $days;
	
	
	public function setTitle($title)
	{
		$this->title = trim($title);

	}

    public function getTitle()
	{
		return $this->title;
	}



	public function setfname($fname_)
	{
		$this->fname = trim($fname_);
	}

	public function getfname()
	{
		return $this->fname;

    }

	public function setlname($lname_)
	{
		$this->lname = trim($lname_);
	}

	public function getlname()
	{
		return $this->lname;

    }
    public function setEmail($email)
    {
        $this->email = trim($email);
    }

    public function getEmail()
    {
        return $this->email;
    }


	public function setnat($nat_)
	{
		$this->nat = trim($nat_);
	}

	public function getnat()
	{
		return $this->nat;

    }

	public function setcountry($country)
	{
		$this->country = trim($country);
	}

	public function getcountry()
	{
		return $this->country;

    }
	
	
	
	public function setphone($Phone)
	{
		$this->Phone = trim($Phone);
	}

	public function getphone()
	{
		return $this->Phone;

    }
	
	
	public function settroom($troom)
	{
		$this->troom = trim($troom);
	}

	public function gettroom()
	{
		return $this->troom;

    }
	

	public function setsta($sta)
	{
		$this->sta = $sta;
	}

	public function getsta()
	{
		return $this->sta;

    }

	
	public function setnroom($nroom)
	{
		$this->nroom = trim($nroom);
	}

	public function getnroom()
	{
		return $this->nroom;

    }
	
	
	
	public function setbed($bed)
	{
		$this->bed = trim($bed);
	}

	public function getbed()
	{
		return $this->bed;

    }
	
	
	public function setmeal($meal)
	{
		$this->meal = trim($meal);
	}

	public function getmeal()
	{
		return $this->meal;

    }
	
	
	
	public function setcin($cin)
	{
		$this->cin = trim($cin);
	}

	public function getcin()
	{
		return $this->cin;

    }
	
	public function setcout($cout)
	{
		$this->cout = trim($cout);
	}

	public function getcout()
	{
		return $this->cout;

    }
	

	public function setdays($days)
	{
		$this->days = trim($days);
	}

	public function getdays()
	{
		return $this->days;

    }

}
