<!-- Begin Page Content -->
<div class="container-fluid">


    <h1 class="h3 mb-4 text-gray-800">Riwayat Saya</h1>

    <div class="row">
        <div class="col-auto">
            <div class="card shadow border-left-primary">
                <div class="card-body">
                    <h5 class="card-title">Barang yang sudah pernah disewa</h5>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col" class="align-middle">#</th>
                                <th scope="col" class="align-middle">Nama Barang</th>
                                <th scope="col" class="align-middle">Jenis</th>
                                <th scope="col" class="align-middle">Harga</th>
                                <th scope="col" class="align-middle">Gambar</th>
                                <th scope="col" class="align-middle">Tanggal Sewa</th>
                                <th scope="col" class="align-middle">Lama Sewa</th>
                                <th scope="col" class="align-middle">Terakhir Disewa Oleh</th>
                            </tr>
                        </thead>
                        <tbody>
                            <pre>
                                <?php
                                $no = 1;
                                foreach ($transaksi as $T) { ?>
                                    <tr>
                                        <th class="align-middle" scope="row"><?= $no; ?></th>
                                        <td class="align-middle"><?= $T["NAMABARANG"]; ?> </td>
                                        <td class="align-middle"><?= $T['JENIS']; ?></td>
                                        <td class="align-middle"><?= $T['TOTAL_TARIF'];  ?></td>
                                        <td class="align-middle">
                                            <img src="<?= base_url('assets/img/product/sewa/' . $T['GAMBAR']) ?>" width="100px" height="100px" class="img-thumbnail">
                                        </td>
                                        <td class="align-middle"><?= $T['TGL_TRANSAKSI']; ?></td>
                                        <td class="align-middle"><?= $T['LAMA_SEWA']; ?></td>
                                        <td class="align-middle"><?= $T['ID_PENYEWA']; ?></td>
                                    </tr>
                                    <?php
                                    $no++;
                                } ?>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
</div>