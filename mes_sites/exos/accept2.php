<html>
<body>


<?php 
$vnom=$_GET['nom']; 
$vemail=$_GET['email'];
echo "Bonjour   $vnom". "<br>" .  "Votre Email est:  $vemail";
echo "<br>";
echo date("Y.m.d");
?>
</body>
</html>