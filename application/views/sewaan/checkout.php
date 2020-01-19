<section class="cart_area">
    <div class="container">
        <div class="cart_inner">
            <div class="row">
                <div class="col-auto">
                    <div class="card shadow border-left-primary">
                        <div class="card-body">
                            <h5 class="card-title">Barang yang anda sewa</h5>
                            <img src="<?= base_url('assets/img/product/sewa/') . $barang['GAMBAR']; ?>" alt="" width="200px" height="200px" />
                            <p class="text-justify">
                                Nama barang : <?= $barang['NAMA_BARANG']; ?><br>
                                Durasi Sewa : <?= $barang['DURASI_SEWA']; ?> Hari<br>
                                Harga barang : <?= $barang['HARGA']; ?><br>
                                Total harga : <?= $barang['TOTAL']; ?><br>
                            </p>
                            <p>Silahkan bayar ke rekening BCA berikut : 12038219031</p>

                            <?= form_open_multipart('sewaan/konfirmasi_sewaan/' . $barang['ID_SEWAAN']); ?>
                            <div class="custom-file">
                                <input type="file" name="foto" class="form-control-file" id="inputFoto">
                            </div>
                            <div class="text-center" style="padding-top: 2vw; margin-left: 5vw">
                                <div class="col-sm-8">
                                    <button type="submit" class="btn btn-primary">Kirim Bukti Pembayaran</button>
                                </div>
                            </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
</section>