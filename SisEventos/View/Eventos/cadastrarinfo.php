<?php
include_once "../conectarbd.php";
require_once '../../vendor/autoload.php';

use Respect\Validation\Validator as v;

?>
<html>
    <body>
        <?php
        $nome = $_POST["nome"];
        $sobrenome = $_POST["sobrenome"];
        $cpf = $_POST["cpf"];
        $cpf = preg_replace('/[^0-9]/', '', $cpf); // Adicione esta linha
        $sexo = $_POST["sexo"];
        $data_nasc = $_POST["data_nasc"];
        $celular = $_POST["celular"];
        $cep = $_POST["cep"];
        $endereco = $_POST["endereco"];
        $num = $_POST["num"];
        $complemento = $_POST["complemento"];
        $bairro = $_POST["bairro"];
        $cidade = $_POST["cidade"];
        $estado = $_POST["estado"];
        $email = $_POST["email"];

        $cpfValidator = v::cpf();
        if (!$cpfValidator->validate($cpf)) {
            echo "<script>alert('CPF inválido.'); window.location.href='forminfo.php';</script>";
            exit();
        }

        $conn = mysqli_connect($servidor, $dbusuario, $dbsenha, $dbname);
        mysqli_select_db($conn, $dbname);
        $sql = "INSERT INTO tb_info(nome, sobrenome, cpf, sexo, data_nasc, celular, cep, endereco, num, complemento, bairro, cidade, estado, email) VALUES ('$nome', '$sobrenome', '$cpf', '$sexo', '$data_nasc', '$celular', '$cep', '$endereco', '$num', '$complemento', '$bairro', '$cidade', '$estado', '$email')";
        if (mysqli_query($conn, $sql)) {
            echo "<script>alert('Seus dados foram salvos !'); window.location = '../indexmenu.html';</script>";
        } else {
            echo "Deu erro: " . $sql . "<br>" . mysqli_error($conn);
        }
        mysqli_close($conn);
        ?>
    </body>
</html>
