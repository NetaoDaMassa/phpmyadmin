<!DOCTYPE html>

<html> <head>
<meta charset="utf-8" />

<title>Tabela</title>

</head> <body>
<h1>Tabela</h1>

<?php

$host = 'localhost'; $user = 'aluno'; $passw = 'aluno'; $dbname = 'atv_prt_041_bd';

$conn = mysqli_connect($host, $user, $passw, $dbname) or die
("Unable to connect!");

$query = "SELECT user_id, Nome, Email, Escola, Estado, Funcao, Nome_Equipe FROM Membros";
$result = mysqli_query( $conn, $query ) or die ("Error in query");

while ( $row = mysqli_fetch_assoc( $result ) ) {
$table[] = $row; 
}
?>

<table>
<tr>
<td><strong>Nome</strong></td>
<td width="10">&nbsp;</td>
<td><strong>Email</strong></td>
<td width="10">&nbsp;</td>
<td><strong>Escola</strong></td>
<td width="10">&nbsp;</td>
<td><strong>Estado</strong></td>
<td width="10">&nbsp;</td>
<td><strong>Função</strong></td>
<td width="10">&nbsp;</td>
<td><strong>Nome da Equipe</strong></td>
<td width="10">&nbsp;</td>
</tr>
<?php
if ($table) { 

foreach($table as $d_row) {
?>

<tr>
<td><?php echo($d_row["Nome"]); ?></td>
<td width="10">&nbsp;</td>
<td><?php echo($d_row["Email"]); ?></td>
<td width="10">&nbsp;</td>
<td><?php echo($d_row["Escola"]); ?></td>
<td width="10">&nbsp;</td>
<td><?php echo($d_row["Estado"]); ?></td>
<td width="10">&nbsp;</td>
<td><?php echo($d_row["Funcao"]); ?></td>
<td width="10">&nbsp;</td>
<td><?php echo($d_row["Nome_Equipe"]); ?></td>
<td width="10">&nbsp;</td>
</tr>

<?php
}
}
?>
</table>

<p>Número de Registros : <?php echo(mysqli_num_rows($result)); ?></p>

<?php
mysqli_close($conn);
?>
</body>
</html>