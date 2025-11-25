<?php
// Configurações do Banco de Dados (Substitua pelos seus dados reais)
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
// CORRIGIDO: Removido o 'define' duplicado
define('DB_PASSWORD', ""); 
define('DB_NAME', 'db_sistema_cadastro');

/**
 * Função para estabelecer a conexão com o banco de dados.
 * @return mysqli Retorna o objeto de conexão mysqli.
 */
function conectar_db() {
    // Cria a conexão
    $conn = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

    // Verifica se houve erro na conexão
    if ($conn->connect_error) {
        // Encerra o script e exibe o erro
        die("ERRO DE CONEXÃO COM O BANCO DE DADOS: " . $conn->connect_error);
    }

    // Define o charset para evitar problemas com acentuação
    $conn->set_charset("utf8mb4");

    return $conn;
}

?>