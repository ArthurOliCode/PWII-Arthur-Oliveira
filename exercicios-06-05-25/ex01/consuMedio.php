<html>
    <head>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php
            $dis = $_POST["dist"];
            $combus = $_POST["combus"];
            $consuMedio = $dis / $combus;
        ?>
        <h1>Resultados</h1>
        <h3>Tabela de resultados: </h3>
        <table>
            <tr>
                <th>Distância</th>
                <th>Combustível</th>
                <th>Resultado</th>
            </tr>
            <tr>
                <td><?php echo $_POST["dist"] ?>Km </td>
                <td><?php echo $_POST["combus"] ?>L </td>
                <td><?php echo $consuMedio ?>Km/Litro </td>
            </tr>
        </table>
        <p>O consumo médio do automóvel informado é <?php echo $consuMedio?> Km/Litro</p>
    </body>
</html>

