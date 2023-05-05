<?php
require_once '../vendor/autoload.php';

use \Mailjet\Resources;

$apiKey = 'de0f00bd9a398de5e88bac2e2f223330';
$apiSecret = '233c1ac7e30eb63a1bc2dfa9990583e3';
$mailjet = new \Mailjet\Client($apiKey, $apiSecret, true, ['version' => 'v3.1']);

if (isset($_POST['enviar'])) {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $mensagem = $_POST['mensagem'];

    $mensagem_completa = "Nome: " . $nome . "\nE-mail: " . $email . "\nMensagem: " . $mensagem;
    $mensagem_html = "<p><strong>Nome:</strong> " . $nome . "<br><strong>E-mail:</strong> " . $email . "<br><strong>Mensagem:</strong><br>" . nl2br($mensagem) . "</p>";

    $body = [
        'Messages' => [
            [
                'From' => [
                    'Email' => "yuu.csx@gmail.com",
                    'Name' => "Seu Nome"
                ],
                'To' => [
                    [
                        'Email' => "yuu.csx@gmail.com",
                        'Name' => "Carlos"
                    ]
                ],
                'Subject' => "Assunto do email",
                'TextPart' => $mensagem_completa,
                'HTMLPart' => $mensagem_html,
                'CustomID' => "AppGettingStartedTest"
            ]
        ]
    ];

    $response = $mailjet->post(Resources::$Email, ['body' => $body]);

    if ($response->success()) {
        $responseBody = $response->getData();
        if ($responseBody['Messages'][0]['Status'] == 'success') {
            echo "<script>alert('Mensagem enviada com sucesso!'); window.location = 'contato.html';</script>";
        } else {
            echo "<script>alert('Não foi possível enviar a mensagem. Tente novamente mais tarde.'); window.location = 'contato.html';</script>";
        }
    } else {
        echo "<script>alert('Não foi possível enviar a mensagem. Tente novamente mais tarde.'); window.location = 'contato.html';</script>";
    }
}
