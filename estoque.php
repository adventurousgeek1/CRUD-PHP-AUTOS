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
   
?>


<html>
<head>
<title>SAEP 2022.2 - Fábrica de automóveis</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php
    $conc = trim($_POST['id_conc']);
    $id_auto =  trim($_POST['id_auto']);
    //$qtde =   trim($_POST['qtde']);

    $qtde = explode("|", $conc);
   
    if($qtde[1]>0){//validação
       
        $sql = "UPDATE alocacao SET quantidade = $qtde[1]-1
                        WHERE concessionaria = $qtde[0] AND automovel = $id_auto";
        $query = mysqli_query($conn, $sql);

        if ($query) :
            echo "<h2>Operação efetuada com sucesso!</h2>";
        else:
            echo "<h2>Erro na Operação!</h2>";
        endif;
    }else{
        echo "<h2>Não há carros no estoque!</h2>";
    }
?>
</body>
</html>