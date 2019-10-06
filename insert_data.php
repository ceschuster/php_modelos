<?php
include_once "conexao1.php";

$nome = $_POST["nome"];
$tipo = $_POST["tipo"];
$ref = $_POST["ref"];

$stmt = mysqli_prepare($conexao1, "insert into layout_home (nome, tipo,ref,parametros,obs) 
  values (?,?,?,?,?)"); //i=int d=double s=string

mysqli_stmt_bind_param($stmt, "ssi",
  $nome,$tipo,$ref    // ou $_POST["nome"], $_POST["tipo"], $_POST["ref"]
);
mysqli_stmt_execute($stmt);

$last_id = mysqli_insert_id($conexao1);
mysqli_stmt_close($stmt);
mysqli_close($conexao1);

?>
