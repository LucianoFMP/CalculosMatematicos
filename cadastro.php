<!DOCTYPE html>
<html lang="pt-br">
<head>
        <meta charset="utf-8">
        <title>Formulário de Cadastro - Processamento</title>
</head>
<body>
<style>
  @import url('https://fonts.googleapis.com/css2?family=Anton&display=swap');
  @import url('https://fonts.googleapis.com/css2?family=Bungee+Tint&display=swap');

body {
  background-image: url("6081466.jpg");
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}

div {
  margin: auto;
  position: relative;
  top: 80px;
  right: 0;
  width: 300px;
  height: 160px;
  font-family: "Anton", sans-serif;
  font-weight: 400;
  font-style: normal;
  font-size: 40px;
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

.button:hover {background-color: #eaf6a9}

.button:active {
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
  left: 560px;
  cursor: pointer;
  background-color: #97abfb;
  box-shadow: 0 9px #999;
  
}

.button3:hover {background-color: #eaf6a9}

.button3:active {
  background-color: #eaf6a9;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}

</style>
    <div>

    <?php

    include('conexao1.php');

    $nome = $_POST['nome'];
    $matricula = $_POST['matricula'];
    $curso = $_POST['curso'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $endereco = $_POST['endereco'];
    $cep = $_POST['cep'];
    $cidade = $_POST['cidade'];
    $uf = $_POST['uf'];
    $complementares = $_POST['complementares'];
    $carga = $_POST['carga'];

        $sql = "INSERT INTO alunos2(nome, matricula, curso, email, telefone, endereco, cep, cidade, uf, complementares, carga)
                    VALUES ('$nome', '$matricula', '$curso', '$email', '$telefone', '$endereco', '$cep', '$cidade', '$uf', '$complementares', '$carga')";
        
        if (mysqli_query($conexao, $sql)){
            echo "Usuário cadastrado com sucesso";
        }
        else {
            echo "Erro" . mysqli_connect_error($conexao);
        }
        mysqli_close($conexao);
    ?>

    </div>

<a href="somarcarga.html" class="button3"><b>Adicionar novo curso complementar</b></a>
<a href="formulario.html" class="button2"><b>Cadastrar novo usuário</b></a>
<a href="index.html" class="button"><b>Voltar para a página inicial</b></a>

</body>
</html>