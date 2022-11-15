<table border="1">
<tr>
<th> No. </th>
<th> NIM </th>
<th> Nama </th>
<th> Program Studi </th>
</tr>
<?php
include "koneksi.php";
$request = $_POST['request'];
$query = "SELECT * FROM data_mahasiswa WHERE Prodi= '$request' ORDER BY NIM ASC ";
$result = mysqli_query($connection, $query);
$i = 0;
while ($data = mysqli_fetch_array($result)) :
$i++;
?>
<tr>
<td> <?= $i ?> </td>
<td> <?= $data["NIM"] ?> </td>
<td> <?= $data["Nama"] ?> </td>
<td> <?= $data["Prodi"] ?> </td>
</tr>
<?php
endwhile
?>
</table>