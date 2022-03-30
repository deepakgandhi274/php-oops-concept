<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<!-- what is oops ?

	oops stand for object oriented programming system using class and objects 



	main principles of oops

	1 Abstraction
	2 Enclaptution 
	3 inheritance
	4 polymorhism

   what is class ??



   class is the blueprint 


   what is object ??


   instance of class



   what is constructor ??

   a constructor initialize the state of an object 


   what is destructor ??

   a destructor is amethod which is automaticially called when ends



   what is function overloaing ??


   functions have same name but different parameters


   what is operator overloading ??

   it is a type polymorhism in which operator is overloaded


   what is method overwrite??

   redifinig a super class method in subclass


   what is an abstract class??

   process of hide impletition 


   what is an interface??

   interface specify what a class must to  -->
 


<!-- 	objects and class -->

	<?php 

		class calculation{
			public $a,$b,$c;

			function sum () {


			$this->c = $this->a + $this->b;
			return $this->c;
		}
		function sub () {


			$this->c = $this->a - $this->b;
			return $this->c;
		}

		}

		$c1 = new calculation();

		$c1 ->a =20;
		$c1 ->b =10;

		$c2 = new calculation();

		$c2 ->a =50;
		$c2 ->b =10;


		echo   $c1-> sum();

		
		echo  $c2-> sub();
// ------------------------------------------------------------------


		// constructor

		class person {

			public $name ,$age,$city;

			function show() {
			echo $this->name,$this->age,$this->city ;
		}

	}

	$p1 = new person ();
	$p1 ->age =19;
	$p1 ->name ="deepak";
	$p1 ->city ="delhi";


	$p1->show();


	$p2 = new person ();
	$p2 ->age =19;
	$p2 ->name ="deep";
	$p2 ->city ="delhi";

	$p2->show();


// -------------------------------------------------------------------

// inhertance


	class employee {
	public $name;
	public $age;
	public $sallry;

	function __construct($n, $a ,$s){
		$this->name =$n;
		$this->age =$a;
		$this->sallry =$s;
	}
	

function info(){


	echo $this->name, $this->age, $this->sallry;
}
}
class manager extends employee{
	public $ta = 1000;
	public $phone =300;
	public $totalsallary;

	function info(){
		$this->totalsallary = $this->sallry + $this->ta + $this->phone;


	echo $this->name, $this->age, $this->totalsallary;


}
}
// }


$e1 = new manager("deepak", 19, 18000);
$e2 = new employee("name", 19, 15000);

$e1-> info();
$e2-> info();






// ------------------------------------------------------------------

		

?>

</body>
</html>