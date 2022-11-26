<?php
   include("toppage.php");
?>

<?php


$i = 0;
  $sql = " select * from firme where idSubiect=".$_GET['idSubiect'];
  $resursa = mysql_query($sql);
  while($row = mysql_fetch_array($resursa))
  {
    
	print ' <b>'.$row['idSubiect'].'</b> | ';
	print ' <b>'.$row['firma'].'</b> | ';
	print ' ';
    print ' <b><a href = "firma.php?idFirma='.$row['idFirma'].'">'.$row['idFirma'].'</a></b></br>';
  }
  
  ?>




<?php
include("bottompage.php");
?>


