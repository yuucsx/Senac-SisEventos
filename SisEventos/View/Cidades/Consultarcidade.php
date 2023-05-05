<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Consultar Cidades</title>
        <link rel="stylesheet" href="../../css/Cidades/Consultar.css"/>
        <iframe src="../menu.html" style="border:none;width:100%;height:60px;"></iframe>
    </head>

     <body>
        <h1>Consultar Cidades Cadastradas</h1>
        <table>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Estado</th>
                <th>Editar</th>
                <th>Deletar</th>
            </tr>

            <?php
                include("../conectarbd.php");
                $selecionar= mysqli_query($conn, "SELECT * FROM tb_cidades");
                while ($campo= mysqli_fetch_array($selecionar)){?>
                    <tr>
                        <td><?=$campo["id_cidades"]?></td>
                        <td><?=$campo["nome"]?></td>
                        <td><?=$campo["estado"]?></td>
                        <td><a href="FormEditarCidade.php?editarid=<?php echo $campo ['id_cidades'];?>">Editar</a></td>
                        <td><a href="Excluircidade.php?p=excluir&cidade=<?php echo $campo['id_cidades'];?>">Excluir</a></td>
                    </tr>
            <?php }?>
        </table>
        <br>
        <a href="../indexmenu.html" class="botoes">Cancelar</a>
    </body>
</html>
