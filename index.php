<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="stylesheet" href="style.css">
    <title> Calculadora? </title>
    <meta charset="utf-8">
</head>
<style>

    body{
    background-color:rgb(226, 190, 145);
    
}
.container{
    background-color: rgb(255, 195, 127);
    margin: 50px auto;
    padding: 30px;
    width: 400px;
    height: auto;
    border: 1px solid rgb(155, 97, 11);
    font-size: 20px;
}
.container form {
   padding: 30px;
   background-color: rgb(255, 195, 127);
}
.container form input{
    width: 80px;
    height: 30px;
    border-radius: 10px;
    background-color: rgb(224, 146, 146);
}
h1{
    text-align: center;

    
}
</style>
<body>
    <div class="container">
        <div class="titulo">
            <h1>Calculadora</h1>
        </div>
        <form  method="POST">
            <p class="inputN">
                Número 1: <input type="number" name="numero1" />
            </p>
            <p class="inputN">
                Número 2: <input type="number" name="numero2" />
            </p>
            <button class="btnOp" name="adicao" id="adicao">+</button>

            <button class="btnOp" name="subtracao" id="subtracao">-</button>

            <button class="btnOp" name="multiplicacao" id="multiplicacao">X</button>

            <button class="btnOp" name="divisao" id="divisao">/</button>
            <?php
              if(isset($_POST['adicao'])|| isset($_POST['subtracao'])|| isset($_POST['multiplicacao']) ||isset($_POST['divisao'])) {
                $n1 = $_POST['numero1'];
                $n2 = $_POST['numero2'];

                if (isset($_POST['adicao'])) {
                    echo "<div class ='res'> Resultado da adição: " . ($n1 + $n2) . "</div>";
                } else if (isset($_POST['subtracao'])) {
                    echo "<div class ='res'> Resultado da subtração: " . ($n1 - $n2). "</div>";
                } else if (isset($_POST['multiplicacao'])) {
                    echo "<div class ='res'> Resultado da multiplicação: " . ($n1 * $n2). "</div>";
                } else if (isset($_POST['divisao'])) {
                    echo "<div class ='res'> Resultado da divisão: " . ($n1 / $n2). "</div>";
                }

            }
                ?>
</form>
    </div>
</body>

</html>