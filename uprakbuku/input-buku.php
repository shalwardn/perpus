<!DOCTYPE html>
<html>
<head>
    <title>Formulir Input Buku</title>
    <link rel="stylesheet" type="text/css" href="style1.css">
</head>

<body>
    <header>
        <h3>Formulir Input Buku</h3>
    </header>

    <form action="tambah.php" method="POST">

        <fieldset>

        <p>
            <label for="judul">Judul: </label>
            <input type="text" name="judul" placeholder="Judul" />
        </p>
        <p>
            <label for="pengarang">Pengarang: </label>
            <input type="text" name="pengarang" placeholder="Pengarang" />
        </p>
        <p>
            <label for="tahun_terbit">Tahun terbit: </label>
            <input type="text" name="tahun_terbit" placeholder="Tahun terbit" />
        </p>
        <p>
            <input type="submit" value="Input" name="input" />
        </p>

        </fieldset>

    </form>

    </body>
</html>