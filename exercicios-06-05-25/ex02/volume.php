<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <?php
        $larg = $_POST["larg"];
        $comp = $_POST["comp"];
        $profund = $_POST["profun"];
        $volume = $larg * $comp * $profund;
    ?>
    <h1>Resultados</h1>
    <h3>Tabela</h3>
    <div class="container-table">   
        <table>
            <tr>
                <th>Largura</th>
                <th>Comprimento</th>
                <th>Profundidade</th>
                <th>Volume</th>
            </tr>
            <tr>
                <td><?php echo $larg?>cm </td>
                <td><?php echo $comp?>cm </td>
                <td><?php echo $profund?>cm </td>
                <td><?php echo $volume?>cm³</td>
            </tr>
        </table>
    </div>
    <p>O volume da caixa com os valores informados é <?php echo $volume?>cm³</p>
</body>
</html>