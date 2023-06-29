<?php
    $area = ($_GET['cod']);
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $dbname = "bd_autos";    
    //Criar a conexao
    $conexao = mysqli_connect($servidor, $usuario, $senha, $dbname);    
    if(!$conexao){
        die("Falha na conexao: " . mysqli_connect_error());
    }else{
        //echo "Conexao realizada com sucesso";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fábrica de automóveis</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="w3-container">
    <h2>Área: <?php echo $area; ?></h2>
    <?php
        $result_autos = "SELECT a.id, a.modelo, a.preco
                            FROM automoveis a INNER JOIN alocacao al ON
                                a.id=al.automovel
                                    WHERE area = $area";
        $resultado_autos = mysqli_query($conexao, $result_autos);
            while($row_autos = mysqli_fetch_assoc($resultado_autos)){ ?>
                <label><?php echo $row_autos['modelo']." | ".$row_autos['preco']; ?><div id="divBut"><?php echo "<a href='vendas.php?cod=".$row_autos['id']."'><button>Vender</button></a>";?></div></label><br>          
    <?php
            }
    ?>
    </div>
</body>
</html>