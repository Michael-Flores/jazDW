<style>
   table {
      width: 500px;
      border-collapse: collapse;
    }
    th, td {
      padding: 8px;
      text-align: left;
      border-bottom: 1px solid #F79646;
      border-left: 1px solid #F79646;
    }
    th {
      background-color: #F79646;
    }
    .fondo{
        background-color: #F79646;
    }
    
</style>
<?php
$ope=$_POST['operacion'];
$valor=$_POST['valor'];

echo "<table >";
echo "<tr ><th></th>";
for($i=1;$i<=$valor;$i++){
    echo "<th>$i</th>";
}
echo "</tr>";
for($i=1;$i<=$valor;$i++){
    echo "<tr >";
    for($j=1;$j<=$valor;$j++){
        
        if($j==1 ){
            echo "<td class='fondo'>".($i)."</td>";  
        }
        if($ope=="suma"){
        echo "<td>".$i+$j."</td>";
        }else if($ope=="resta"){
            echo "<td>".$i-$j."</td>";
        }else if($ope=="multiplicacion"){
            echo "<td>".$i*$j."</td>";
        }else{
            echo "<td>".$i/$j."</td>";
        }
    }
    echo "</tr>";
}

echo "</table>";
?>