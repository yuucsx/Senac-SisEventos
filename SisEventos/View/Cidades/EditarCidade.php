<?php

include("../conectarbd.php");

$recid= filter_input(INPUT_POST, 'id');

$recnome= filter_input(INPUT_POST, 'nome');

$recestado= filter_input(INPUT_POST, 'estado');



  if(mysqli_query($conn, "UPDATE tb_cidades SET nome='$recnome', estado='$recestado' WHERE id_cidades=$recid")) {

    echo "<script>alert('Dados alterado com sucesso!'); window.location = 'Consultarcidade.php';</script>";

  }else {

    echo "Não foi possível alterar os dados no Banco de Dados" . $recid . "<br>" . mysqli_error($conn);

  }

  mysqli_close($conn);



?>