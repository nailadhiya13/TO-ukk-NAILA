<?php include 'koneksi.php'; include 'header.php'; ?>

<h2>Daftar Barang</h2>

<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama Barang</th>
            <th>Kategori</th>
            <th>Stok</th>
            <th>Harga</th>
            <th>Tanggal Masuk</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $sql = "SELECT barang.*, kategori.nama_kategori FROM barang 
                JOIN kategori ON barang.id_kategori = kategori.id_kategori";
        $result = $koneksi->query($sql);

        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>{$row['id_barang']}</td>
                    <td>{$row['nama_barang']}</td>
                    <td>{$row['nama_kategori']}</td>
                    <td>{$row['jumlah_stok']}</td>
                    <td>{$row['harga_barang']}</td>
                    <td>{$row['tanggal_masuk']}</td>
                    <td>
                        <a href='edit_barang.php?id={$row['id_barang']}' class='btn btn-warning btn-sm'>Edit</a>
                        <a href='hapus_barang.php?id={$row['id_barang']}' class='btn btn-danger btn-sm' onclick=\"return confirm('Yakin?')\">Hapus</a>
                    </td>
                  </tr>";
        }
        ?>
    </tbody>
</table>

<?php include 'footer.php'; ?>