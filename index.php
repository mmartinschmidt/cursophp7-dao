<?php 

require_once("config.php");

/////////// Sql.php ///////////////////
// $sql = new Sql();
// $usuarios = $sql->select("SELECT * FROM tb_usuarios");
// echo json_encode($usuarios);
//////////////////////////////////////

/////////// Usuario.php ///////////////////

// Carrega um Usuario
//$root = new Usuario();
//$root->loadById(3);
//echo $root;

// Carrega uma lista de usuarios
//$lista = Usuario::getList();
//echo json_encode($lista);

// Carrega uma lista de usuario buscando pelo login
//$search = Usuario::search("jo");
//echo json_encode($search); 

//Carrega um usuário usando o login e a senha
//$usuario = new Usuario();
//$usuario->login("root", "!@#$");
////$usuario->login("root", "!@#$123");
//echo $usuario;

//Inclui um usuário na tabela
//$aluno = new Usuario();
//$aluno->setDeslogin("aluno");
//$aluno->setDessenha("@lun0");
//////////////////////
//$aluno = new Usuario("aluno","@lun0");
//$aluno->insert();
//echo $aluno;

//Alterar um usuário na tabela
//$aluno = new Usuario();
//$aluno->loadById(8);
//$aluno->update("professor", "!@#$%¨&*");
//echo $aluno;

//Deletar um usuário na tabela
$aluno = new Usuario();
$aluno->loadById(7);
$aluno->delete();
echo $aluno;

//////////////////////////////////////

 ?>