<?php
function def($s,$e){
	return array("season"=>$s,"episode"=>$e);
}

function absolute($e,$h){
        $a = $e["episode"]; 
        $e["season"]--;
        while($e["season"] > -1){
          $a += $h[$e["season"]];
          $e["season"]--;
        }
        return $a;
}

function episode($a,$h){
        $eps = array("season" => 0,"episode" => 0);
        while ($a > 0){
                if ($a <= $h[$eps["season"]]) {break;}
                $a -= $h[$eps["season"]];
                $eps["season"]++;
        }  
        $eps["episode"] += $a;
        return $eps;
}
?>