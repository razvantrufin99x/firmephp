<?php
   include("toppage.php");
?>

<?php



  $sql = " select * from domenii ";
  $resursa = mysql_query($sql);
  while($row = mysql_fetch_array($resursa))
  {
    
    print ' <b>'.$row['domeniu'].'</b> | ';
	print ' ';
    print ' <b><a href = "domeniu.php?idDomeniu='.$row['idDomeniu'].'">'.$row['idDomeniu'].'</a></b></br>';
  }
  
  ?>




<?php
include("bottompage.php");
?>



