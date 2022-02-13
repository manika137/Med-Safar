<?php
   $mysqli=new mysqli('localhost','root','','med_tourism');
 
  if ($mysqli->connect_error) {
  echo "FAILED";
}

?>