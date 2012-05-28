<?php include("tools.php");
# American Dad!!!!

function convert($v){
  $tvdb = array(2,7,16,19,16,20,18,19,18);
  $scene = array(2,23,19,16,20,18,19,18);
  return episode(absolute($v,$tvdb),$scene);
}
?>
