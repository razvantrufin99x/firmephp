<?php
   include("toppage.php");
?>

<?php


  $i=0;
  $sql = " select * from domenii where idDomeniu=".$_GET['idDomeniu'];
  $resursa = mysql_query($sql);
  while($row = mysql_fetch_array($resursa))
  {
    print $i++;
	print ' ';
	print $row['domeniu'];
	print ' ';
    print ' <b><a href = "subdomenii.php?idDomeniu='.$row['idDomeniu'].'">'.$row['idDomeniu'].'</a></b></br>';
	
		
	print '</br>';
	
  }
  
  ?>




<?php
include("bottompage.php");
?>


