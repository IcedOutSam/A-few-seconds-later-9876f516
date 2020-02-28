<?php
  $S = "s";

  echo "Voer een bepaald aantal in met 's' er achter";

  $FuckBlast = readline();

  $pos = strpos($FuckBlast, $S);

if ((bool)$pos === true) {
      $FuckBlast = trim($FuckBlast, "s");
      echo $FuckBlast . " seconden";
}

else {
      echo "doe wat ik vraag, fatoeman";
      exit;
}
?>
