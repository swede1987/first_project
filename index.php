<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>title</title>
</head>
<body>
<?php

class Worker{
	private $name;
	private $age;
	private $salary;

	public function getSalary(){
		return $this->salary;
	}

	public function setSalary($salary)
	{
		$this->salary=$salary;
	}

	public function getAge(){
		return $this->age;
	}

	public function setAge($age){
		$this->age=$age;
	}

}

$user1=new Worker;
$user1->setSalary(2000);
$user1->setAge(32);

$user2=new Worker;
$user2->setSalary(3000);
$user2->setAge(45);


$summaZaprlat=$user1->getSalary()+$user2->getSalary();
$summaLet=$user1->getAge()+$user2->getAge();

echo $summaZaprlat."<br>";
echo $summaLet;

?>
</body>
</html>

