<!--================Home Banner Area =================-->
<section class="home_banner_area mb-40">
	<div class="banner_inner d-flex align-items-center">
		<div class="container">
			<div class="row">
				<div class="col-md-6"><?= $this->session->flashdata('pesan'); ?></div>
			</div>

			<div class="banner_content row">
				<div class="col-auto">
					<h3 class="py-2 px-2" style="color: #000000 !important; background-color: #f1d7c8;"><small style="color: #6f6f6f !important">Selamat datang di, </small> <br />Sewain</h3>
				</div>
			</div>
		</div>
	</div>
</section>
<!--================End Home Banner Area =================-->

<!--================ Feature Product Area =================-->
<section class="feature_product_area section_gap_bottom_custom">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-12">
				<div class="main_title">
					<h2><span>Barang Terbaru</span></h2>
				</div>
			</div>
		</div>

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
<!--================ End Feature Product Area =================-->