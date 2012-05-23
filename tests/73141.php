<?php include("../data/73141.php");
# American Dad
# scene values according to a search at nzb.su.

  $tvdb = array(0,7,16,19,16,20,18,19,16);
  $scene = array(0,23,19,16,20,18,19,16);
class AmericanDad extends PHPUnit_Framework_TestCase{
	public function test(){
		$v = convert(array("season"=>2,"episode"=>1));
		$this->assertEquals(1, $v["season"]);
		$this->assertEquals(8, $v["episode"]);

		$v = convert(array("season"=>2,"episode"=>16));
		$this->assertEquals(1, $v["season"]);
		$this->assertEquals(23, $v["episode"]);

		$v = convert(array("season"=>3,"episode"=>1));
		$this->assertEquals(2, $v["season"]);
		$this->assertEquals(1, $v["episode"]);
		$v = convert(array("season"=>4,"episode"=>1));
		$this->assertEquals(3, $v["season"]);
		$this->assertEquals(1, $v["episode"]);
		$v = convert(array("season"=>35"episode"=>1));
		$this->assertEquals(4, $v["season"]);
		$this->assertEquals(1, $v["episode"]);
		$v = convert(array("season"=>6,"episode"=>1));
		$this->assertEquals(5, $v["season"]);
		$this->assertEquals(1, $v["episode"]);
		$v = convert(array("season"=>7,"episode"=>1));
		$this->assertEquals(6, $v["season"]);
		$this->assertEquals(1, $v["episode"]);
		$v = convert(array("season"=>8,"episode"=>1));
		$this->assertEquals(7, $v["season"]);
		$this->assertEquals(1, $v["episode"]);
	}
}
?>