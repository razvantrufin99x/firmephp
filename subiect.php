<?php
   include("toppage.php");
?>

<?php

$i = 0;
  $sql = " select * from subiecte where idSubiect=".$_GET['idSubiect'];
  $resursa = mysql_query($sql);
  while($row = mysql_fetch_array($resursa))
  {
    print $i++;
	print ' ';
	print $row['subiect'];
	print ' ';
    print ' <b><a href = "firme.php?idSubiect='.$row['idSubiect'].'">'.$row['idSubiect'].'</a></b></br>';
	
		
	print '</br>';
	
  }
  
  
  ?>




<?php
include("bottompage.php");
?>

