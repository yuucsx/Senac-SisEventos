<?php include_once "../conectarbd.php"; ?>

<html>
    <body>
        <?php
        $nome = $_POST["nome"];
        $estado = $_POST["estado"];
        $conn = mysqli_connect($servidor, $dbusuario, $dbsenha, $dbname);
        mysqli_select_db($conn, $dbname);
        $sql = "INSERT INTO tb_cidades(nome, estado) VALUES ('$nome', '$estado')";
        if (mysqli_query($conn, $sql)) {
            echo "<script>alert('Seus dados foram salvos !'); window.location = '../indexmenu.html';</script>";
        } else {
            echo "Deu erro: " . $sql . "<br>" . mysqli_error($conn);
        }
        mysqli_close($conn);
        ?>
    </body>
</html>

