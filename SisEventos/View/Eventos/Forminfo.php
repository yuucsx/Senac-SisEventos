<!DOCTYPE html>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/cpf_cnpj/0.2.0/cpf.js"></script>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Cadastro Info</title>
        <link rel="stylesheet" href="../../css/Eventos/Cadastrar.css"/>
        <link rel="stylesheet" href="../../css/Eventos/Sexo.css"/>
        <iframe src="../menu.html" style="border:none;width:100%;height:60px;"></iframe>
    </head>
    <body>
        <div class="formularioinfo">
            <h2>Cadastro Info</h2>
            <form method="post" action="cadastrarinfo.php">
                <table>
                    <tr>
                        <td>
                            <ul>
                                <li>
                                    <label for="iptnome">Nome:</label>
                                    <input type="text" id="iptnome" name="nome"/>
                                </li>

                                <li>
                                    <label for="iptsobrenome">Sobrenome:</label>
                                    <input type="text" id="iptsobrenome" name="sobrenome"/>
                                </li>

                                <li>
                                    <label for="iptcpf">CPF:</label>
                                    <input type="text" id="iptcpf" name="cpf"/>
                                </li>

                                <li>
                                    <label>Sexo:</label>
                                    <div class="sexo">
                                        <input type="radio" id="masculino" name="sexo" value="masculino"/>
                                        <label for="masculino"><div class="bolinha"></div>Masculino</label>

                                        <input type="radio" id="feminino" name="sexo" value="feminino"/>
                                        <label for="feminino"><div class="bolinha"></div>Feminino</label>
                                    </div>
                                </li>
                
                                <li>
                                    <label for="iptdn">Data de Nascimento:</label>
                                    <input type="date" id="iptdn" name="data_nasc"/>
                                </li>
                                
                                <li>
                                    <label for="iptcelular">Celular:</label>
                                    <input type="text" id="iptcelular" name="celular"/>
                                </li>
                                
                                <li>
                                    <label for="iptcep">CEP:</label>
                                    <input type="text" id="iptcep" name="cep"/>
                                    <script>
                                    $('#iptcep').on('blur', function() {
                                        var cep = $(this).val().replace(/\D/g, '');

                                        if (cep != '') {
                                            var url = 'https://viacep.com.br/ws/' + cep + '/json/';

                                            $.ajax({
                                                url: url,
                                                type: 'GET',
                                                dataType: 'json',
                                                success: function(data) {
                                                    if (!('erro' in data)) {
                                                        $('#iptendereco').val(data.logradouro);
                                                        $('#iptbairro').val(data.bairro);
                                                        $('#iptcidade').val(data.localidade);
                                                        $('#iptestado').val(data.uf);
                                                        $('#iptnum').val(data.numero);
                                                        $('#iptcomplemento').val(data.complemento);
                                                    }
                                                },
                                                error: function() {
                                                    alert('CEP não encontrado.');
                                                }
                                            });
                                        }
                                    });
                                </script>
                                </li>

                                <li>
                                    <label for="iptendereco">Endereço:</label>
                                    <input type="text" id="iptendereco" name="endereco"/>
                                </li>

                                <li>
                                    <label for="iptnum">Numero:</label>
                                    <input type="text" id="iptnum" name="num"/>
                                </li>

                                <li>
                                    <label for="iptcomplemento">Complemento:</label>
                                    <input type="text" id="iptcomplemento" name="complemento"/>
                                </li>

                                <li>
                                    <label for="iptbairro">Bairro:</label>
                                    <input type="text" id="iptbairro" name="bairro"/>
                                </li>

                                <li>
                                    <label for="iptcidade">Cidade:</label>
                                    <input type="text" id="iptcidade" name="cidade"/>
                                </li>

                                <li>
                                    <label for="iptestado">Estado:</label>
                                    <input type="text" id="iptestado" name="estado"/>
                                </li>

                                <li>
                                    <label for="iptemail">Email:</label>
                                    <input type="text" id="iptemail" name="email"/>
                                </li>
                            </ul>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <ul>
                                <li>
                                    <input type="submit" id="Cadastrar" value="Cadastrar">
                                    <a href="../indexmenu.html" class="botoes">Cancelar</a>
                                </li>
                            </ul>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </body>

    <script>
    $(document).ready(function() {
        var cpfValidator = CPF;

        $('#iptcpf').on('blur', function() {
            var cpf = $(this).val().replace(/\D/g, '');
            if (cpf != '') {
                if (!cpfValidator.isValid(cpf)) {
                    $('#cpf-erro').html('CPF inválido.');
                } else {
                    $('#cpf-erro').html('');
                }
            }
        });

        $('form').on('submit', function(e) {
            var cpf = $('#iptcpf').val().replace(/\D/g, '');
            if (cpf != '' && !cpfValidator.isValid(cpf)) {
                e.preventDefault();
                alert('Por favor, corrija o CPF antes de enviar.');
            }
        });
    });
</script>
</html>
