<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Consultar Infos</title>
        <link type="text/css" rel="stylesheet" href="../../css/Eventos/Consultar.css">
        <iframe src="../menu.html" style="border:none;width:100%;height:60px;"></iframe>
    </head>

     <body>
                <h1>Consultar Infos Cadastrados</h1>
                <table
                   width="100%"
                   border="1" 
                   bordercolor="black"
                   cellspacing="2" 	
                   cellpadding="5"
                   >
                    <tr>
                        <td align="center"> <strong>ID</strong></td>	
                        <td align="center"> <strong>Nome</strong></td>		
                        <td align="center"> <strong>Sobrenome</strong></td>
                        <td align="center"> <strong>CPF</strong></td>
                        <td align="center"> <strong>Sexo</strong></td>
                        <td align="center"> <strong>Nascimento</strong></td>
                        <td align="center"> <strong>celular</strong></td>
                        <td align="center"> <strong>cep </strong></td>
                        <td align="center"> <strong>endereco</strong></td>
                        <td align="center"> <strong>num</strong></td>
                        <td align="center"> <strong>complemento</strong></td>
                        <td align="center"> <strong>bairro</strong></td>
                        <td align="center"> <strong>cidade</strong></td>
                        <td align="center"> <strong>estado</strong></td>
                        <td align="center"> <strong>email</strong></td>
                        <td width="10"> <strong>Editar</strong></td>
                        <td width="10"> <strong>Deletar</strong></td>
                    </tr>

                    <?php
                        include("../conectarbd.php");
                        $selecionar= mysqli_query($conn, "SELECT * FROM tb_info");
                        while ($campo= mysqli_fetch_array($selecionar)){?>
                            <tr>
                                <td align="center"><?=$campo["id_info"]?></td>
                                <td align="center"><?=$campo["nome"]?></td>
                                <td align="center"><?=$campo["sobrenome"]?></td>
                                <td align="center" width="120"><?=$campo["cpf"]?></td>
                                <td align="center"><?=$campo["sexo"]?></td>
                                <td align="center"><?=$campo["data_nasc"]?></td>
                                <td align="center"><?=$campo["celular"]?></td>
                                <td align="center"><?=$campo["cep"]?></td>
                                <td align="center"><?=$campo["endereco"]?></td>
                                <td align="center"><?=$campo["num"]?></td>
                                <td align="center"><?=$campo["complemento"]?></td>
                                <td align="center"><?=$campo["bairro"]?></td>
                                <td align="center"><?=$campo["cidade"]?></td>
                                <td align="center"><?=$campo["estado"]?></td>
                                <td align="center"><?=$campo["email"]?></td>
                                <td align="center"><a href="FormEditarinfo.php?editarid=<?php echo $campo ['id_info'];?>">Editar</a></td>
                                <td align="center"><i><a href="Excluirinfo.php?p=excluir&info=<?php echo $campo['id_info'];?>">Excluir</i></a></td>
                            </tr>
                    <?php }?>
                </table><br>
                    <a href="../indexmenu.html"><input type="button" class="botoes" value="Cancelar"/></a>
    </body>
</html>
