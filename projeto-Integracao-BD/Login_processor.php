<?php
// Define o nome do arquivo de destino em caso de sucesso
$pagina_registro = "index.php"; // Redireciona para o arquivo de cadastro

// Inclui a lógica de verificação de usuário
// CORRIGIDO: Aponta para o novo nome do arquivo do modelo
require_once 'verifyUser.php'; 

// Verifica se os campos "email" e "senha" vieram via método GET
if (isset($_GET['email']) && isset($_GET['senha'])) {
    
    $email = $_GET['email'];
    $senha = $_GET['senha']; 

    // Validação básica de campos
    if (empty($email) || empty($senha)) {
        // Neste caso, você pode redirecionar para o login com uma mensagem de erro
        echo "ERRO: Por favor, preencha todos os campos.";
        exit;
    }

    // Chama a função de verificação do modelo de usuário
    if (verificar_usuario($email, $senha)) {
        // AUTENTICAÇÃO BEM-SUCEDIDA!
        
        // Inicia a sessão para manter o estado (muito recomendado em sistemas reais)
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        
        // Define variáveis de sessão
        $_SESSION['logged_in'] = true;
        $_SESSION['user_login'] = $email;
        
        // Redireciona para a página de registro
        header("Location: $pagina_registro");
        exit;
        
    } else {
        // FALHA NA AUTENTICAÇÃO!
        echo "ERRO: Login ou Senha incorretos. Tente novamente.";
        
        // Opcionalmente, redirecione de volta para o login.html
        // header("Location: login.html?error=invalid_credentials");
    }

} else {
    // Caso o script seja acessado diretamente sem dados do formulário
    echo "ERRO: Acesso inválido. Por favor, utilize o formulário de login.";
}
?>