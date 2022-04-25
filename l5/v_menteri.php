<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menteri</title>
</head>
<body>
    <form action="index.php">
        <input type="submit" value="Logout">
    </form>
    <h1>Menteri</h1>
    <h3>Daftar Program Kerja</h3>
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
            $proker = $ent->lihatProgramKerja();
            $count = count($proker[0]);
            for ($i = 0; $i < $count; $i++) {
                echo "<tr><td>".$proker[0][$i]["nomorProgram"]."</td><td>". $proker[0][$i]["namaProgram"]. 
                "</td><td>" . $proker[0][$i]["suratKeterangan"] . " </td></tr>";
            }
            ?>
        </tbody>
    </table>
    <br>
</body>
</html>