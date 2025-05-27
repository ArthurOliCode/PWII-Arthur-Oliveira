<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php
            $altura = $_POST["altura"];
            $baseM = $_POST["baseM"];
            $baseMe = $_POST["baseMe"];
            $area = ($baseM + $baseMe) * $altura / 2;
        ?>
        <header>
            <h1>Resultado</h1>
        </header>
        <section>
        <h3>Tabela de resultados: </h3>
            <table>
                <tr>
                    <th>Altura</th>
                    <th>Base M</th>
                    <th>base Me</th>
                    <th>Área</th>
                </tr>
                <tr>
                    <td><?php echo $_POST["altura"] ?>altura </td>
                    <td><?php echo $_POST["baseM"] ?>Base Maior </td>
                    <td><?php echo $_POST["baseMe"] ?>Base Menor </td>
                    <td><?php echo $area?>m²</td>
                </tr>
            </table>
            <p>A área deste trapézio é <?php echo $area?>m² </p>
        </section>
        <footer>
            <p>&copy; ArthurOliCode DB</p>
        </footer>
    </body>
</html>