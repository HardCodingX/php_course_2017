<?php

$myName = (array_key_exists('myName', $_POST))? $_POST['myName'] : 'Pedro';

if (!array_key_exists('name', $_COOKIE)) {
  setcookie('name', $myName, time() + 60);
  echo 'Se crea nueva cookie';
}

header("LOCATION: form.php");

?>
