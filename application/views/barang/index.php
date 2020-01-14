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
                        <a href="#" class="d-block">
                            <h4><?php echo $B['NAMA']; ?></h4>
                        </a>
                        <div class="mt-3">
                            <span class="mr-4"><?php echo $B['HARGA']; ?></span>
                        </div>
                    </div>
                </div>
            </div>
        <? } ?>
        </div>
    </div>
</section>