<?php 

// echo "<pre>";
// print_r($_FILES);    
// exit;

$pasta = "../fotos/";
$nome_imagem = $_FILES['imagem']['name'];
$error = $_FILES['imagem']['error'];
$tmp = $_FILES['imagem']['tmp_name']; // caminho temporario da imagem
    
if (isset($nome_imagem)) {
  $local = "../fotos/";
  if (move_uploaded_file($tmp, $local.$nome_imagem)) {
    echo 'Sucesso';
  } else {
    echo 'tivemos algum problema :/';
  }
}
    




