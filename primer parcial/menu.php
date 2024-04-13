<?php
$valorA=$_POST['valorA'];
$valorB=$_POST['valorB'];

setcookie('a',$valorA,time()+3600);
setcookie('b',$valorB,time()+3600);
?>
    <ul>
        <li><a href="suma.php" >Sumar </a></li>
        <li><a href="resta.php">restar</a></li>
        <li><a href="multiplicacion.php">multiplicar</a></li>
        
    </ul>
