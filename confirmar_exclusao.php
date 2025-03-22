<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmar Excluir Aluno</title>
</head>

<style>

@import url('https://fonts.googleapis.com/css2?family=Bungee+Tint&display=swap');

body {
  background-image: url("fundoa75.png");
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
  
}

div {
  margin: auto;
  position: relative;
  top: 80px;
  right: 0;
  width: 320px;
  height: 100px;
  font-family: "Bungee Tint", sans-serif;
  font-weight: 400;
  font-size: 30px;
  font-style: normal;
  text-align: center;
  color: white;
  border-radius: 5px;
  background-color: #97abfb;
  padding: 50px;
}

.button {
      padding: 15px 32px;
      text-align: center;
      text-decoration: none;
      color: red;
      font-family: "Bungee Tint", sans-serif;
      font-weight: 400;
      font-size: 16px;
      position: fixed;
      bottom: 15px;
      right: 5px;
      cursor: pointer;
      background-color: #97abfb;
      box-shadow: 0 9px #999;
      
    }
    
    .button:hover {background-color: #eaf6a9}
    
    .button:active {
      background-color: #eaf6a9;
      box-shadow: 0 5px #666;
      transform: translateY(4px);
    }

    .button2 {
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  color: red;
  font-family: "Bungee Tint", sans-serif;
  font-weight: 400;
  font-size: 16px;
  position: fixed;
  bottom: 15px;
  left: 5px;
  cursor: pointer;
  background-color: #97abfb;
  box-shadow: 0 9px #999;
  
}

.button2:hover {background-color: #eaf6a9}

.button2:active {
  background-color: #eaf6a9;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}

.button3 {
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  color: red;
  font-family: "Bungee Tint", sans-serif;
  font-weight: 400;
  font-size: 16px;
  position: fixed;
  bottom: 15px;
  left: 620px;
  cursor: pointer;
  background-color: #97abfb;
  box-shadow: 0 9px #999;
  
}

</style>

<?php

    include('conexao1.php');

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
        $matricula = $_POST['aluno'];

        $sql_delete = "DELETE FROM alunos2 WHERE matricula = '$matricula'";

        if (mysqli_query($conexao, $sql_delete)) {
            echo "<div>Aluno excluído com sucesso</div>";
        } else {
            echo "<div>Erro ao excluir o aluno: </div>" . mysqli_error($conexao);
        }

        mysqli_close($conexao);
    }
?>

<a href="pesquisaexclui.html" class="button3"><b>Excluir novo registro</b></a>
<a href="pesquisa.html" class="button2"><b>Fazer Nova Pesquisa</b></a>
<a href="index.html" class="button"><b>Voltar para a página inicial</b></a>

</body>
</html>