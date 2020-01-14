<section class="cart_area">
    <div class="container">
        <div class="cart_inner">
            <div class="row">
                <div class="col-auto">
                    <div class="card shadow border-left-primary">
                        <div class="card-body">
                            <h5 class="card-title">Barang yang anda sewa</h5>
                            <img src="<?= base_url('assets/img/product/sewa/') . $barang['GAMBAR']; ?>" alt="" width="200px" height="200px" />
                            <p>
                                Nama barang : <?= $barang['NAMA_BARANG']; ?><br>
                                Durasi Sewa : <?= $barang['DURASI_SEWA']; ?> Hari<br>
                                Harga barang : <?= $barang['HARGA']; ?><br>
                                Total harga : <?= $barang['TOTAL']; ?><br>
                            </p>
                            <p>Silahkan bayar ke rekening BCA berikut : 12038219031</p>

                            <a href="<?php echo base_url('sewaan/konfirmasi_sewaan/') . $barang['ID_SEWAAN']; ?>">Konfirmasi Pembayaran</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
</section>