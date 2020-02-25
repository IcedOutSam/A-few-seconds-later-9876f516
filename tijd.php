<?php
$S = "s";
echo "Voer een bepaald aantal in met 's' er achter";
$leeslijn = readline();
$pos = strpos($leeslijn, $S);
if ((bool)$pos === true){
  $leeslijn = trim($leeslijn, "s");
  echo $leeslijn . " seconden";
} else {
  echo "doe wat ik vraag, fatoeman";
  exit;
}


 ?>
