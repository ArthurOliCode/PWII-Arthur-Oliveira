<?php 
// Configuração do Banco de Dados
$host = 'localhost'; 
$dbname = 'projeto_integracao';
$user = 'root';
$pass = '';

try{
    // nova intância da classe POO  
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $pass);

    //configuração do PDO para lançar excessões em caso de erro
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Conexão estabelecida com êxito!";

}catch (PDOException $e) {
    die("Erro ao estabelecer conexão com o banco de dados: " . $e->getMessage());
}
?>