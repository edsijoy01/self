<?php
class ac{
	public $w; 
	public function __construct(array $z){
		$this->w=$z;
	}
	public function qwerty(){
		$a=$this->w;
		sort($a);
		
		return $a;
		}
}
$qw= new ac(array(11,-2,4,35,0,8,-9));
print_r($qw->qwerty())."<br>";
?>