<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 11 - Somar Carga</title>
</head>
<body>

<style>
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
  height: 250px;
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

</style>
    <div>
    <?php

    include('conexao1.php');


    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $matricula = $_POST['matriculacarga'];
        $novo_curso = $_POST['novocurso'];
        $nova_carga = (int)$_POST['horas'];

        $sql_check = "SELECT complementares, carga FROM alunos2 WHERE matricula = '$matricula'";
        $result = mysqli_query($conexao, $sql_check);

        if (mysqli_num_rows($result) > 0) {

            $row = mysqli_fetch_assoc($result);
            $cursos_existentes = $row['complementares'];
            $carga_atual = (int)$row['carga'];

            $cursos_atualizados = $cursos_existentes . ", " . $novo_curso;

            $nova_carga_total = $carga_atual + $nova_carga;

            $sql_update = "UPDATE alunos2 SET complementares = '$cursos_atualizados', carga = $nova_carga_total WHERE matricula = '$matricula'";

            if (mysqli_query($conexao, $sql_update)) {
                echo "Curso complementar e carga horária atualizados com sucesso!";
            } else {
                echo "Erro ao atualizar os dados: " . mysqli_error($conexao);
            }
        } else {

            echo "Erro: Matrícula não encontrada.";
        }

        mysqli_close($conexao);
    }

    ?>
    </div>
    
    <a href="somarcarga.html" class="button2"><b>Adicionar Novo Curso</b></a>
    <a href="index.html" class="button"><b>Voltar para a página inicial</b></a>

</body>
</html>