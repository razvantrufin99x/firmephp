<?php
   include("toppage.php");
?>

<?php

  $i = 0;
  $sql = " select * from subdomenii where idSubdomeniu=".$_GET['idSubdomeniu'];
  $resursa = mysql_query($sql);
  while($row = mysql_fetch_array($resursa))
  {
    print $i++;
	print ' ';
	print $row['subdomeniu'];
	print ' ';
    print ' <b><a href = "categorii.php?idSubdomeniu='.$row['idSubdomeniu'].'">'.$row['idSubdomeniu'].'</a></b></br>';
	
		
	print '</br>';
	
  }
  
  
  ?>




<?php
include("bottompage.php");
?>


