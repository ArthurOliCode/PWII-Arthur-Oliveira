<?php
// arquivo de conexão para ter o objeto $pdo disponível
require_once 'conexao.php';

// Define a query SQL para selecionar todos os usuários
$sql = "SELECT id, nome, email FROM usuarios";

try{
    // Prepara a query (medida de segurança contra SQL injection)
    $stmt = $pdo->prepare($sql);

    // Executa a query
    $stmt->execute();

    // Busca resultados como um array associativo
    $usuarios = $stmt->fetchAll(PDO::FETCH_ASSOC);
}catch (PDOException $e) {
    echo "Erro ao buscar dados: " . $e->getMessage();
    $usuarios = []; // Garantia de que a variável exista mesmo com erro
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Lista de Usuarios</title>
</head>
<header>
    <h2>Lista de usuários</h2>
</header>
<body>
    <section>
        <h3>Usuários Cadastrados</h3>
        <?php if (count($usuarios) > 0) : ?>
            <table border="1">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nome</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($usuarios as $usuario): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($usuario["id"]);?></td>
                        <td><?php echo htmlspecialchars($usuario["nome"]);?></td>
                        <td><?php echo htmlspecialchars($usuario["email"]);?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <?php else: ?>
                <p>Nenhum usuário encontrado no banco de dados.</p>
            <?php endif; ?>
    </section>
</body>
</html>