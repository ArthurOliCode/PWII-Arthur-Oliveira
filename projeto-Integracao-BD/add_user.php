<?php
// Página de registro tanto para sucesso quanto falha da operação
$pagina_registro = "index.php"; 

// Conexão com o banco de dados
require_once 'conexaoMySQL.php';

// Veriicação do método enviado do formulário da página index.php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //Captura dos dados com proteção SQL injection
    $nome = $_POST['nome'] ?? '';
    $login = $_POST['login'] ?? ''; // O email é o login
    $telefone = $_POST['telefone'] ?? '';
    $cpf = $_POST['cpf'] ?? '';
    $senha_pura = $_POST['nova_senha'] ?? ''; // Senha em texto puro, conforme a estrutura atual

    // 4. Validação básica (campos obrigatórios)
    if (empty($nome) || empty($login) || empty($senha_pura)) {
        // Redireciona de volta com uma mensagem de erro (em um sistema real, seria via parâmetro de URL)
        echo "ERRO: Os campos Nome, Login (E-mail) e Senha são obrigatórios.";
        exit;
    }

    // NOTA DE SEGURANÇA: Em produção, NUNCA armazene senhas em texto puro! 
    // O ideal é usar password_hash($senha_pura, PASSWORD_DEFAULT) para criar um hash seguro.
    // Para manter a consistência com o seu arquivo verifyUser.php, vamos armazenar a senha pura neste exemplo.
    $senha_para_db = $senha_pura; 

    // Conexão com o banco
    $conn = conectar_db();
    $tabela = "Usuarios";
    
    // Inserção de dados utilizando prepared statements com placeholder
    $sql = "INSERT INTO $tabela (nome, login, senha, telefone, cpf) VALUES (?, ?, ?, ?, ?)";
    
    $stmt = $conn->prepare($sql);
    
    if ($stmt === false) {
        error_log("Erro na preparação da consulta de inserção: " . $conn->error);
        die("ERRO: Falha na preparação da consulta.");
    }

    // 'sssss' indica que todos os 5 parâmetros são strings
    $stmt->bind_param("sssss", $nome, $login, $senha_para_db, $telefone, $cpf);

    if ($stmt->execute()) {
        echo "Usuário **$nome** registrado com sucesso!";
        header("refresh:2;url=$pagina_registro");
        exit;
        
    } else {
        // Erro na execução
        if ($conn->errno == 1062) { // 1062 é o código de erro para entrada duplicada no MySQL
            echo "ERRO: O Login (E-mail) **$login** já está registrado. Por favor, use outro.";
        } else {
            error_log("Erro na execução da inserção: " . $stmt->error);
            echo "ERRO: Não foi possível registrar o usuário. Tente novamente. Detalhe: " . $stmt->error;
        }
    }

    $stmt->close();
    $conn->close();

} else {
    echo "ERRO: Acesso inválido. Por favor, utilize o formulário em Index.html.";
}
?>