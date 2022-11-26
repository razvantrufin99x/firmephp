<?php
   include("toppage.php");
?>

<?php

  $i = 0;
  $sql = " select * from categorii where idCategoria=".$_GET['idCategoria'];
  $resursa = mysql_query($sql);
  while($row = mysql_fetch_array($resursa))
  {
    print $i++;
	print ' ';
	print $row['categoria'];
	print ' ';
    print ' <b><a href = "subiecte.php?idCategoria='.$row['idCategoria'].'">'.$row['idCategoria'].'</a></b></br>';
	
		
	print '</br>';
	
  }
  
  
  ?>




<?php
include("bottompage.php");
?>


