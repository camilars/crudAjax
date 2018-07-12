<?php
 
//conecta ao banco de dados
mysql_connect("localhost", "ajaxcrud", "ajaxcrud");
mysql_select_db("ajaxcrud");
 
//essa function eu coloquei para retornar o id e inserir na tabela, ela eh desnecessaria para o funcionamento...coloquei porq no meu tava xD
function autoindex($tb)
{
        $query = mysql_query('SHOW TABLE STATUS LIKE "' . $tb . '"');
        $data = mysql_fetch_array($query);
        return $data['Auto_increment'];
}
 
switch ($_REQUEST['acao']) {
//se acao = add entao adicionar
case 'add' :
        $valor  = urldecode($_REQUEST['nome']);
        $valor2 = urldecode($_REQUEST['sobrenome']);
        echo autoindex("tutorial");
        mysql_query("INSERT INTO tutorial VALUES('','$valor','$valor2')");
        break;
//se acao = del entao deletar
case 'del' :
        $id = $_REQUEST['id'];
        mysql_query("DELETE FROM tutorial WHERE id = '$id'");
        break;
//se acao = edit entao editar
case 'edit' :
        $id             = $_REQUEST["id"];
        $valor  = urldecode($_REQUEST["nome"]);
        $valor2 = urldecode($_REQUEST["sobrenome"]);
        mysql_query("UPDATE tutorial SET nome = '$valor', sobrenome = '$valor2' WHERE id = '$id'");
        break;
}
 
?>