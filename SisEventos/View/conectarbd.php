<?php
$servidor = "127.0.0.1";
$dbusuario = "root";
$dbsenha = "";
$dbname = "db_eventos";
$conn = mysqli_connect($servidor, $dbusuario, $dbsenha, $dbname);
if (!$conn) {
    die("Conexão falhou: ". mysqli_connect_error());
}
?>