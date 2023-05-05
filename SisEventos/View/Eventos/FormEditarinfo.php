<!DOCTYPE html>

<html lang="pt-br">

  <head>

    <meta charset="UTF-8">

    <title>Editar Cidade</title>

    <link rel="stylesheet" href="css/estiloforms.css"/>



  </head>

  <body>

    <?php

      include("../conectarbd.php");

      $recid=filter_input(INPUT_GET, 'editarid');

      $selecionar= mysqli_query($conn, "SELECT * FROM tb_info WHERE id_info=$recid");

      $campo= mysqli_fetch_array($selecionar);

    ?>

    <div class="formularioeditarinfo">

      <form method="post" action="Editarinfo.php">

        <h1>Alterar Info</h1>
      
<!esta linha cria um campo oculto para passar o id_cidade, pois senão ao clicar em Salvar o código não saberá onde salvar.-->
        <input type="hidden" name="id" value="<?=$campo["id_info"]?>"> 

        <label>Nome</label><br> 
        <input type="text" name="nome" placeholder="Nome" value="<?=$campo["nome"]?>"> <br><br>

        <label>Sobrenome</label><br>
        <input type="text" name="sobrenome" placeholder="sobrenome" value="<?=$campo["sobrenome"]?>"> <br><br>

        <label>CPF</label><br>
        <input type="text" name="cpf" placeholder="cpf" value="<?=$campo["cpf"]?>"> <br><br>

        <label>Sexo</label><br>
        <input type="text" name="sexo" placeholder="" value="<?=$campo["sexo"]?>"> <br><br>

        <label>Nascimento</label><br>
        <input type="date" name="data_nasc" placeholder="data_nasc" value="<?=$campo["data_nasc"]?>"> <br><br>

        <label>celular</label><br>
        <input type="text" name="celular" placeholder="celular" value="<?=$campo["celular"]?>"> <br><br>

        <label>cep</label><br>
        <input type="text" name="cep" placeholder="cep" value="<?=$campo["cep"]?>"> <br><br>

        <label>endereco</label><br>
        <input type="text" name="endereco" placeholder="endereco" value="<?=$campo["endereco"]?>"> <br><br>

        <label>num</label><br>
        <input type="text" name="num" placeholder="num" value="<?=$campo["num"]?>"> <br><br>

        <label>complemento</label><br>
        <input type="text" name="complemento" placeholder="complemento" value="<?=$campo["complemento"]?>"> <br><br>

        <label>bairro</label><br>
        <input type="text" name="bairro" placeholder="bairro" value="<?=$campo["bairro"]?>"> <br><br>

        <label>cidade</label><br>
        <input type="text" name="cidade" placeholder="cidade" value="<?=$campo["cidade"]?>"> <br><br>

        <label>estado</label><br>
        <input type="text" name="estado" placeholder="estado" value="<?=$campo["estado"]?>"> <br><br>

        <label>email</label><br>
        <input type="text" name="email" placeholder="email" value="<?=$campo["email"]?>"> <br><br>

        <input type="submit" class="botoes" value="Salvar" >
        <a href="Consultarcidade.php"><input type="button" class="botoes" value="Cancelar"/></a>

      </form>

    </div>

     

  </body>

</html>
