<?php include("../data/111051.php");
# Kitchen Nightmares

class KitchenNightmares extends PHPUnit_Framework_TestCase{
	public function test(){
		$v = convert(array("season"=>1,"episode"=>1));
		$this->assertEquals(1, $v["season"]);
		$this->assertEquals(1, $v["episode"]);

		$v = convert(array("season"=>1,"episode"=>10));
		$this->assertEquals(1, $v["season"]);
		$this->assertEquals(10, $v["episode"]);

		$v = convert(array("season"=>1,"episode"=>10));
		$this->assertEquals(2, $v["season"]);
		$this->assertEquals(1, $v["episode"]);

		$v = convert(array("season"=>1,"episode"=>22));
		$this->assertEquals(2, $v["season"]);
		$this->assertEquals(12, $v["episode"]);

		$v = convert(array("season"=>2,"episode"=>1));
		$this->assertEquals(3, $v["season"]);
		$this->assertEquals(1, $v["episode"]);

		$v = convert(array("season"=>2,"episode"=>13));
		$this->assertEquals(3, $v["season"]);
		$this->assertEquals(13, $v["episode"]);

		$v = convert(array("season"=3,"episode"=>1));
		$this->assertEquals(4, $v["season"]);
		$this->assertEquals(1, $v["episode"]);

		$v = convert(array("season"=>3,"episode"=>14));
		$this->assertEquals(4, $v["season"]);
		$this->assertEquals(14, $v["episode"]);

		$v = convert(array("season"=>4,"episode"=>1));
		$this->assertEquals(5, $v["season"]);
		$this->assertEquals(1, $v["episode"]);

		$v = convert(array("season"=>4,"episode"=>17));
		$this->assertEquals(5, $v["season"]);
		$this->assertEquals(17, $v["episode"]);
	}
}
?>