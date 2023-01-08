<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apresentar Novos Funcionários</title>
</head>
<body bgcolor="#ffe0f0">

<font color="Maroon">
<h2>Imprime uma apresentação para cada novo funcionário.</h2>
<h3>* conforme o GÊNERO (Masculino, Feminino, Não Binário etc.)</h3>
</font>

<?php

  /* Função apresentar_funcionario(...)
     Autor: Michel de Brito
     Criada em: 08/01/2023
     Objetivo: Contruir um frase de apresentação conforme o gênero da pessoa.
  */
  function apresentar_funcionario($nome, $sobrenome, $idade, $genero, $area) {
    
    $sufixo = '@';
    $ess_ = 'ess@';

    if (strtoupper($genero) == 'F') {
      $sufixo = 'a';
      $ess_ = "Essa";
    } elseif (strtoupper($genero) == 'M') {
      $sufixo = 'o';
      $ess_ = "Esse";
    } else {
      $sufixo = '@';
      $ess_ = "Ess@";
    }
    
    return "$ess_ é $sufixo <b>$nome $sobrenome</b>, tem $idade anos de idade" .
      " e é noss$sufixo nov$sufixo funcionári$sufixo na área de <b>$area</b>.";
  }

  echo "<p>" . apresentar_funcionario('Mauro', 'Lima', 48, 'm', 'Vendas') . "</p>";
  echo "<p>" . apresentar_funcionario('Laura', 'Soares', 42, 'F', 'Logística') . "</p>";
  echo "<p>" . apresentar_funcionario('Luana', 'Lima Soares', 27, 'f', 'TI') . "</p>";
  echo "<p>" . apresentar_funcionario('Leni', 'Figueroa', 19, '?', 'Marketing') . "</p>";

?>

</body>
</html>
