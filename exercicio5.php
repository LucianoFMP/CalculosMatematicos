<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 5 - Par ou Ímpar</title>
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
    
    if (isset($_POST['numerodigitado'])) {
        $num1 = $_POST['numerodigitado'];
            
        if ($num1 % 2 == 0) {
                echo "O número <br> digitado é: <br><br> * par *";
            }
            
        elseif ($num1 % 2 != 0) {
                echo "O número <br> digitado é: <br><br> * ímpar *";
            }
                        
        }
    }
?>
    </div>
    
    <a href="exercicio5.html" class="button2"><b>Escolher um novo número</b></a>
    <a href="index.html" class="button"><b>Voltar para a página inicial</b></a>

</body>
</html>



