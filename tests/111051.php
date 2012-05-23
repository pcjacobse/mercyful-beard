<?php include("../data/111051.php");
# PawnStars

class PawnStars extends PHPUnit_Framework_TestCase{

	public function testSpecials(){
		$tvdb = def(0,1);
		$nzb = def(2,0);
		$this->assertEquals($nzb, convert($tvdb));
	}

	public function testS1(){
		$tvdb = def(1,1);
		$nzb = def(1,1);
		$this->assertEquals($nzb, convert($tvdb));

		$tvdb = def(1,14);
		$nzb = def(1,14);
		$this->assertEquals($nzb, convert($tvdb));
	}
	public function testS2(){

		$tvdb = def(2,0);
		$nzb = def(2,1);
		$this->assertEquals($nzb, convert($tvdb));

		// Licence to Pawn
		$tvdb = def(2,31);
		$nzb = def(2,32);
		$this->assertEquals($nzb, convert($tvdb));
		
	}
	public function testS3(){
		$tvdb = def(2,32);
		$nzb = def(3,1);
		$this->assertEquals($nzb, convert($tvdb));

		
		$tvdb = def(2,98);
		$nzb = def(3,67);
		$this->assertEquals($nzb, convert($tvdb));
	}
	public function testS4(){
		$tvdb = def(2,99);
		$nzb = def(4,40);
		$this->assertEquals($nzb, convert($tvdb));

		$tvdb = def(2,111);
		$nzb = def(4,52);
		$this->assertEquals($nzb, convert($tvdb));

		$tvdb = def(3,1);
		$nzb = def(4,54);
		$this->assertEquals($nzb, convert($tvdb));

		$tvdb = def(3,38);
		$nzb = def(4,90);
		$this->assertEquals($nzb, convert($tvdb));
	}
}
?>