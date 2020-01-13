<!-- Begin Page Content -->
<div class="container-fluid">


    <h1 class="h3 mb-4 text-gray-800">Akun Saya</h1>
<!-- 
    <div class="row">
        <div class="col-md-4">
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
    </div> -->
    <hr>
    <div class="row mt-3">
        <div class="col-md-4">
            <div class="card shadow mb-4" style="width: 18rem;">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-dark"><?= $this->session->userdata('username'); ?></h6>
                </div>
                <div class="card-body text-center">
                    <form class="form-signin" method="post" action="">
                    <img class="card-img-top mb-3" src="<?= base_url('assets/img/profile/user.png'); ?>" alt="Foto profile">
                    <button type="file" class="form-control-file" id="inputFoto">Ubah Foto </button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-7">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-dark">Data Diri</h6>
                </div>
                <div class="card-body">
                    <form class="form-signin" method="post" action="<?= base_url('akun/edit') ?>">
                        <div class="form-group row">
                            <label for="inputNama" class="col-sm-4 col-form-label">Nama</label>
                            <div class="col-sm-8">
                                <input type="text" name="nama" class="form-control" value="<?php echo set_value('nama', $user['nama']); ?>" 
                                id="inputNama" autocomplate="off" placeholder="Nama lengkap">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputAlamat" class="col-sm-4 col-form-label">Alamat</label>
                            <div class="col-sm-8">
                                <input type="text" value="<?php echo set_value('alamat', $user['alamat']); ?>" name="alamat" class="form-control" id="inputAlamat" autocomplate="off" placeholder="Alamat">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputKote" class="col-sm-4 col-form-label">Kota</label>
                            <div class="col-sm-8">
                                <input type="text" value="<?php echo set_value('kota', $user['kota']); ?>" name="kota" class="form-control" id="inputKote" autocomplate="off" placeholder="Kota">
                            </div>
                        </div>
                        <!-- <div class="form-group row">
                            <label for="inputStatus" class="col-sm-4 col-form-label">Status</label>
                            <div class="col-sm-8">
                                <input type="text" name="status" value="<?php echo set_value('status', $user['status']); ?>" class="form-control" id="inputStatus" autocomplate="off" placeholder="Status">
                            </div>
                        </div> -->
                        <div class="form-group row">
                            <label for="inputKTP" class="col-sm-4 col-form-label">KTP</label>
                            <div class="col-sm-8">
                                <input type="file" name="ktp" class="form-control-file" id="inputKTP">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputSIM" class="col-sm-4 col-form-label">SIM</label>
                            <div class="col-sm-8">
                                <input type="file" name="sim" class="form-control-file" id="inputSIM">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputKK" class="col-sm-4 col-form-label">Kartu Keluarga</label>
                            <div class="col-sm-8">
                                <input type="file" name="kk" class="form-control-file" id="inputKK">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputKTM" class="col-sm-4 col-form-label">KTM</label>
                            <div class="col-sm-8">
                                <input type="file" name="kartu_mahasiswa" class="form-control-file" id="inputKTM">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-8">
                                <button type="submit" class="btn btn-success">Simpan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
</div>