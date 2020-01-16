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
            <div class="card shadow mb-4" style="width: 20rem;">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-dark"><?= $this->session->userdata('username'); ?></h6>
                </div>
                <div class="card-body text-center">
                    <?= form_open_multipart('akun/editfoto'); ?>
                    <?php
                    if ($user['foto'] == NULL) { ?>
                        <img class="card-img-top mb-3" src="<?= base_url('assets/img/profile/user.png'); ?>" alt="Foto profile">
                        <div class="custom-file">
                            <input type="file" name="foto" value="<?php echo set_value('foto', $user['foto']); ?>" class="form-control-file" id="inputFoto">
                        </div>
                        <div class="col-sm-8">
                            <button type="submit" class="btn btn-success">Simpan</button>
                        </div>

                    <?php  } else { ?>
                        <div class="col-sm-8">
                            <img style="height:250px; width:16rem;" src="<?php echo base_url('assets/img/product/user/') . $user['foto']; ?>">
                        </div>
                        <hr>
                        <div class="custom-file">
                            <input type="file" name="foto" value="<?php echo set_value('foto', $user['foto']); ?>" class="form-control-file" id="inputFoto">
                        </div>
                        <div class="text-center" style="padding-top: 2vw; margin-left: 5vw">
                            <div class="col-sm-8">
                                <button type="submit" class="btn btn-success">Simpan</button>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
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
                <?= form_open_multipart('akun/edit'); ?>
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
                <div class="form-group row">
                    <label for="inputStatus" class="col-sm-4 col-form-label">No Telepon</label>
                    <div class="col-sm-8">
                        <input type="text" name="telepon" value="<?php echo set_value('telepon', $user['telepon']); ?>" class="form-control" id="inputTelepon" autocomplate="off" placeholder="No Telepon">
                    </div>
                </div>
                <?php
                if (($user['ktp/sim'] != NULL) && $user['kk'] !=NULL) { ?>
                    <div class="form-group row">
                        <label for="inputKTP" class="col-sm-4 col-form-label">KTP/SIM</label>
                        <div class="col-sm-8">
                            <input type="text" name="ktp/sim" value="<?php $user['ktp/sim'];?>" style="display: none">
                            <img style="height:180px; width:250px;" src="<?php echo base_url('assets/img/product/user/') . $user['ktp/sim']; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputKK" class="col-sm-4 col-form-label">KK</label>
                        <div class="col-sm-8">
                            <input type="text" name="kk" value="<?php $user['kk'];?>" style="display: none">
                            <img style="height:180px; width:250px;" src="<?php echo base_url('assets/img/product/user/') . $user['kk']; ?>">
                        </div>
                    </div>
                <?php  } else if ($user['ktp/sim'] != NULL) { ?>
                    <div class="form-group row">
                        <label for="inputKTP" class="col-sm-4 col-form-label">KTP/SIM</label>
                        <div class="col-sm-8">
                            <input type="text" name="ktp_sim" <?php set_value('ktp/sim');?> style="display: none">
                            <img style="height:180px; width:250px;" src="<?php echo base_url('assets/img/product/user/') . $user['ktp/sim']; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputKK" class="col-sm-4 col-form-label">Kartu Keluarga</label>
                        <div class="col-sm-8">
                            <input type="file" name="kk" value="<?php echo set_value('kk', $user['kk']); ?>" class="form-control-file" id="inputKK">
                        </div>
                    </div>
                <?php  } else if ($user['kk'] != NULL) { ?>
                    <div class="form-group row">
                        <label for="inputKTP" class="col-sm-4 col-form-label">KTP/SIM</label>
                        <div class="col-sm-8">
                            <input type="file" name="ktp/sim" value="<?php echo set_value('ktp', $user['ktp/sim']); ?>" class="form-control-file" id="inputKTP">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputKK" class="col-sm-4 col-form-label">KK</label>
                        <div class="col-sm-8">
                            <input type="text" name="k_k" <?php set_value('kk');?> style="display: none">
                            <img style="height:180px; width:250px;" src="<?php echo base_url('assets/img/product/user/') . $user['kk']; ?>">
                        </div>
                    </div>
                <?php } else { ?>
                    <div class="form-group row">
                        <label for="inputKTP" class="col-sm-4 col-form-label">KTP/SIM</label>
                        <div class="col-sm-8">
                            <input type="file" name="ktp/sim" value="<?php echo set_value('ktp', $user['ktp/sim']); ?>" class="form-control-file" id="inputKTP">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputKK" class="col-sm-4 col-form-label">Kartu Keluarga</label>
                        <div class="col-sm-8">
                            <input type="file" name="kk" value="<?php echo set_value('kk', $user['kk']); ?>" class="form-control-file" id="inputKK">
                        </div>
                    </div>
                <?php } ?>

                <div class="form-group row">
                    <div class="text-center" style="padding-top: 5vw; margin-left: 30vw">
                        <div class="col-sm-8">
                            <button type="submit" class="btn btn-success">Simpan</button>
                        </div>
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