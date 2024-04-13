<?php
if(isset($_COOKIE['a']) and isset($_COOKIE['b']))
{
 
  echo "la suma es = ".$_COOKIE['a']+$_COOKIE['b'];
}
else {
    echo "no existe valores para a y b";
}
?>