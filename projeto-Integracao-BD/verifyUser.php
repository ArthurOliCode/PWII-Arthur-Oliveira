<?php
// Inclui o arquivo de conexão
require_once 'conexaoMySQL.php';

/**
 * Verifica se um usuário existe na tabela Usuarios com as credenciais fornecidas.
 * @param string $email O login/email do usuário.
 * @param string $senha A senha do usuário.
 * @return bool Retorna TRUE se o usuário for encontrado e a senha estiver correta, FALSE caso contrário.
 */
function verificar_usuario($email, $senha) {
    // A função conectar_db() é definida em database.php
    $conn = conectar_db();
    $tabela = "Usuarios";
    
    // NOTA DE SEGURANÇA: Em um sistema real, você NUNCA deve armazenar senhas em texto puro.
    // Use hash_hmac() ou password_hash() e verifique com password_verify().

    // Prepara a consulta usando prepared statement para evitar SQL Injection
    // A consulta busca a senha do usuário baseado no campo 'login' (que é o email)
    $stmt = $conn->prepare("SELECT senha FROM $tabela WHERE login = ?");
    
    if ($stmt === false) {
        error_log("Erro na preparação da consulta: " . $conn->error);
        $conn->close();
        return false;
    }

    // Associa o parâmetro
    $stmt->bind_param("s", $email);

    // Executa a consulta
    $stmt->execute();

    // Obtém o resultado
    $resultado = $stmt->get_result();
    
    // Verifica se encontrou o registro
    if ($resultado->num_rows === 1) {
        $usuario = $resultado->fetch_assoc();
        
        // Compara a senha em texto puro (A SER MELHORADO com hash)
        if ($usuario['senha'] === $senha) {
            $stmt->close();
            $conn->close();
            return true; // Usuário autenticado
        } else {
            // Senha incorreta
            $stmt->close();
            $conn->close();
            return false;
        }
    }
    
    // Usuário não encontrado
    $stmt->close();
    $conn->close();
    return false;
}
?>