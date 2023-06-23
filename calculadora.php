<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="Icon" href="5465858.png">
    <link href="calculadora.css" rel="stylesheet">
    <title>Mercearia do João</title>
</head>

<body>


    <div class="calculator">
        <form action="calculadora.php" method="post">
            <div class="calculator__display">
                <textarea type="text" name="resultado" id="resultado" readonly rows="4" cols="50">
                        <?php

                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                            $resultado = $_POST["resultado"];
                            eval('$resultado = ' . $resultado . ';');
                            echo $resultado;
                        }

                        ?>
                    </textarea>
            </div>
            <div class="calculator__keys">

                <button class="key--operator" type="button" value="+" onclick="adicionar('+')">+</button>
                <button class="key--operator" type="button" value="-" onclick="adicionar('-')">-</button>
                <button class="key--operator" type="button" value="*" onclick="adicionar('*')">*</button>
                <button class="key--operator" type="button" value="/" onclick="adicionar('/')">/</button>


                <button type="button" value="7" onclick="adicionar('7')">7</button>
                <button type="button" value="8" onclick="adicionar('8')">8</button>
                <button type="button" value="9" onclick="adicionar('9')">9</button>

                <button type="button" value="AC" onclick="limpar()">AC</button>


                <button type="button" value="4" onclick="adicionar('4')">4</button>
                <button type="button" value="5" onclick="adicionar('5')">5</button>
                <button type="button" value="6" onclick="adicionar('6')">6</button>

                <button type="button" value="1" onclick="adicionar('1')">1</button>
                <button type="button" value="2" onclick="adicionar('2')">2</button>
                <button type="button" value="3" onclick="adicionar('3')">3</button>

                <button type="button" value="." onclick="adicionar('.')">.</button>
                <button type="button" value="0" onclick="adicionar('0')">0</button>
                <button type="button" value="," onclick="adicionar(',')">,</button>

                <button class="key--equal" type="submit" value="=">=</button>

            </div>

        </form>
    </div>

    <div class="sobre"><a href="sobre.html"><img src="img/64031.png" alt="Continuar" width="50" height="50"></a></div>
    <button class="botao"><a href="index.html">Voltar</a></button>



    <script>
        var resultado = document.getElementById("resultado");

        function adicionar(valor) {
            resultado.value += valor;
        }

        function limpar() {
            resultado.value = "";
        }

    </script>
</body>

</html>