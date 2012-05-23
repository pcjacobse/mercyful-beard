<?php include("../data/111051.php");
# PawnStars

class PawnStars extends PHPUnit_Framework_TestCase{
	public function test(){

		$v = convert(array("season"=>0,"episode"=>1));
		$this->assertEquals(2, $v["season"]);
		$this->assertEquals(0, $v["episode"]);

		$v = convert(array("season"=>2,"episode"=>8));
		$this->assertEquals(2, $v["season"]);
		$this->assertEquals(8, $v["episode"]);

		$v = convert(array("season"=>2,"episode"=>32));
		$this->assertEquals(2, $v["season"]);
		$this->assertEquals(31, $v["episode"]);

		$v = convert(array("season"=>2,"episode"=>99));
		$this->assertEquals(4, $v["season"]);
		$this->assertEquals(40, $v["episode"]);

		$v = convert(array("season"=>2,"episode"=>111));
		$this->assertEquals(4, $v["season"]);
		$this->assertEquals(52, $v["episode"]);

		$v = convert(array("season"=>3,"episode"=>1));
		$this->assertEquals(4, $v["season"]);
		$this->assertEquals(54, $v["episode"]);

		$v = convert(array("season"=>3,"episode"=>2));
		$this->assertEquals(4, $v["season"]);
		$this->assertEquals(53, $v["episode"]);

		$v = convert(array("season"=>3,"episode"=>38));
		$this->assertEquals(4, $v["season"]);
		$this->assertEquals(90, $v["episode"]);
	}
}
?>