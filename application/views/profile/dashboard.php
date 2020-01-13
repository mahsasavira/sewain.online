<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- <div class="row">
        <div class="col-md-7">
            <h1 class="h3 mb-4 text-gray-800">Dashboard</h1>

            <div class="row">
                <div class="col-md-7">
                    <div class="card shadow border-bottom-warning">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Kelengkapan profile</div>
                                    <div class="row no-gutters align-items-center">
                                        <div class="col-auto">
                                            <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">50%</div>
                                        </div>
                                        <div class="col">
                                            <div class="progress progress-sm mr-2">
                                                <div class="progress-bar bg-warning" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-user fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <p class="text-warning mt-4">Lengkapi data diri anda agar dapat menyewa lebih banyak barang.
                <a href="<?= base_url('akun/index'); ?>">Klik disini</a>
            </p>
        </div>
    </div> -->
    <hr>

    <div class="row">
        <div class="col-auto">
            <div class="card shadow border-left-primary">
                <div class="card-body">
                    <h5 class="card-title">Barang yang disewakan</h5>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nama Barang</th>
                                <th scope="col">Jenis</th>
                                <th scope="col">Status</th>
                                <th scope="col">Harga</th>
                                <th scope="col">Gambar</th>
                                <th scope="col">Deskripsi</th>
                                <th scope="col">Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th class="align-middle" scope="row">1</th>
                                <td class="align-middle">Kamera</td>
                                <td class="align-middle">Elektronik</td>
                                <td class="bg-success align-middle">Disewa</td>
                                <td class="align-middle">Rp. 150.000,-</td>
                                <td class="align-middle">
                                    <img src="<?= base_url('assets/img/product/sewa/camera.jpg') ?>" width="100px" height="100px" class="img-thumbnail">
                                </td>
                                <td class="align-middle">
                                    <ul>
                                        <li>Mudah digunakan</li>
                                        <li>Lensa baru</li>
                                        <li>Tersedia tripod</li>
                                        <li>Tersedia 2 baterai cadangan</li>
                                    </ul>
                                </td>
                                <td class="align-middle">
                                    <div class="btn-group" role="group">
                                        <a href="#" class="btn btn-sm btn-primary">Edit</a>
                                        <a href="#" class="btn btn-sm btn-danger">Hapus</a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th class="align-middle" scope="row">2</th>
                                <td class="align-middle">HDD External</td>
                                <td class="align-middle">Elektronik</td>
                                <td class="bg-warning align-middle">Belum Disewa</td>
                                <td class="align-middle">Rp. 250.000,-</td>
                                <td class="align-middle">
                                    <img src="<?= base_url('assets/img/product/sewa/harddisk.jpg') ?>" width="100px" height="100px" class="img-thumbnail">
                                </td>
                                <td class="align-middle">
                                    <ul>
                                        <li>Deskripsi satu</li>
                                        <li>Deskripsi dua</li>
                                        <li>Deskripsi tiga</li>
                                        <li>Deskripsi empat</li>
                                    </ul>
                                </td>
                                <td class="align-middle">
                                    <div class="btn-group" role="group">
                                        <a href="#" class="btn btn-sm btn-primary">Edit</a>
                                        <a href="#" class="btn btn-sm btn-danger">Hapus</a>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>

    </div>


    <div class="row mt-5">
        <div class="col-auto">
            <div class="card shadow border-left-primary">
                <div class="card-body">
                    <h5 class="card-title">Barang yang sedang disewa</h5>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nama Barang</th>
                                <th scope="col">Jenis</th>
                                <th scope="col">Status</th>
                                <th scope="col">Harga</th>
                                <th scope="col">Gambar</th>
                                <th scope="col">Deskripsi</th>
                                <th scope="col">Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th class="align-middle" scope="row">1</th>
                                <td class="align-middle">Kamera</td>
                                <td class="align-middle">Elektronik</td>
                                <td class="bg-success align-middle">Disewa</td>
                                <td class="align-middle">Rp. 150.000,-</td>
                                <td class="align-middle">
                                    <img src="<?= base_url('assets/img/product/sewa/camera.jpg') ?>" width="100px" height="100px" class="img-thumbnail">
                                </td>
                                <td class="align-middle">
                                    <ul>
                                        <li>Mudah digunakan</li>
                                        <li>Lensa baru</li>
                                        <li>Tersedia tripod</li>
                                        <li>Tersedia 2 baterai cadangan</li>
                                    </ul>
                                </td>
                                <td class="align-middle">
                                    <div class="btn-group" role="group">
                                        <a href="#" class="btn btn-sm btn-primary">Edit</a>
                                        <a href="#" class="btn btn-sm btn-danger">Hapus</a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th class="align-middle" scope="row">2</th>
                                <td class="align-middle">HDD External</td>
                                <td class="align-middle">Elektronik</td>
                                <td class="bg-warning align-middle">Belum Disewa</td>
                                <td class="align-middle">Rp. 250.000,-</td>
                                <td class="align-middle">
                                    <img src="<?= base_url('assets/img/product/sewa/harddisk.jpg') ?>" width="100px" height="100px" class="img-thumbnail">
                                </td>
                                <td class="align-middle">
                                    <ul>
                                        <li>Deskripsi satu</li>
                                        <li>Deskripsi dua</li>
                                        <li>Deskripsi tiga</li>
                                        <li>Deskripsi empat</li>
                                    </ul>
                                </td>
                                <td class="align-middle">
                                    <div class="btn-group" role="group">
                                        <a href="#" class="btn btn-sm btn-primary">Edit</a>
                                        <a href="#" class="btn btn-sm btn-danger">Hapus</a>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>

</div>
<!-- /.container-fluid -->
</div>