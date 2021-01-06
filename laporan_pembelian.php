<?php
//memasukkan file config.php
session_start();
include('config.php');
?>


<div class="container" style="margin-top:20px">
    <center>
        <font size="6">Laporan Pembelian</font>
    </center>
    <hr>
    <div class="table-responsive">
        <table class="table table-striped jambo_table bulk_action">
            <thead>
                <tr>
                    <th>Kd Brg</th>
                    <th>Merek</th>
                    <th>Jenis Brg</th>
                    <th>Size</th>
                    <th>Satuan</th>
                    <th>Harga Beli</th>
                    <th>Qty</th>
                    <th>Total</th>
                    <th>ID Supplier</th>
                    <th>Nama Supplier</th>
                    <th>ID Kasir</th>
                    <th>Nama Kasir</th>
                </tr>
            </thead>
            <tbody>
                <?php
                //query ke database SELECT tabel mahasiswa urut berdasarkan id yang paling besar 
                    $sql = mysqli_query($db, "SELECT Pembelian_Detail.Kode_Barang AS [Kd Brg], Barang.Merek, Barang.Jenis_Barang AS [Jenis Brg], Barang.Ukuran AS [Size], Barang.Satuan, Barang.Harga_Beli AS [Harga Beli], [Pembelian Detail].Quantity AS Qty, [Barang]![Harga_Beli]*[Pembelian Detail]![Quantity] AS Total, Pembelian_Detail.ID_PembelianDetail AS [ID BeliDtl], [Pembelian Detail].ID_Pembelian AS [ID Beli], Pembelian.ID_Supplier AS ID_Supplier, Supplier.Nama_Supplier AS [Nama Supplier], Pembelian.ID_Kasir AS [ID Kasir], Kasir.Nama_Kasir AS [Nama Kasir]
                    FROM Supplier INNER JOIN ((Kasir INNER JOIN Pembelian ON Kasir.ID_Kasir = Pembelian.ID_Kasir) INNER JOIN (Barang INNER JOIN [Pembelian Detail] ON Barang.Kode_Barang = [Pembelian Detail].Kode_Barang) ON Pembelian.ID_Pembelian = [Pembelian Detail].ID_Pembelian) ON Supplier.ID_Supplier = Pembelian.ID_Supplier;") or die(mysqli_error($db));
                    //jika query diatas menghasilkan nilai > 0 maka menjalankan script di bawah if...
                    if (mysqli_num_rows($sql) > 0) {
                        //membuat variabel $no untuk menyimpan nomor urut
                        $no = 1;
                        //melakukan perulangan while dengan dari dari query $sql
                        while ($data = mysqli_fetch_assoc($sql)) {
                            //menampilkan data perulangan
                            echo '
							<tr>
								<td>' . $Kode_Barang . '</td>
								<td>' . $data['id_pesanan'] . '</td>
								<td>' . $data['id_member'] . '</td>
								<td>' . $data['nama'] . '</td>
								<td>' . $data['tgl_perubahan'] . '</td>
								<td>' . $data['berat'] . '</td>
								<td>' . $data['total_harga'] . '</td>
								<td>' . $data['status'] . '</td>
								<td>
									<a href="index.php?page=edit_mhs&id_pesanan=' . $data['id_pesanan'] . '" class="btn btn-secondary btn-sm">Edit</a>
									<a href="delete.php?id_pesanan=' . $data['id_pesanan'] . '" class="btn btn-danger btn-sm" onclick="return confirm(\'Yakin ingin menghapus data ini?\')">Delete</a>
								</td>
							</tr>
							';
                            $no++;
                        }
                        //jika query menghasilkan nilai 0
                    } else {
                        echo '
						<tr>
							<td colspan="6">Tidak ada data.</td>
						</tr>
						';
                    }
                 else {
                    $sql = mysqli_query($db, "SELECT id_pesanan, id_member, nama, tgl_perubahan, berat, total_harga, status FROM pesanan WHERE nama = '$nama' ORDER BY tgl_perubahan DESC") or die(mysqli_error($db));
                    //jika query diatas menghasilkan nilai > 0 maka menjalankan script di bawah if...
                    if (mysqli_num_rows($sql) > 0) {
                        //membuat variabel $no untuk menyimpan nomor urut
                        $no = 1;
                        //melakukan perulangan while dengan dari dari query $sql
                        while ($data = mysqli_fetch_assoc($sql)) {
                            //menampilkan data perulangan
                            echo '
							<tr>
								<td>' . $no . '</td>
								<td>' . $data['id_pesanan'] . '</td>
								<td>' . $data['id_member'] . '</td>
								<td>' . $data['nama'] . '</td>
								<td>' . $data['tgl_perubahan'] . '</td>
								<td>' . $data['berat'] . '</td>
								<td>' . $data['total_harga'] . '</td>
								<td>' . $data['status'] . '</td>
							</tr>
							';
                            $no++;
                        }
                        //jika query menghasilkan nilai 0
                    } else {
                        echo '
						<tr>
							<td colspan="6">Tidak ada data.</td>
						</tr>
						';
                    }
                }

                ?>
            <tbody>
        </table>
    </div>
</div>