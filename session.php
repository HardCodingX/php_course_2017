<?php
session_start();

if (array_key_exists('contador',$_SESSION)) {
  $_SESSION['contador']+=1;
} else {
  $_SESSION['contador']=1;
}

echo $_SESSION['contador'];

if ($_SESSION['contador'] == 10) {
  session_destroy();
}



?>
