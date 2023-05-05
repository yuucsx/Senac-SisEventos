<?php

include("../conectarbd.php");

$recid= filter_input(INPUT_GET, 'cidade');



  if(mysqli_query($conn, "DELETE FROM tb_cidades WHERE id_cidades=$recid")) {

    echo "<script>alert('Dados excluidos com sucesso!'); window.location = 'Consultarcidade.php';</script>";

  }else {

    echo "Não foi possível excluir os dados no Banco de Dados" . $recid . "<br>" . mysqli_error($conn);

  }

  mysqli_close($conn);



?>