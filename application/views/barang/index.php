<?php echo $this->session->flashdata('message'); ?>

<section class="feature_product_area section_gap_bottom_custom">
    <div class="container mt-4">
        <div class="row">
            <?php foreach ($barang as $B) { ?>
                <div class="col-lg-3 col-md-4">
                    <div class="single-product">
                        <div class="product-img">
                            <img class="img-fluid w-100" src="<?php echo base_url('assets/img/product/sewa/') . $B['GAMBAR']; ?>" alt="" />
                        </div>
                        <div class="product-btm">
                            <a href="<?php echo base_url('sewaan/detail_sewaan/') . $B['ID_SEWAAN']; ?>" class="d-block">
                                <h4><?php echo $B['NAMABARANG']; ?></h4>
                            </a>
                            <div class="mt-3">
                                <span class="mr-4"><?php echo $B['TARIF']; ?> / hari</span>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>