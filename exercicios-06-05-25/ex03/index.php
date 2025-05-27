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
            <p>Este programa irá calcular a área de um trápezio, digite dois valores:
            </p>
            <div class="container-Form">
                <form action="area.php" method="POST">
                    <label for="altura">Insira a altura (h):
                    </label>
                    <input type="text" name="altura" id="altura">
                    <br>
                    <label for="baseM">Insira a base maior (B):
                    </label>
                    <input type="text" name="baseM" id="baseM">
                    <br>
                    <label for="baseMe">Insira a base maior (b):
                    </label>
                    <input type="text" name="baseMe" id="baseMe">
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