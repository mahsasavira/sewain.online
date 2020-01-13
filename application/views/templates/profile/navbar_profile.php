<!-- Topbar -->
<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

  <!-- Sidebar Toggle (Topbar) -->
  <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
    <i class="fa fa-bars"></i>
  </button>

  <div class="collapse navbar-collapse offset w-100" id="navbarSupportedContent">
    <div class="row w-100">
      <div class="col-lg-7 pr-0">
        <ul class="nav navbar-nav center_nav pull-right">
          <li class="nav-item">
            <a class="nav-link text-dark" href="<?= base_url(); ?>">Beranda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark" href="<?= base_url('barang'); ?>">Katalog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark" href="<?= base_url('contact'); ?>">Kontak</a>
          </li>
        </ul>
      </div>
      <!-- Topbar Navbar -->
      <ul class="navbar-nav ml-auto">

        <!-- Nav Item - User Information -->
        <li class="nav-item dropdown no-arrow">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $this->session->userdata['username'] ?></span>
            <!-- <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60"> -->
          </a>
        </li>
      </ul>
</nav>
<!-- End of Topbar -->