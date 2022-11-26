<?php
   include("toppage.php");
?>

<?php



  $sql = " select * from subiecte where idCategoria=".$_GET['idCategoria'];
  $resursa = mysql_query($sql);
  while($row = mysql_fetch_array($resursa))
  {
    
	print ' <b>'.$row['idCategoria'].'</b> | ';
	print ' <b>'.$row['subiect'].'</b> | ';
	print ' ';
    print ' <b><a href = "subiect.php?idSubiect='.$row['idSubiect'].'">'.$row['idSubiect'].'</a></b></br>';
  }
  
  ?>




<?php
include("bottompage.php");
?>