<?php
   include("toppage.php");
?>

<?php



  $sql = " select * from subdomenii where idDomeniu=".$_GET['idDomeniu'];
  $resursa = mysql_query($sql);
  while($row = mysql_fetch_array($resursa))
  {
    
	print ' <b>'.$row['idDomeniu'].'</b> | ';
	print ' <b>'.$row['subdomeniu'].'</b> | ';
	print ' ';
    print ' <b><a href = "subdomeniu.php?idSubdomeniu='.$row['idSubdomeniu'].'">'.$row['idSubdomeniu'].'</a></b></br>';
  }
  
  ?>




<?php
include("bottompage.php");
?>



