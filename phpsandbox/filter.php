<?php
/*
// check fo posted SDO_DAS_DataObject
if(filter_has_var(INPUT_POST, 'data')){
  echo 'Data Found';
}else{
  echo 'No Data';
}
*/

/////////// Email Validation ////////////
/*
if(filter_has_var(INPUT_POST, 'data')){
  $email = $_POST['data'];

  // Remove illegal chars
  $email = filter_var($email, FILTER_SANITIZE_EMAIL);
  echo $email. '<br>';

  if(filter_var($email, 'data', FILTER_VALIDATE_EMAIL)){
    echo 'Email is Valid';
  } else {
    echo ' Email is NOT valid';
  }
}
*/
/*
$var = 23;
if(filter_var($var, FILTER_VALIDATE_INT)){
  echo $var. 'is a number';
} else {
  echo $var. 'is NOT a number';
}*/
/*
$var = '09u4ri0nsiht81j304y4455jfw';
var_dump(filter_var($var, FILTER_SANITIZE_NUMBER_INT));
*/

$arr = array(
  "name" => "Hector Delcid",
  "age" => "35",
  "email" => "testing@email.com"
);

$filters = array(
  "name" => array(
    "filter" => FILTER_CALLBACK,
    "option" => "ucwords"
  ),
  "age" => array(
    "filter" => FILTER_VALIDATE_INT,
    "option" => array(
      "min_range" => 1,
      "max_range" => 120
    )
  ),
  "email" => FILTER_VALIDATE_EMAIL
);

print_r(filter_var_array($arr, $filters));


 ?>

<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
<input type="text" name="data">
<input type="text" name="data2">
<button type="submit"> submit </button>

</form>
