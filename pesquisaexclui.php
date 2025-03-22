<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excluir Aluno</title>
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

</style>

<?php
    
    include('conexao1.php');

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
        $nome = $_POST['nome'];
        $matricula = $_POST['matricula'];
        $email = $_POST['email'];

        $sql = "SELECT * FROM alunos2 WHERE 1=1";

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
            echo "<h2>Registro encontrado</h2>";
            echo "<form action='confirmar_exclusao.php' method='post'>";
            echo "<table border='1'>
                    <tr>
                        <th>Nome</th>
                        <th>Matrícula</th>
                        <th>E-mail</th>
                        <th>Curso</th>
                        <th>Telefone</th>
                        <th>Endereço</th>
                        <th>CEP</th>
                        <th>Cidade</th>
                        <th>UF</th>
                        <th>Curso para Horas Complementares</th>
                        <th>Carga Horária</th>
                        <th>Excluir</th>
                    </tr>";
            
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>
                        <td>{$row['nome']}</td>
                        <td>{$row['matricula']}</td>
                        <td>{$row['email']}</td>
                        <td>{$row['curso']}</td>
                        <td>{$row['telefone']}</td>
                        <td>{$row['endereco']}</td>
                        <td>{$row['cep']}</td>
                        <td>{$row['cidade']}</td>
                        <td>{$row['uf']}</td>
                        <td>{$row['complementares']}</td>
                        <td>{$row['carga']}</td>
                        <td><input type='radio' name='aluno' value='{$row['matricula']}' required></td>
                    </tr>";
            }

            echo "</table>";
            echo "<br><input type='submit' value='Confirmar Exclusão'>";
            echo "</form>";



        } else {
            echo "<div>Nenhum aluno encontrado</div>";
        }

        mysqli_close($conexao);
    }
?>

<a href="pesquisaexclui.html" class="button"><b>Voltar para a pesquisa</b></a>

</body>
</html>