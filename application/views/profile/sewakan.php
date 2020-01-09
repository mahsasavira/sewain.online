<!-- Begin Page Content -->
<div class="container-fluid">

    <h1 class="h3 mb-4 text-gray-800">Sewakan Barang</h1>

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
                    <form>
                        <div class="form-group row">
                            <label for="inputNamaBarang" class="col-sm-4 col-form-label">Nama Barang</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="inputNamaBarang" placeholder="Nama barang">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputJenis" class="col-sm-4 col-form-label">Jenis Barang</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="inputJenis" placeholder="Jenis Barang">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputDeskripsi" class="col-sm-4 col-form-label">Deskripsi</label>
                            <div class="col-sm-8">
                                <textarea class="form-control" rows="5"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputHarga" class="col-sm-4 col-form-label">Harga</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="inputHarga" placeholder="Harga">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputGambar" class="col-sm-4 col-form-label">Pilih Gambar</label>
                            <div class="col-sm-8">
                                <input type="file" class="form-control-file" id="inputGambar">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="button" class="btn btn-primary">Simpan</button>
                </div>
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
                                <th scope="col" class="align-middle">Ditambahkan Pada</th>
                                <th scope="col" class="align-middle">Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th class="align-middle" scope="row">1</th>
                                <td class="align-middle">Kamera</td>
                                <td class="align-middle">Elektronik</td>
                                <td class="align-middle">
                                    <img src="<?= base_url('assets/img/product/sewa/camera.jpg') ?>" width="100px" height="100px" class="img-thumbnail">
                                </td>
                                <td class="align-middle">Rabu, 08 Januari 2020</td>
                                <td class="align-middle">
                                    <div class="btn-group" role="group">
                                        <a href="#" class="btn btn-sm btn-primary">Sewakan</a>
                                        <a href="#" class="btn btn-sm btn-danger">Hapus</a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th class="align-middle" scope="row">2</th>
                                <td class="align-middle">HDD External</td>
                                <td class="align-middle">Elektronik</td>
                                <td class="align-middle">
                                    <img src="<?= base_url('assets/img/product/sewa/harddisk.jpg') ?>" width="100px" height="100px" class="img-thumbnail">
                                </td>
                                <td class="align-middle">Rabu, 09 Januari 2020</td>
                                <td class="align-middle">
                                    <div class="btn-group" role="group">
                                        <a href="#" class="btn btn-sm btn-primary">Sewakan</a>
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