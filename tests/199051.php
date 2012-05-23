<?php include("../data/199051.php");
# Top Gear US
# scene values according to a search at nzb.su.

class TopGearUS extends PHPUnit_Framework_TestCase{
	public function test(){
		$v = convert(array("season"=>2,"episode"=>8));
		$this->assertEquals(2, $v["season"]);
		$this->assertEquals(8, $v["episode"]);

		$v = convert(array("season"=>2,"episode"=>9));
		$this->assertEquals(3, $v["season"]);
		$this->assertEquals(1, $v["episode"]);

		$v = convert(array("season"=>2,"episode"=>16));
		$this->assertEquals(3, $v["season"]);
		$this->assertEquals(8, $v["episode"]);
	}
}
?>