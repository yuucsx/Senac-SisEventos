<?php

include("../conectarbd.php");

$recid = filter_input(INPUT_POST, 'id');
$recnome = filter_input(INPUT_POST, 'nome');
$recsobrenome = filter_input(INPUT_POST, 'sobrenome');
$reccpf = filter_input(INPUT_POST, 'cpf');
$reccelular = filter_input(INPUT_POST, 'celular');
$reccep = filter_input(INPUT_POST, 'cep');
$recendereco = filter_input(INPUT_POST, 'endereco');
$recnum = filter_input(INPUT_POST, 'num');
$reccomplemento = filter_input(INPUT_POST, 'complemento');
$recbairro = filter_input(INPUT_POST, 'bairro');
$reccidade = filter_input(INPUT_POST, 'cidade');
$recestado = filter_input(INPUT_POST, 'estado');
$recemail = filter_input(INPUT_POST, 'email');

if(mysqli_query($conn, "UPDATE tb_info SET nome='$recnome', sobrenome='$recsobrenome', cpf='$reccpf', celular='$reccelular', cep='$reccep', endereco='$recendereco', num='$recnum', complemento='$reccomplemento', bairro='$recbairro', cidade='$reccidade', estado='$recestado', email='$recemail' WHERE id_info=$recid")) {
    echo "<script>alert('Dados alterado com sucesso!'); window.location = 'Consultarinfo.php';</script>";
} else {
    echo "Não foi possível alterar os dados no Banco de Dados" . $recid . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>