<?php
/**
 * Arquivo para registrar os dados de um aluno no banco de dados.
 */
if (isset($_REQUEST['cadastrar']))
{
   try
   {
       include 'includes/conexao.php';

       $sql = "INSERT INTO alunos (nome, data_nascimento, sexo,
                                   genero, cpf, cidade, estado, 
                                   bairro, rua, cep)
                        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = $conexao->prepare($sql);
$stmt->bindParam(1, $_REQUEST['nome']);
$stmt->bindParam(2, $_REQUEST['data_nascimento']);
$stmt->bindParam(3, $_REQUEST['sexo']);
$stmt->bindParam(4, $_REQUEST['genero']);
$stmt->bindParam(5, $_REQUEST['cpf']);
$stmt->bindParam(6, $_REQUEST['cidade']);
$stmt->bindParam(7, $_REQUEST['bairro']);
$stmt->bindParam(8, $_REQUEST['rua']);
$stmt->bindParam(10, $_REQUEST['cep']);
$stmt->execute();

} catch(Exception $e) {
    echo $e ->getMessage();
}
}