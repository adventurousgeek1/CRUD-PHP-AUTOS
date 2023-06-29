<?php
  function verificar($area){
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $dbname = "bd_autos";
   
    //Criar a conexao
    $conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
 
    $sql_autos = "SELECT SUM(quantidade) AS qtde
                      FROM alocacao
                          WHERE area =$area";
    if ($result = mysqli_query($conn, $sql_autos)) {
      /* fetch associative array */
    while ($row = mysqli_fetch_assoc($result)) {
      if($row["qtde"]>0){
        return 1;
      }else{
        return 0;
      }
    }

    /* free result set */
    mysqli_free_result($result);
    }
   
  }
?>

<!DOCTYPE html>
<html>
<head>
<title>SAEP 2022.2 - Fábrica de automóveis</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
<!--<script type="text/javascript" src="js/jquery-1.8.2.js"></script>-->
<script type="text/javascript" src="js/aviso.js"></script>

<style>
  .grid {
        margin-top: 50px;
        border: 1px solid black;
        margin-left: auto;
        margin-right: auto;
        display: grid;
        grid-template-columns: repeat(5, 1fr);
        grid-gap: 50px;
        width: 90%;
        height: 430px;
        border-radius: 5px;
   }
   .span-col-2{
        grid-column: span 2 / auto;
        border: solid 1px;
        margin-top: 20px;
        margin-right: 20px;
        margin-left: 20px;
        margin-bottom: 20px;
   }
   
  .span-row-3{
        grid-row: span 3 / auto;
        border: solid 1px;
        margin-top: 20px;
        margin-right: 20px;
        margin-left: 20px;
        margin-bottom: 20px;        
  }
   
  .span-row-2{
        grid-row: span 2 / auto;
        border: solid 1px;
        margin-top: 20px;
        margin-right: 20px;
        margin-left: 20px;
        margin-bottom: 20px;
  }
  h1{
  text-align: center;
  }
</style>
</head>
<body>
<h1>Fábrica de automóveis</h1>
<div class="grid">
    <?php if(verificar(1)==1){?>
      <?php echo "<a href='autos.php?cod=1'><div class='span-row-3' style='background: #0000FF; color:white; width: 150px;
        height: 60px;'>1</div></a>";?>
    <?php }else{?>
      <?php echo "<div class='span-row-3' onclick='myFunction()' style='background: #FFFFFF;width: 150px;
        height: 90px;'>1</div>";?>
    <?php } ?>
    <?php if(verificar(2)==1){?>
      <?php echo "<a href='autos.php?cod=2'><div class='span-row-2' style='background: #0000FF;color:white;width: 150px;
        height: 90px;'>2</div></a>";?>
    <?php }else{?>
      <?php echo "<div class='span-row-2' onclick='myFunction()' style='background: #FFFFFF;width: 150px;
        height: 80px;'>2</div>";?>
    <?php } ?>
    <?php if(verificar(3)==1){?>
      <?php echo "<a href='autos.php?cod=3'><div class='span-row-2' style='background: #0000FF; color: white;'>3</div></a>";?>
    <?php }else{?>
      <?php echo "<div class='span-row-2' onclick='myFunction()' style='background: #FFFFFF;'>3</div>";?>
    <?php } ?>
    <?php if(verificar(4)==1){?>
      <?php echo "<a href='autos.php?cod=4'><div class='span-row-2' style='background: #0000FF; color: white; width: 250px;
        height: 60px;'>4</div></a>";?>
    <?php }else{?>
      <?php echo "<div class='span-row-2' onclick='myFunction()' style='background: #FFFFFF;'>4</div>";?>
    <?php } ?>
    <?php if(verificar(5)==1){?>
      <?php echo "<a href='autos.php?cod=5'><div class='span-col-1 span-row-1' style='background: #0000FF; color: white;'>5</div></a>";?>
    <?php }else{?>
      <?php echo "<div class='span-col-2 span-row-1' onclick='myFunction()' style='background: #FFFFFF;'>5</div>";?>
    <?php } ?>
    <?php if(verificar(6)==1){?>
      <?php echo "<a href='autos.php?cod=6'><div style='border: solid 1px ;' style='background: #0000FF'; color: white;'>6</div></a>";?>
    <?php }else{?>
      <?php echo "<div style='border: solid 1px ;' onclick='myFunction()' style='background: #FFFFFF;'>6</div>";?>
    <?php } ?>
    <?php if(verificar(7)==1){?>
      <?php echo "<a href='autos.php?cod=7'><div class='span-row-2' style='background: #0000FF; color: white;width: 50px;
        height: 60px;'>7</div></a>";?>
    <?php }else{?>
      <?php echo "<div class='span-row-2' onclick='myFunction()' style='background: #FFFFFF;width: 50px;
        height: 60px;'>7</div>";?>
    <?php } ?>
    <?php if(verificar(8)==1){?>
      <?php echo "<a href='autos.php?cod=8'><div class='span-col-2' style='background: #0000FF; color: white;width: 60px;
        height: 60px;'>8</div></a>";?>
    <?php }else{?>
      <?php echo "<div class='span-col-2' onclick='myFunction()' style='background: #FFFFFF;width: 60px;
        height: 60px;'>8</div>";?>
    <?php } ?>
    <?php if(verificar(9)==1){?>
      <?php echo "<a href='autos.php?cod=9'><div class='span-row-2' style='background: #0000FF; color: white;width: 200px;
        height: 60px;'>9</div></a>";?>
    <?php }else{?>
      <?php echo "<div class='span-row-2' onclick='myFunction()' style='background: #FFFFFF;width: 200px;
        height: 60px;'>9</div>";?>
    <?php } ?>
    <?php if(verificar(10)==1){?>
      <?php echo "<a href='autos.php?cod=10'><div class='span-col-2' style='background: #0000FF; color: white;width: 50px;
        height: 60px;'>10</div></a>";?>
    <?php }else{?>
      <?php echo "<div class='span-col-2' onclick='myFunction()' style='background: #FFFFFF;width: 50px;
        height: 60px;'>10</div>";?>
    <?php } ?>
    <?php if(verificar(11)==1){?>
      <?php echo "<a href='autos.php?cod=11'><div class='span-col-2' style='border: solid 1px ;' style='background: #0000FF; color: white; margin-top: -150px'>11</div></a>";?>
    <?php }else{?>
      <?php echo "<div class='span-col-2' style='border: solid 1px ;' onclick='myFunction()' style='background: #FFFFFF;'>11</div>";?>
    <?php } ?>  
</div>
</body>
</html>