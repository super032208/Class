<?php
// People Array
$people[] = "Steve";
$people[] = "John";
$people[] = "Kathy";
$people[] = "Steve";
$people[] = "Evan";
$people[] = "Anthony";
$people[] = "Tom";
$people[] = "Rhonda";
$people[] = "Hal";
$people[] = "Ernie";
$people[] = "Johana";
$people[] = "Farrah";
$people[] = "Linda";
$people[] = "Shawn";
// get Query string
$q = $_REQUEST['q'];

$suggestion = "";
if($q !== "" ){
  $q = strtolower($q);
  $len = strlen($q);
  foreach ($people as $person) {
    if(stristr($q, substr($person, 0, $len))){
      if($suggestion === ""){
        $suggestion = $person;
      } else {
        $suggestion .= ", $person";
      }
    }
  }
}

echo $suggestion === "" ? "No Suggestion" : $suggestion;


 ?>
