<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 10 - Mostrando o Mês</title>
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
  height: 300px;
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
    
    if (isset($_POST['numero1'])) {
        $mes = $_POST['numero1'];
        
            switch ($mes) {
        
                case '1':
                    echo "O número <br> * $mes * corresponde <br><br> ao mês de <br><br> * janeiro *";
                    break;

                case '2':
                    echo "O número <br> * $mes * corresponde <br><br> ao mês de <br><br> * fevereiro *";
                    break;
                
                case '3':
                    echo "O número <br> * $mes * corresponde <br><br> ao mês de <br><br> * março *";
                    break;
                
                case '4':
                    echo "O número <br> * $mes * corresponde <br><br> ao mês de <br><br> * abril *";
                    break;

                case '5':
                    echo "O número <br> * $mes * corresponde <br><br> ao mês de <br><br> * maio *";
                    break;
                
                case '6':
                    echo "O número <br> * $mes * corresponde <br><br> ao mês de <br><br> * junho *";
                    break;
                    
                case '7':
                    echo "O número <br> * $mes * corresponde <br><br> ao mês de <br><br> * julho *";
                    break;
                
                case '8':
                    echo "O número <br> * $mes * corresponde <br><br> ao mês de <br><br> * agosto *";
                    break;
                    
                case '9':
                    echo "O número <br> * $mes * corresponde <br><br> ao mês de <br><br> * setembro *";
                    break;

                case '10':
                    echo "O número <br> * $mes * corresponde <br><br> ao mês de <br><br> * outubro *";
                    break;

                case '11':
                    echo "O número <br> * $mes * corresponde <br><br> ao mês de <br><br> * novembro *";
                    break;

                case '12':
                    echo "O número <br> * $mes * corresponde <br><br> ao mês de <br><br> * dezembro *";
                    break;

                default:
                    echo "Operação inválida: <br><br> Não existe mês <br><br> com este número";
                    break;
            }
        } 
    }

?>
    </div>
    
    <a href="exercicio10.html" class="button2"><b>Fazer nova consulta</b></a>
    <a href="index.html" class="button"><b>Voltar para a página inicial</b></a>

</body>
</html>



