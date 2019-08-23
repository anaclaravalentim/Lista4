<!DOCTYPE html>
<html>
<head>
<title>Formulário de Feedback</title>
</head>
<body>
<form action="listar_autos.php" method="post">

<table>
<tr>
<td colspan="2"><h2>Por favor, dê o seu feedback</h2></td>
</tr>


<tr>
<td><p><strong>Fabricante:</strong></p></td>
<td><input type="text" name="fabricante" size="30" maxlength="30" /></td>
</tr>

<tr>
<td><p><strong>Ano de fabricação:</strong></p></td>
<td><input type="text" name="ano_fabricacao" size="30" /></td>
</tr>

<tr>
<td><p><strong>Quilometragem:</strong></p></td>
<td><input type="text" name="quilometragem" size="40"/></td>
</tr>

<tr>
<td></td>
<td><input type="submit" name="submit" value="Enviar" /></td>
</tr>
</table>
</form>
</body>
</html>