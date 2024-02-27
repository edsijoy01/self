<?php
class factorial{
	public $i;
	public function __construct($z){
		$this->i=$z;
	}
	public function fact()
	{
		$f=1;
		
	for($j=$this->i;$j>=1;$j--)	
	{
		
	$f=$f*$j;	
	}	
	return $f;
	}
	
   }
$o=new factorial(5);

echo"factorial=". $o->fact();
?>