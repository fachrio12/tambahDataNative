<!DOCTYPE html>

<html>

<head>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title></title>

</head>

<body>

    <h3>Tambah transaksi</h3>

    <form action="proses_tambah_transaksi.php" method="post">

        nama pelanggan :

      <select name="id_pelanggan" class="form-control">
        <option></option>
        <?php 

include "koneksitoko.php";

$qry_pelanggan=mysqli_query($conn,"select * from pelanggan");

while($data_pelanggan=mysqli_fetch_array($qry_pelanggan)){

    echo '<option value="'.$data_pelanggan['id_pelanggan'].'">'.$data_pelanggan['nama'].'</option>';   

}

?>

</select>

        nama petugas :

        <select  name="id_petugas"  class="form-control">
        <option></option>
        <?php 

include "koneksitoko.php";

$qry_petugas=mysqli_query($conn,"select * from petugas");

while($data_petugas=mysqli_fetch_array($qry_petugas)){

    echo '<option value="'.$data_petugas['id_petugas'].'">'.$data_petugas['nama_petugas'].'</option>';   

}

?>

</select> 

        tanggal :

        <input type="date" name="tgl_transaksi" value="" class="form-control">

          

        <input type="submit" name="simpan" value="Tambah transaksi" class="btn btn-primary">

    </form>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

</body>

</html>