<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Resultado da Pesquisa</title>
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
  left: 630px;
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

<?php

include("conexao1.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nome = $_POST['nome'];
    $matricula = $_POST['matricula'];
    $email = $_POST['email'];

    $sql = "SELECT nome, matricula, curso, email, telefone, endereco, cep, cidade, uf, complementares, carga FROM alunos2 WHERE 1=1";

    if (!empty($nome)) {
        $sql .= " AND nome LIKE '%$nome%'";
    }
    if (!empty($matricula)) {
        $sql .= " AND matricula = '$matricula'";
    }
    if (!empty($email)) {
        $sql .= " AND email = '$email'";
    }

    $result = mysqli_query($conexao, $sql);

    if (mysqli_num_rows($result) > 0) {
        echo "<table border='1'>
                <tr>
                    <th>Nome</th>
                    <th>Matrícula</th>
                    <th>Curso</th>
                    <th>E-mail Institucional</th>
                    <th>Telefone</th>
                    <th>Endereço</th>
                    <th>CEP</th>
                    <th>Cidade</th>
                    <th>UF</th>
                    <th>Curso para Horas Complementares</th>
                    <th>Carga Horária</th>
                </tr>";
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>
                            <td>{$row['nome']}</td>
                            <td>{$row['matricula']}</td>
                            <td>{$row['curso']}</td>
                            <td>{$row['email']}</td>
                            <td>{$row['telefone']}</td>
                            <td>{$row['endereco']}</td>
                            <td>{$row['cep']}</td>
                            <td>{$row['cidade']}</td>
                            <td>{$row['uf']}</td>
                            <td>{$row['complementares']}</td>
                            <td>{$row['carga']}</td>
                        </tr>";
                }
    
                echo "</table>";

    } else {
        echo "<div><strong>Nenhum aluno encontrado</strong></div>";
    }

    mysqli_close($conexao);
}

?>

</div>

<a href="excluir.html" class="button3"><b>Excluir registro</b></a>
<a href="pesquisa.html" class="button2"><b>Fazer Nova Pesquisa</b></a>
<a href="index.html" class="button"><b>Voltar para a página inicial</b></a>

</body>
</html>