<?php include("../data/example.php");
# Example Test

class Example extends PHPUnit_Framework_TestCase{
	public function season1(){
		$v = convert(array("season"=>1,"episode"=>1));
		$this->assertEquals(1, $v["season"]);
		$this->assertEquals(1, $v["episode"]);
	}
}
?>