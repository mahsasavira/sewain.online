<?php if (!isset($barang)) { ?>

  <section class="cart_area">
    <div class="container">
      <div class="cart_inner">
        <h1>Oops.. Keranjang kamu masih kosong</h1>
      </div>
    </div>
  </section>

<?php } else { ?>

  <!--================Cart Area =================-->
  <section class="cart_area">
    <div class="container">
      <div class="cart_inner">
        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">Barang</th>
                <th scope="col">Harga Barang</th>
                <th scope="col">Lama Sewa</th>
                <th scope="col" width="200px">Total Harga</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($barang as $B) { ?>
                <?php

                $id_sewaan = $B['ID_SEWAAN'];
                $gambar = $B['GAMBAR'];
                $nama_barang = $B['NAMABARANG'];
                ?>
                <tr>
                  <td>
                    <div class="media">
                      <div class="d-flex">
                        <img src="<?= base_url('assets/img/product/sewa/') . $B['GAMBAR']; ?>" alt="" width="200px" height="200px" />
                      </div>
                      <div class="media-body">
                        <p></p>
                      </div>
                    </div>
                  </td>
                  <td>
                    <h5><?= $tarif = $B['TARIF']; ?></h5>
                  </td>
                  <td>
                    <h5><?= $durasi_sewa =  $B['DURASI_SEWA']; ?> Hari</h5>
                  </td>
                  <td>
                    <h5><?= $total = $B['TARIF'] * $B['DURASI_SEWA'] ?></h5>
                  </td>
                </tr>
              <?php } ?>
              <tr class="bottom_button">
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td>
                  <h5>Total yang harus dibayar</h5>
                </td>
                <td>
                  <h5><?= $total; ?></h5>
                </td>
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td></td>
                <td>
                  <div class="checkout_btn_inner">
                    <form method="post" action="<?= base_url('sewaan/checkout'); ?>">
                      <input type="hidden" name="id_sewaan" value="<?= $id_sewaan; ?>">
                      <input type="hidden" name="nama_barang" value="<?= $nama_barang; ?>">
                      <input type="hidden" name="gambar" value="<?= $gambar; ?>">
                      <input type="hidden" name="durasi_sewa" value="<?= $durasi_sewa; ?>">
                      <input type="hidden" name="harga" value="<?= $tarif; ?>">
                      <input type="hidden" name="total" value="<?= $total; ?>">
                      <button type="submit" class="main_btn">Bayar Sekarang</b>
                    </form>

                  </div>
                </td>
              </tr>

            </tbody>
          </table>
        </div>
      </div>
    </div>
  </section>
  <!--================End Cart Area =================-->
<?php } ?>