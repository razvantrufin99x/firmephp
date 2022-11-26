<?php
   include("toppage.php");
?>

<?php

$i = 0;
  $sql = " select * from firme where idFirma=".$_GET['idFirma'];
  $resursa = mysql_query($sql);
  while($row = mysql_fetch_array($resursa))
  {
    print $i++;
	print ' ';
	print $row['idFirma'];
	print ' ';
	print $row['firma'];
	print ' ';
	print $row['cui'];
	print ' ';
	print $row['adresa'];
	print ' ';
	print $row['logo'];
	print ' ';
	print $row['telefon'];
	print ' ';
	print $row['mobil'];
	print ' ';
	print $row['fax'];
	print ' ';
	print $row['email'];
	print ' ';
	print $row['info'];
	print ' ';
    print '</br>';
	
		
	print '</br>';
	
  }
  
  
  ?>




<?php
include("bottompage.php");
?>

