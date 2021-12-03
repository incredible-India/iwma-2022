<?php

$to = "prp4203@gmail.com";
$subject ="mail";
$message = "hello";
if(mail($to,$subject,$message)){
  echo "Mail semt";
}  else {
  echo "err";
}
?>