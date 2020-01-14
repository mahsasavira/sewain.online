<!--================Header Menu Area =================-->
<header class="header_area">
  <div class="main_menu">
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-light w-100">
        <!-- Brand and toggle get grouped for better mobile display -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse offset w-100" id="navbarSupportedContent">
          <div class="row w-100">
            <div class="col-lg-7 pr-0">
              <ul class="nav navbar-nav center_nav pull-right">
                <li class="nav-item">
                  <a class="nav-link" href="<?= base_url(); ?>">Beranda</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?= base_url('barang'); ?>">Katalog</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?= base_url('contact'); ?>">Kontak</a>
                </li>
              </ul>
            </div>

            <div class="col-lg-5 pr-0">
              <ul class="nav navbar-nav navbar-right right_nav pull-right">
                <?php if ($title != "Masuk" && $title != "Daftar") { ?>


                  <li class="nav-item">
                    <div class="dropdown show">
                      <a href="#" class="icons dropdown-toggle" role="button" id="dropdownMenuCari" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="ti-search" aria-hidden="true"></i>
                      </a>

                      <form class="dropdown-menu p-2 form-inline" aria-labelledby="dropdownMenuCari">

                        <input type="text" width="60" class="form-control mb-2" id="inputCariBarang" placeholder="Cari barang">

                        <button type="submit" class="btn btn-sm btn-login">Cari</button>
                      </form>


                    </div>

                  </li>
                  <?php if (!isset($barang)) { ?>
                    <li class="nav-item">
                      <a href="<?= base_url('sewaan'); ?>" class="icons">
                        <i class="ti-shopping-cart"></i>
                      </a>
                    </li>
                  <?php } ?>
                <?php } ?>

                <?php if ($this->session->userdata('username')) { ?>
                  <li class="nav-item">

                    <div class="dropdown show">
                      <a href="<?php echo base_url('profile'); ?>" class="icons" role="button">
                        <span class="ti-user" aria-hidden="true">
                          <?= $this->session->userdata['username'] ?>
                        </span>
                      </a>

                      <!-- <div class="dropdown-menu p-2 col-auto" aria-labelledby="dropdownProfil">
                        <a href="<?= base_url('user/keluar'); ?>" class="dropdown-item">Keluar</a>
                      </div> -->


                    </div>
                  </li>
                <?php } else { ?>
                  <li class="nav-item">
                    <a href="<?= base_url('user/masuk'); ?>" class="icons">
                      <i class="ti-shift-right" aria-hidden="true"></i>
                    </a>
                  </li>
                <?php } ?>
              </ul>
            </div>
          </div>
        </div>
      </nav>
    </div>
  </div>
</header>
<!--================Header Menu Area =================-->