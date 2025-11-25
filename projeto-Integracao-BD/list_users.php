<?php 
// Conexão com o banco
require_once 'conexaoMySQL.php';

// Consulta que retorna todos os usuários, ou então retorna um array vazio, caso tenha falha
function listar_usuarios(){
  $conn = conectar_db();
  $tabela = "Usuarios";
  $usuarios = [];

  $sql = "Select nome, login, telefone, cpf FROM $tabela ORDER by nome ASC";

  $resultado = $conn->query($sql);

  if ($resultado == false){
    error_log("Erro na consulta de dados de usuários: " . $conn->error);
    $conn->close();
    return [];
  } 

  if($resultado->num_rows > 0){
    while($linha = $resultado->fetch_assoc()){
      $usuarios[] = $linha;
    }
  }

  $conn->close();
  return $usuarios;
}
?>