<?php

include("../conectarbd.php");

$recid= filter_input(INPUT_GET, 'info');



  if(mysqli_query($conn, "DELETE FROM tb_info WHERE id_info=$recid")) {

    echo "<script>alert('Dados excluidos com sucesso!'); window.location = 'Consultarinfo.php';</script>";

  }else {

    echo "Não foi possível excluir os dados no Banco de Dados" . $recid . "<br>" . mysqli_error($conn);

  }

  mysqli_close($conn);



?>