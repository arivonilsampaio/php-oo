<?php
function sendEmail($destinatarios = "", $cc = "", $assunto = "", $mensagem = ""){
  echo "Destinatários: " . $destinatarios. "<br>";
  echo "CC: ". $cc. "<br>";
  echo "Assunto: ". $assunto. "<br>";
  echo "Mensagem: ". $mensagem. "<br>";
}

sendEmail(
  assunto: "Argumentos Nomeados",
  destinatarios: "sampaiodesign@gmail.com",
  mensagem: "Dominando a feature de argumentos nomeados do PHP 8",
);

echo "<hr>";


sendEmail(
  "sampaiodesign@gmail.com",
  "teste@teste.com.br",
  "Argumentos Nomeados",
  "Dominando a feature de argumentos nomeados do PHP 8",
);


echo "<hr>";

sendEmail(
  "sampaiodesign@gmail.com",
  "Argumentos Nomeados",
  "Dominando a feature de argumentos nomeados do PHP 8",
);


?>