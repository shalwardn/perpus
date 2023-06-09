<?php 
include("functions.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Library</title>
    

</head>

<body>
    <header>
        <h3>Buku</h3>
    </header>

    <nav>
        <a href="input-buku.php" class="btn btn-dark">[+] Tambah Baru</a>
    </nav>

    <br>

    <table border="1">
    <thead>
        <tr>
            <th>No</th>
            <th>Judul</th>
            <th>Pengarang</th>
            <th>Tahun terbit</th>
            <th>Tindakan</th>
        </tr>
    </thead>
    <tbody>

        <?php
        $sql = "SELECT * FROM data_buku";
        $query = mysqli_query($conn, $sql);

        while($buku = mysqli_fetch_array($query)){
            echo "<tr>";

            echo "<td>".$buku['id']."</td>";
            echo "<td>".$buku['judul']."</td>";
            echo "<td>".$buku['pengarang']."</td>";
            echo "<td>".$buku['tahun_terbit']."</td>";
            echo "<td>";
           
            echo "<a href='form-edit.php?id=".$buku['id']."'>Edit</a> | ";
            echo "<a href='hapus.php?id=".$buku['id']."'>Hapus</a>";
            echo "</td>";

            echo "</tr>";
        }
        ?>

    </tbody>
    </table>

    <p>Total: <?php echo mysqli_num_rows($query) ?></p>
    <li><a href="index.php">Ravve's Library</a></li>
    
    </body>
</html>