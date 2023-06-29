<select name="cboClientes" id="select" required> <!-- "required" serve para obrigar o usuário a selecionar uma opção-->
    <option value = "">Selecione</option>
        <?php
            $result_clientes = "SELECT nome FROM clientes";
            $resultado_clientes = mysqli_query($conn, $result_clientes);
            while($row_clientes = mysqli_fetch_assoc($resultado_clientes)){ ?>
                <option value="clientes"><?php echo $row_clientes['nome']; ?></option> <?php
            }
        ?>
</select><br><br>