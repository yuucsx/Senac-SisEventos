<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Cadastro Cidade</title>
        <!--<link rel="stylesheet" href="css/estilo.css"/>-->
        <link rel="stylesheet" href="../../css/Cidades/Cadastrar.css"/>
        <iframe src="../menu.html" style="border:none;width:100%;height:60px;"></iframe>

    </head>
    <body>
        <div class="formulariocidade">
            <h2>Cadastro Cidade</h2>
            <form method="post" action="cadastrarcidade.php">

                <table>
                    <ul>
                        <label id="lbnome">Nome da Cidade:</label>
                        <input type="text" id="iptnome" name="nome"/>
                    </ul>
                    
                    <ul> 
                        <label id="lbestcivil">Estado:</label>
                    <select id="iptestado" name="estado"/>
                    <option value="AC">Acre</option>
                    <option value="BA">Bahia</option>
                    <option value="CE">Ceará</option>
                    <option value="DF">Distrito Federal</option>
                    <option value="ES">Espírito Santo</option>
                    <option value="GO">Goiás</option>
                    <option value="RJ">Rio de Janeiro</option>
                    <option value="RS">Rio Grande do Sul</option>
                    <option value="SP">São Paulo</option>
                    <option value="RO">Rondônia</option>
                    </select>
                    </ul>

                    <ul>
                        <input type="submit" id="Cadastrar">
                        <a href="../indexmenu.html"> <input type="button" id="Cancelar" class="botoes" value="Cancelar"/></a>
                    </ul>               

                </table>
            </form>
        </div>

    </body>
</html>

