<?php include("tools.php");
# Kitchen Nightmares
function convert($v){
  $tvdb = array(0,22,13,14,17);
  $scene = array(0,10,12,13,14,17);
  return episode(absolute($v,$tvdb),$scene);
}
?>
