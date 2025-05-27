<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <header>
            <h1>Volume</h1>
        </header>
        <section>
            <p>Este programa irá calcular o volume de uma caixa retangular para você
                usuário, será necessário informar as seguintes medidas:
            </p>
            <div class="container-Form">
                <form action="volume.php" method="POST">
                    <label for="larg">Insira a largura da caixa:
                    </label>
                    <input type="text" name="larg" id="larg">
                    <br>
                    <label for="comp">Digite o comprimento:
                    </label>
                    <input type="text" name="comp" id="comp">
                    <br>
                    <label for="profun">Informe a profundidade:
                    </label>
                    <input type="text" name="profun" id="profun">
                    <br>
                    <input type="submit">
                </form>
            </div>
        </section>
        <footer>
            <p>&copy; ArthurOliCode DB</p>
        </footer>
    </body>
</html>