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
                    <h5><?= $B['TARIF']; ?></h5>
                  </td>
                  <td>
                    <h5><?= $B['DURASI_SEWA']; ?> Hari</h5>
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
                    <a class="main_btn" href="#">Bayar Sekarang</a>
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