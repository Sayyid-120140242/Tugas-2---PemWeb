<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tugas 2 PemWeb</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form class="input-box" action="action.php" method="get">
    <center><table class="table-box"border="1">
        <tr>
            <td colspan="3"><center>Output Brand</center></td
        </tr>
        <tr>
            <td>ID Pelanggan</td>
            <td>:</td>
            <td><?= $_GET["id"];  ?></td>
        <tr>
            <td>Nama Produk</td>
            <td>:</td>
            <td><?= $_GET["nama"];  ?></td>
        </tr>
        <tr>
            </form>
        </tr>
    </table></center>
</body>
</html>
