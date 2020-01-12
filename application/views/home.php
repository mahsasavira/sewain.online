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
			<div class="col-lg-4 col-md-6">
				<div class="single-product">
					<div class="product-img">
						<img class="img-fluid w-100" src="<?php echo base_url('assets/'); ?>img/product/feature-product/f-p-1.jpg" alt="" />
						<div class="p_icon">
							<a href="#">
								<i class="ti-eye"></i>
							</a>
							<a href="#">
								<i class="ti-heart"></i>
							</a>
							<a href="#">
								<i class="ti-shopping-cart"></i>
							</a>
						</div>
					</div>
					<div class="product-btm">
						<a href="#" class="d-block">
							<h4>Latest men’s sneaker</h4>
						</a>
						<div class="mt-3">
							<span class="mr-4">$25.00</span>
							<del>$35.00</del>
						</div>
					</div>
				</div>
			</div>

			<div class="col-lg-4 col-md-6">
				<div class="single-product">
					<div class="product-img">
						<img class="img-fluid w-100" src="<?php echo base_url('assets/'); ?>img/product/feature-product/f-p-2.jpg" alt="" />
						<div class="p_icon">
							<a href="#">
								<i class="ti-eye"></i>
							</a>
							<a href="#">
								<i class="ti-heart"></i>
							</a>
							<a href="#">
								<i class="ti-shopping-cart"></i>
							</a>
						</div>
					</div>
					<div class="product-btm">
						<a href="#" class="d-block">
							<h4>Red women purses</h4>
						</a>
						<div class="mt-3">
							<span class="mr-4">$25.00</span>
							<del>$35.00</del>
						</div>
					</div>
				</div>
			</div>

			<div class="col-lg-4 col-md-6">
				<div class="single-product">
					<div class="product-img">
						<img class="img-fluid w-100" src="<?php echo base_url('assets/'); ?>img/product/feature-product/f-p-3.jpg" alt="" />
						<div class="p_icon">
							<a href="#">
								<i class="ti-eye"></i>
							</a>
							<a href="#">
								<i class="ti-heart"></i>
							</a>
							<a href="#">
								<i class="ti-shopping-cart"></i>
							</a>
						</div>
					</div>
					<div class="product-btm">
						<a href="#" class="d-block">
							<h4>Men stylist Smart Watch</h4>
						</a>
						<div class="mt-3">
							<span class="mr-4">$25.00</span>
							<del>$35.00</del>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--================ End Feature Product Area =================-->