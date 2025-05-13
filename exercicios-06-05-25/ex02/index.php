<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <h1>Bem vindo!!</h1>
        <p>Este programa irá calcular o volume de uma caixa retangular para você<br>
           usuário, será necessário informar as seguintes medidas: </p>
        <div class="container-Form">

            <form action="volume.php" method="POST">
                <label for="larg">Insira a largura da caixa: </label><br>
                <input type="text" name="larg" id="larg"><br><br>
                <label for="comp">Digite o comprimento: </label><br>
                <input type="text" name="comp" id="comp"><br><br>
                <label for="profun">Informe a profundidade: </label><br>
                <input type="text" name="profun" id="profun"><br><br>
                <input type="submit">
            </form>
        </div>
        
    </body>
</html>