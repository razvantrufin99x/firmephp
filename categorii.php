<?php
   include("toppage.php");
?>

<?php



  $sql = " select * from categorii where idSubdomeniu=".$_GET['idSubdomeniu'];
  $resursa = mysql_query($sql);
  while($row = mysql_fetch_array($resursa))
  {
    
	print ' <b>'.$row['idSubdomeniu'].'</b> | ';
	print ' <b>'.$row['categoria'].'</b> | ';
	print ' ';
    print ' <b><a href = "categoria.php?idCategoria='.$row['idCategoria'].'">'.$row['idCategoria'].'</a></b></br>';
  }
  
  ?>




<?php
include("bottompage.php");
?>



