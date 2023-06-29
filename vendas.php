<?php
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $dbname = "bd_autos";
   
    //Criar a conexao
    $conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
   
    if(!$conn){
        die("Falha na conexao: " . mysqli_connect_error());
    }else{
        //echo "Conexao realizada com sucesso";
    }  
    $id_auto = ($_GET['cod']);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Vendas</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
    </body>
        <div class="w3-container">
            <?php
            $sql_autos = "SELECT modelo FROM automoveis WHERE id =$id_auto";
            $resultado_autos = mysqli_query($conn, $sql_autos);
                    while($row_autos = mysqli_fetch_assoc($resultado_autos)){ ?>
                        <h2><?php echo $row_autos['modelo']; ?></h2><br>            
            <?php
                    }
            ?>  
            <form method="POST" action="estoque.php">
                <input type="hidden" id="id_auto" value="<?php echo $id_auto; ?>" name="id_auto"/>
                <label>Clientes: </label>
                    <?php include("combo_clientes.php");?>
                <label>Concessionaria: </label>
                    <select name="id_conc" id="id_conc" required>
                        <option>Selecione</option>
                        <?php
                            $result_concessionaria = "SELECT c.id,a.quantidade, c.concessionaria
                                                        FROM concessionaria c INNER JOIN alocacao a
                                                            ON c.id = a.concessionaria
                                                                WHERE a.automovel = $id_auto";
                            $resultado_concessionaria = mysqli_query($conn, $result_concessionaria);
                            while($row_concessionaria = mysqli_fetch_assoc($resultado_concessionaria)){ ?>
                                <option value="<?php echo $row_concessionaria['id']." | ".$row_concessionaria['quantidade']; ?>"><?php echo $row_concessionaria['concessionaria']." | ".$row_concessionaria['quantidade']; ?></option>
                                <?php  
                            }
                        ?>
                    </select><br><br>
                
                <input type="submit" id="confirmar" value="Confirmar" onclick="ver()">        
            </form>
        </div>
    </body>
</html>