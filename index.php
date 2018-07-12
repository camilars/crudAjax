<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<script language="javascript" src="crucifier.js"></script>
<style>
* {
        text-align: center;
}
h1 {
font-family: Verdana, Tahoma, Arial, Trebuchet MS, Sans-Serif, Georgia, Courier, Times New Roman, Serif;
        font-size: 20px;
        font-weight: bold;
}
th {
        background: #f3f3f3;
        height: 30px;
}
td {
        background: #f9f9f9;
        height: 20px;
}
</style>
</head><body>
<h1>Administração de registros via Ajax - By Crucifier </h1>
  <table align="center" cellspacing="0" class="tbls-consulta" id="tabela">
        <tbody>
        <tr>
          <th width="70">ID</th>
          <th width="200">Função</th>
          <th width="200">Comissão</th>
          <th width="179">Opções</th>
        </tr>
        <?
        mysql_connect("localhost", "ajaxcrud", "ajaxcrud");
        mysql_select_db("ajaxcrud");
        
        $sql = mysql_query("SELECT id, nome, sobrenome FROM tutorial ORDER BY id ASC");
        while($coluna = mysql_fetch_array($sql)){
                $id = $coluna["id"];
  ?>
  <tr>
          <td><?=$coluna['id'];?></td>
          <td><span id="campo<?=$id?>"><?= $coluna["nome"]; ?></span></td>
          <td><span id="campo_<?=$id?>"><?= $coluna["sobrenome"]; ?></span></td>
          <td>
          <span id="enviar<?=$id?>">
          <a href="javascript:editar('<?=$id;?>')">alterar</a></span>
          <br />
          <a href="javascript:;" onclick="apagar('<?=$id ?>', this.parentNode.parentNode.rowIndex);">del</a></td>
        </tr>
        <?
        }
  ?>
  </table>
<table align="center" cellspacing="0">
        <tr>
          <td width="70"> </td>
          <td width="200"><input name="nome" type="text" id="nome" /></td>
          <td width="200"><input name="sobrenome" type="text" id="sobrenome" /></td>
          <td width="179">
          <input name="button" type="button" onclick="add();" value=" + " /></td>
        </tr>
        <tr>
          <th colspan="4"></th>
        </tr>
        </tbody>
</table>