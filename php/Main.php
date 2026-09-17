<?php



include "Resepsionis.php";

session_name("BIOSKOP_BARU");
session_start();

if (!isset($_SESSION['data'])) {
    $_SESSION['data'] = [];
}

if (isset($_POST['tambah'])) {

    $tiket = $_POST['tiket'];
    $film = $_POST['film'];
    $tanggal = $_POST['tanggal'];
    $studio = $_POST['studio'];

    $resep = new Resepsionis(
        $tiket,
        $tanggal,
        $studio,
        $film
    );

    $_SESSION['data'][] = $resep;

    header("Location: Main.php");
    exit;
}

if (isset($_POST['update'])) {

    $tiketCari = $_POST['tiketCari'];

    $i = 0;

    while ($i < count($_SESSION['data'])) {

        if ($_SESSION['data'][$i]->getTiket() == $tiketCari) {

            $_SESSION['data'][$i]->setFilm(
                $_POST['filmBaru']
            );

            $_SESSION['data'][$i]->setTanggal(
                $_POST['tanggalBaru']
            );

            $_SESSION['data'][$i]->setStudio(
                $_POST['studioBaru']
            );

            break;
        }

        $i++;
    }

    header("Location: Main.php");
    exit;
}

if (isset($_POST['hapus'])) {

    $tiketHapus = $_POST['tiketHapus'];

    $i = 0;

    while ($i < count($_SESSION['data'])) {

        if ($_SESSION['data'][$i]->getTiket() == $tiketHapus) {

            array_splice(
                $_SESSION['data'],
                $i,
                1
            );

            break;
        }

        $i++;
    }

    header("Location: Main.php");
    exit;
}

$dataCari = [];

if (isset($_POST['cari'])) {

    $tiketCari = $_POST['tiketCari'];

    $i = 0;

    while ($i < count($_SESSION['data'])) {

        if ($_SESSION['data'][$i]->getTiket() == $tiketCari) {

            $dataCari[] = $_SESSION['data'][$i];

            break;
        }

        $i++;
    }
}

?>


<!DOCTYPE html>

<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Menu Bioskop</title>

    <link
        rel="stylesheet"
        href="style.css"
    >

</head>


<body>


<h1>MENU BIOSKOP</h1>

<h2>Film Sedang Tayang</h2>


<div class="film-container">


    

    <div class="film">

        <img
            src="gambar/A-Kirk Returns.jpg"
            alt="Poster A-Kirk Returns"
        >

        <h3>A-Kirk Returns</h3>

        <p>Studio 1</p>

    </div>


    

    <div class="film">

        <img
            src="gambar/Rise Of The Son.jpg"
            alt="Poster Rise Of The Son"
        >

        <h3>Rise Of The Son</h3>

        <p>Studio 2</p>

    </div>


    

    <div class="film">

        <img
            src="gambar/The Origin Of La Piece.jpg"
            alt="Poster The Origin Of La Piece"
        >

        <h3>The Origin Of La Piece</h3>

        <p>Studio 3</p>

    </div>


</div>

<div class="form-box">

    <h2>Booking Tiket</h2>


    <form method="POST" action="Main.php">


        <label>Nomor Tiket</label>

        <input
            type="text"
            name="tiket"
            required
        >


        <label>Nama Film</label>

        <select
            name="film"
            required
        >

            <option value="">
                -- Pilih Film --
            </option>

            <option value="A-Kirk Returns">
                A-Kirk Returns
            </option>

            <option value="Rise Of The Son">
                Rise Of The Son
            </option>

            <option value="The Origin Of La Piece">
                The Origin Of La Piece
            </option>

        </select>


        <label>Tanggal</label>

        <input
            type="date"
            name="tanggal"
            required
        >


        <label>Nomor Studio</label>

        <select
            name="studio"
            required
        >

            <option value="">
                -- Pilih Studio --
            </option>

            <option value="1">
                Studio 1
            </option>

            <option value="2">
                Studio 2
            </option>

            <option value="3">
                Studio 3
            </option>

        </select>


        <button
            type="submit"
            name="tambah"
        >
            Tambah Tiket
        </button>


    </form>

</div>

<div class="form-box">

    <h2>Update Tiket</h2>


    <form method="POST" action="Main.php">


        <label>
            Nomor Tiket yang ingin diubah
        </label>

        <input
            type="text"
            name="tiketCari"
            required
        >


        <label>Nama Film Baru</label>

        <select
            name="filmBaru"
            required
        >

            <option value="">
                -- Pilih Film --
            </option>

            <option value="A-Kirk Returns">
                A-Kirk Returns
            </option>

            <option value="Rise Of The Son">
                Rise Of The Son
            </option>

            <option value="The Origin Of La Piece">
                The Origin Of La Piece
            </option>

        </select>


        <label>Tanggal Baru</label>

        <input
            type="date"
            name="tanggalBaru"
            required
        >


        <label>Nomor Studio Baru</label>

        <select
            name="studioBaru"
            required
        >

            <option value="">
                -- Pilih Studio --
            </option>

            <option value="1">
                Studio 1
            </option>

            <option value="2">
                Studio 2
            </option>

            <option value="3">
                Studio 3
            </option>

        </select>


        <button
            type="submit"
            name="update"
        >
            Update Tiket
        </button>


    </form>

</div>

<div class="form-box">

    <h2>Hapus Tiket</h2>


    <form method="POST" action="Main.php">


        <label>
            Nomor Tiket yang ingin dihapus
        </label>

        <input
            type="text"
            name="tiketHapus"
            required
        >


        <button
            type="submit"
            name="hapus"
        >
            Hapus Tiket
        </button>


    </form>

</div>


//form cari

<div class="form-box">

    <h2>Cari Tiket</h2>


    <form method="POST" action="Main.php">


        <label>
            Nomor Tiket
        </label>

        <input
            type="text"
            name="tiketCari"
            required
        >


        <button
            type="submit"
            name="cari"
        >
            Cari Tiket
        </button>


    </form>

</div>

<?php

if (isset($_POST['cari'])) {

?>


<h2>Hasil Pencarian</h2>


<?php

if (count($dataCari) == 0) {

    echo "<p>Data tiket tidak ditemukan.</p>";

} else {

?>


<table>

    <tr>

        <th>Nomor Tiket</th>

        <th>Nama Film</th>

        <th>Tanggal</th>

        <th>Nomor Studio</th>

    </tr>


<?php

$i = 0;

while ($i < count($dataCari)) {

?>


    <tr>

        <td>

            <?php

            echo $dataCari[$i]->getTiket();

            ?>

        </td>


        <td>

            <?php

            echo $dataCari[$i]->getFilm();

            ?>

        </td>


        <td>

            <?php

            echo $dataCari[$i]->getTanggal();

            ?>

        </td>


        <td>

            <?php

            echo $dataCari[$i]->getStudio();

            ?>

        </td>

    </tr>


<?php

    $i++;

}

?>


</table>


<?php

}

}

?>

<h2>Data Tiket</h2>


<?php

if (count($_SESSION['data']) == 0) {

    echo "<p>Belum ada data tiket.</p>";

} else {

?>


<table>


    <tr>

        <th>No</th>

        <th>Nomor Tiket</th>

        <th>Nama Film</th>

        <th>Tanggal</th>

        <th>Nomor Studio</th>

    </tr>


<?php

$i = 0;


while ($i < count($_SESSION['data'])) {

?>


    <tr>


        <td>

            <?php

            echo $i + 1;

            ?>

        </td>


        <td>

            <?php

            echo $_SESSION['data'][$i]->getTiket();

            ?>

        </td>


        <td>

            <?php

            echo $_SESSION['data'][$i]->getFilm();

            ?>

        </td>


        <td>

            <?php

            echo $_SESSION['data'][$i]->getTanggal();

            ?>

        </td>


        <td>

            <?php

            echo $_SESSION['data'][$i]->getStudio();

            ?>

        </td>


    </tr>


<?php

    $i++;

}


?>


</table>


<?php

}

?>


</body>

</html>
