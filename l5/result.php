<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kepala Departemen</title>
</head>
<body>
    <br>
    <br>
    <form action="c_kDep.php">
        <input type="submit" value="Reset">
    </form>
    <table border = solid>
        <thead>
        <tr>
            <th>Nomor Program</th>
            <th>Nama Program Kerja</th>
            <th>Surat Keterangan</th>
        </tr>
        </thead>
        <tbody>
            <?php
            echo "<tr><td>".$res["nomorProgram"]."</td><td>". $res["namaProgram"]. 
            "</td><td>" . $res["suratKeterangan"] . " </td></tr>";
            ?>
        </tbody>
    </table>
</body>
</html>