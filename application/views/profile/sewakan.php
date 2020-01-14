<!-- Begin Page Content -->
<div class="container-fluid">

    <h1 class="h3 mb-4 text-gray-800">Sewakan Barang</h1>

    <?php echo $this->session->flashdata('message'); ?>

    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahBarang">
        Tambah Barang
    </button>

    <div class="modal fade" id="tambahBarang" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="judulTambahBarang">Tambah Barang</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- <form method="post" action="<?= base_url('sewakan/add'); ?>"> -->
                    <?= form_open_multipart('sewakan/add'); ?>
                    <div class="form-group">
                        <label for="NAMABARANG" class="col-md-4 control-label"><span class="text-danger">*</span>NAMABARANG</label>
                        <div class="col-md-8">
                            <input type="text" name="NAMABARANG" value="<?= set_value('NAMABARANG'); ?>" class="form-control" id="NAMABARANG" />
                            <span class="text-danger"><?php echo form_error('NAMABARANG'); ?></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="JENIS" class="col-md-4 control-label"><span class="text-danger">*</span>JENIS</label>
                        <div class="col-md-8">
                            <input type="text" name="JENIS" value="<?= set_value('JENIS'); ?>" class="form-control" id="JENIS" />
                            <span class="text-danger"><?php echo form_error('JENIS'); ?></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="DESKRIPSI" class="col-md-4 control-label"><span class="text-danger">*</span>DESKRIPSI</label>
                        <div class="col-md-8">
                            <input type="text" name="DESKRIPSI" value="<?= set_value('DESKRIPSI'); ?>" class="form-control" id="DESKRIPSI" />
                            <span class="text-danger"><?php echo form_error('DESKRIPSI'); ?></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="HARGA" class="col-md-4 control-label"><span class="text-danger">*</span>HARGA</label>
                        <div class="col-md-8">
                            <input type="text" name="HARGA" value="<?= set_value('HARGA'); ?>" class="form-control" id="HARGA" />
                            <span class="text-danger"><?php echo form_error('HARGA'); ?></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="row">
                            <div class="col-lg-3"></div>
                            <div class="col-lg-6">
                                <img src="<?php echo base_url('assets/img/profile/default.jpg'); ?>" class="img-thumbnail">
                            </div>
                            <div class="col-lg-3"></div>
                        </div>
                        <div class="text-center" style="padding-top: 1vw; margin-left: 7vw;">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="image" name="image">
                                <label class="custom-file-label" for="image">Choose file</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="form-group">
                        <div class="col-sm-offset-4 col-sm-8">
                            <button type="submit" class="btn btn-success">Save</button>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-auto">
            <div class="card shadow border-left-primary">
                <div class="card-body">
                    <h5 class="card-title">Sewakan barang yang sudah kamu tambahkan</h5>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col" class="align-middle">#</th>
                                <th scope="col" class="align-middle">Nama Barang</th>
                                <th scope="col" class="align-middle">Jenis</th>
                                <th scope="col" class="align-middle">Gambar</th>
                                <th scope="col" class="align-middle">Harga</th>
                                <th scope="col" class="align-middle">Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($barang as $B) { ?>
                                <tr>
                                    <td><?php echo $B['ID_BARANG']; ?></td>
                                    <td><?php echo $B['NAMABARANG']; ?></td>
                                    <td><?php echo $B['JENIS']; ?></td>
                                    <td><img style="height:130px; width:130px;" src="<?php echo base_url('assets/img/product/sewa/') . $B['GAMBAR']; ?>" class="img-thumbnail">
                                    </td>
                                    <td><?php echo "Rp." . $B['HARGA']; ?></td>
                                    <?php $id_barang = $B['ID_BARANG']; ?>

                                    <td class="align-middle">
                                        <div class="btn-group" role="group">
                                            <a href="" data-toggle="modal" data-target="#sewakanBarang-<?= $id_barang; ?>" class="btn btn-sm btn-primary">Sewakan</a>
                                            <a href="<?php echo site_url('sewakan/remove/' . $B['ID_BARANG']); ?>" class="btn btn-sm btn-danger">Hapus</a>
                                        </div>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
    <?php foreach ($barang as $B) { ?>
        <?php $id_barang = $B['ID_BARANG']; ?>
        <div class="modal fade" id="sewakanBarang-<?= $id_barang; ?>" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="judulSewakanBarang">Sewakan Barang</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="<?= base_url('sewakan/sewakan_barang/' . $id_barang); ?>">
                            <div class="form-group">
                                <label for="TARIF" class="col-md-4 control-label"><span class="text-danger">*</span>TARIF</label>
                                <div class="col-md-8">
                                    <input type="text" name="TARIF" value="<?= set_value('TARIF'); ?>" class="form-control" id="TARIF" />
                                    <span class="text-danger"><?php echo form_error('TARIF'); ?></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="DURASI_SEWA" class="col-md-4 control-label"><span class="text-danger">*</span>DURASI SEWA</label>
                                <div class="col-md-3">
                                    <input type="text" name="DURASI_SEWA" value="<?= set_value('DURASI_SEWA'); ?>" class="form-control" id="DURASI_SEWA" />
                                    <span class="text-danger"><?php echo form_error('DURASI_SEWA'); ?></span>
                                    <span>/ hari</span>
                                </div>
                            </div>

                    </div>
                    <div class="modal-footer">
                        <div class="form-group">
                            <div class="col-sm-offset-4 col-sm-8">
                                <button type="submit" class="btn btn-success">Selesai</button>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    <?php } ?>
</div>
<!-- /.container-fluid -->
</div>