<style>
    ul{
        width: 50px;
    }
        .li{
            background-color: yellow;
            border: 2px solid green;
            text-align: center;
        }
    </style>
<?php
$valor=$_GET['numero'];
 $primos = [];
 $numero = 2;

 while (count($primos) < $valor) {
     if ($numero/$numero==1) {
         $primos[] = $numero;
     }
     $numero++;
 }


 echo "<ul >";
 foreach ($primos as $primo) {
     echo "<li class='li'>$primo</li>";
 }
 echo "</ul>";
?>