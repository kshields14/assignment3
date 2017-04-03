<?php
	// this file will extend PArentClass.php

	class ChildClass extends ParentClass
	{
		public $name;
		public $age;
		public $major;
		public $funFact;
		public function __construct($name, $age, $major, $funFact)
		{
			$this->name = $name;
			$this->age = $age;
			$this->major = $major;
			$this->funFact = $funFact;
		}

		public function getOldName()
		{
			return parent::getName();
		}

		public function setName($newName)
		{
			$this->name = $newName;
		}

		public function getOldAge()
		{
			return parent::getAge();
		}

		public function setAge($newAge)
		{
			$this->age = $newAge;
		}

		public function getOldMajor()
		{
			return parent::getMajor();
		}

		public function setMajor($newMajor)
		{
			$this->major = $newMajor;
		}

		public function getOldFunFact()
		{
			return parent::getFunFact();
		}

		public function setFunFact($newFunFact)
		{
			$this->funFact = $newFunFact;
		}
	}
	$monica = new ChildClass("Monica", "22", "Education", "I can whistle through my nose.");
	$kelli = new ChildClass("Kelli", "21", "Psychology", "I've been to Ireland.");

?>
