<?php
include("koneksi.php");

$q = "";
if (isset($_GET['submit']) && !empty($_GET['q'])) {
    $q = $_GET['q'];
    $sql_where = "WHERE tanggal LIKE '%".$q."%' or toilet_id LIKE '%".$q."%' or kloset LIKE '%".$q."%' or wastafel LIKE '%".$q."%' or lantai LIKE '%".$q."%' or dinding LIKE '%".$q."%' or sabun LIKE '%".$q."%' or bau LIKE '%".$q."%' or users_id LIKE '%".$q."%'" ;


}
$title = 'Checklist Toilet';
$sql = 'SELECT * FROM checklist ';
if (isset($sql_where))
    $sql .= $sql_where;
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Febriyani Nurhida UAS</title>
    <link href="style.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>
<body style="margin-top: 30px; background-image: url('wcc.jpg'); background-size: cover;">
<div class="container" style="width: 70%; padding: 20px; background-color: rgba(143, 145, 144, 0.2);">
        <br><br>
        <div class="head">
        <h1 style="color: #FFFFFF;">Checklist Toilet</h1>
        <form>
            <div class="form-group" action="toilet.php" method="get" >
                <label for="q" style="color: #FFFFFF;">Cari Data Toilet</label>
                <input type="text" placeholder="Masukkan Pencarian"  id="q" name="q" class="input-q" value="<?php echo $q ?>">
                <button type="submit" name="submit" class="btn btn-primary">Cari</button>
            </div>
        </form>
        </div>
        <div class="main">
            <table class="table table-striped table-hover">
            <tr>
                <th style="color: #FFFFFF;">Tanggal</th>
                <th style="color: #FFFFFF; width: 5%;">Kode Toilet</th>
                <th style="color: #FFFFFF;">Kloset</th>
                <th style="color: #FFFFFF;">Wastafel</th>
                <th style="color: #FFFFFF;">Lantai</th>
                <th style="color: #FFFFFF;">Dinding</th>
                <th style="color: #FFFFFF;">Kaca</th>
                <th style="color: #FFFFFF;">Bau</th>
                <th style="color: #FFFFFF;">Sabun</th>
                <th style="color: #FFFFFF;">Petugas</th>
                <th style="color: #FFFFFF; width: 5%;">ID Barang</th>
                <th style="color: #FFFFFF;">Aksi</th>
            </tr>
            <?php if($result): ?>
            <?php while($row = mysqli_fetch_assoc($result)): ?>
            <tr>
                <td style="color: #FFFFFF;"><?= $row['tanggal'];?></td>
                <td style="color: #FFFFFF;"><?= $row['toilet_id'];?></td>
                <td style="color: #FFFFFF;"><?= $row['kloset'];?></td>
                <td style="color: #FFFFFF;"><?= $row['wastafel'];?></td>
                <td style="color: #FFFFFF;"><?= $row['lantai'];?></td>
                <td style="color: #FFFFFF;"><?= $row['dinding'];?></td>
                <td style="color: #FFFFFF;"><?= $row['kaca'];?></td>
                <td style="color: #FFFFFF;"><?= $row['bau'];?></td>
                <td style="color: #FFFFFF;"><?= $row['sabun'];?></td>
                <td style="color: #FFFFFF;"><?= $row['users_id'];?></td>
                <td style="color: #FFFFFF;"><?= $row['id'];?></td>
                <td style="color: #FFFFFF;">
                    <button class="btn" type="button"><a style="color: #FFFFFF;" href="ubah.php?id=<?= $row['id'];?>">Ubah Data</a></button> 
                    <button class="btn" type="button"><a style="color: RED;" href="hapus.php?id=<?= $row['id'];?>">Hapus Data</a></button>
                </td>
            </tr>
            <?php endwhile; else: ?>
            <tr>
                <td style="color: #7eeef3;" colspan="7">Belum ada data</td>
            </tr>
            <?php endif; ?>
            </table>
        </div><br><br><br>
        <div>
        <button class="btn" type="button"><a style="color: #FFFFFF" href="tambah.php">Tambah Data Checklist</a></button>
        </div> <br>
        <div>
        <button class="btn" type="button"><a style="color: #FFFFFF" href="home.php">Kembali</a></button>
        </div>
    </div>
</body>
</html>