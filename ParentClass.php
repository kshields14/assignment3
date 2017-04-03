<?php
	// This is the file for the parent class
	class ParentClass
	{
		private $n;
    private $a;
    private $m;
		private $f;
    public function __construct($n, $a, $m, $f)
		{
      $this->name = $n;
      $this->age = $a;
      $this->major = $m;
			$this->funFact = $f;
    }
		public function getName()
		{
			return $this->name;
		}

		public function getAge()
		{
			return $this->age;
		}

		public function getMajor()
		{
			return $this->major;
		}

		public function getFunFact()
		{
			return $this->funFact;
		}

		public function __toString()
		{
			$person = "Student name: " . $this->getName();
			$howOld = "Student age: " . $this->getAge();
			$whatMajor = "Major/Program(s): " . $this->getMajor();
			$about = "A fun fact about me is: " . $this->getFunFact();
			return "<br>" . $person . "<br>" . $howOld . "<br>" . $whatMajor . "<br>". $about;
		}
	}
	$kait = new ParentClass("Kait", "22", "Computer Engineering", " I can balance things on my head.");
?>
