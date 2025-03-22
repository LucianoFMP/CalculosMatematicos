<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 4 - Calculadora com Switch Case</title>
</head>
<body>

<style>
  @import url('https://fonts.googleapis.com/css2?family=Bungee+Tint&display=swap');
</style>
<style>
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
  height: 200px;
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

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    if (isset($_POST['numero1']) && isset($_POST['numero2'])) {
        $num1 = $_POST['numero1'];
        $num2 = $_POST['numero2'];

        $operacao = $_POST['operacao'];

            switch ($operacao) {
        
                case 'Somar':
                    $resultado = $num1 + $num2;
                    echo "O resultado da <br> operação é: <br><br> * $resultado *";
                    break;

                case 'Subtrair':
                    $resultado = $num1 - $num2;
                    echo "O resultado da <br> operação é: <br><br> * $resultado *";
                    break;

                case 'Multiplicar':
                    $resultado = $num1 * $num2;
                    echo "O resultado da <br> operação é: <br><br> * $resultado *";
                    break;

                case 'Dividir':
                    if ($num2 != 0) {
                        $resultado = $num1 / $num2;
                        echo "O resultado da <br> operação é: <br><br> * $resultado *";
                    } else {
                        echo "Erro: não é possível dividir um número por zero.";
                    }
                    break;

                default:
                    echo "Operação inválida!";
                    break;
            }
        } else {
            echo "Por favor, insira valores numéricos válidos!";
        }
    }

?>
    </div>
    
    <a href="exercicio4.html" class="button2"><b>Fazer uma Nova Operação</b></a>
    <a href="index.html" class="button"><b>Voltar para a página inicial</b></a>

</body>
</html>



