<?php

include_once "header.php";

?>

<script>
	document.title = "Home | Alcohol Store"
</script>

<div class="hero-wrap" style="background-image: url('build/images/bg_2.jpg');" data-stellar-background-ratio="0.5">
	<div class="overlay"></div>
	<div class="container">
		<div class="row no-gutters slider-text align-items-center justify-content-center">
			<div class="col-md-8 ftco-animate d-flex align-items-end">
				<div class="text w-100 text-center">
					<h1 class="mb-4">Good <span>Drink</span> for Good <span>Moments</span>.</h1>
					<p><a href="product.php" class="btn btn-primary py-2 px-4">Shop Now</a> <a href="about.php" class="btn btn-white btn-outline-white py-2 px-4">Read more</a></p>
				</div>
			</div>
		</div>
	</div>
</div>

<section class="ftco-intro">
	<div class="container">
		<div class="row no-gutters">
			<div class="col-md-4 d-flex">
				<div class="intro d-lg-flex w-100 ftco-animate">
					<div class="icon">
						<span class="flaticon-support"></span>
					</div>
					<div class="text">
						<h2>Online Support 24/7</h2>
						<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
					</div>
				</div>
			</div>
			<div class="col-md-4 d-flex">
				<div class="intro color-1 d-lg-flex w-100 ftco-animate">
					<div class="icon">
						<span class="flaticon-cashback"></span>
					</div>
					<div class="text">
						<h2>Money Back Guarantee</h2>
						<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
					</div>
				</div>
			</div>
			<div class="col-md-4 d-flex">
				<div class="intro color-2 d-lg-flex w-100 ftco-animate">
					<div class="icon">
						<span class="flaticon-free-delivery"></span>
					</div>
					<div class="text">
						<h2>Free Shipping &amp; Return</h2>
						<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="ftco-section ftco-no-pb">
	<div class="container">
		<div class="row">
			<div class="col-md-6 img img-3 d-flex justify-content-center align-items-center" style="background-image: url(build/images/about.jpg);">
			</div>
			<div class="col-md-6 wrap-about pl-md-5 ftco-animate py-5">
				<div class="heading-section">
					<span class="subheading">Since 1905</span>
					<h2 class="mb-4">Desire Meets A New Taste</h2>

					<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
					<p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word "and" and the Little Blind Text should turn around and return to its own, safe country.</p>
					<p class="year">
						<strong class="number" data-number="115">0</strong>
						<span>Years of Experience In Business</span>
					</p>
				</div>

			</div>
		</div>
	</div>
</section>

<section class="ftco-section ftco-no-pb">
	<div class="container">
		<div class="row">
			<div class="col-lg-2 col-md-4 ">
				<div class="sort w-100 text-center ftco-animate">
					<div class="img" style="background-image: url(build/images/kind-1.jpg);"></div>
					<h3>Brandy</h3>
				</div>
			</div>
			<div class="col-lg-2 col-md-4 ">
				<div class="sort w-100 text-center ftco-animate">
					<div class="img" style="background-image: url(build/images/kind-2.jpg);"></div>
					<h3>Gin</h3>
				</div>
			</div>
			<div class="col-lg-2 col-md-4 ">
				<div class="sort w-100 text-center ftco-animate">
					<div class="img" style="background-image: url(build/images/kind-3.jpg);"></div>
					<h3>Rum</h3>
				</div>
			</div>
			<div class="col-lg-2 col-md-4 ">
				<div class="sort w-100 text-center ftco-animate">
					<div class="img" style="background-image: url(build/images/kind-4.jpg);"></div>
					<h3>Tequila</h3>
				</div>
			</div>
			<div class="col-lg-2 col-md-4 ">
				<div class="sort w-100 text-center ftco-animate">
					<div class="img" style="background-image: url(build/images/kind-5.jpg);"></div>
					<h3>Vodka</h3>
				</div>
			</div>
			<div class="col-lg-2 col-md-4 ">
				<div class="sort w-100 text-center ftco-animate">
					<div class="img" style="background-image: url(build/images/kind-6.jpg);"></div>
					<h3>Whiskey</h3>
				</div>
			</div>

		</div>
	</div>
</section>

<section class="ftco-section">
	<div class="container">
		<div class="row justify-content-center pb-5">
			<div class="col-md-7 heading-section text-center ftco-animate">
				<span class="subheading">Our Delightful offerings</span>
				<h2>Tastefully Yours</h2>
			</div>
		</div>
		<div class="row">
			<?php
			$result_hh = $con->query("SELECT * FROM hanghoa LIMIT 8");
			while ($row = $result_hh->fetch_assoc()) :
				$mshh = $row['MSHH'];
				$result_img = $con->query("SELECT * FROM hinhhanghoa WHERE MSHH='$mshh' LIMIT 1");
				$img = $result_img->fetch_assoc()['TenHinh'];
			?>
				<div class="col-md-3 d-flex">
					<form id="addCartForm<?= $row['MSHH'] ?>" class="product ftco-animate" onsubmit="return add_cart(<?= $mshh; ?>)">
						<div class="img d-flex align-items-center justify-content-center" style="background-image: url(../images/<?= $img ?>);">
							<div class="desc">
								<p class="meta-prod d-flex">
									<input type="hidden" name="sl_mua" value="1">
									<button type="submit" form="addCartForm<?= $row['MSHH'] ?>" class="d-flex align-items-center justify-content-center btn-product cursor-pointer" style="cursor: pointer;"><span class="flaticon-shopping-bag"></span></button>
									<a href="detail.php?mshh=<?= $row['MSHH'] ?>" class="d-flex align-items-center justify-content-center btn-product"><span class="flaticon-visibility"></span></a>
								</p>
							</div>
						</div>
						<div class="text text-center">
							<span class="category"><?= $row['GhiChu'] ?></span>
							<h2><?= $row['TenHH'] ?></h2>
							<p class="mb-0"><span class="price"><?= number_format($row['Gia']) ?> VNĐ</span></p>
						</div>
					</form>
				</div>
			<?php endwhile; ?>
		</div>
		<div class="row justify-content-center">
			<div class="col-md-4">
				<a href="product.php" class="btn btn-primary d-block">View All Products <span class="fa fa-long-arrow-right"></span></a>
			</div>
		</div>
	</div>
</section>

<section class="ftco-section testimony-section img" style="background-image: url(build/images/bg_4.jpg);">
	<div class="overlay"></div>
	<div class="container">
		<div class="row justify-content-center mb-5">
			<div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
				<span class="subheading">Testimonial</span>
				<h2 class="mb-3">Happy Clients</h2>
			</div>
		</div>
		<div class="row ftco-animate">
			<div class="col-md-12">
				<div class="carousel-testimony owl-carousel ftco-owl">
					<div class="item">
						<div class="testimony-wrap py-4">
							<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></div>
							<div class="text">
								<p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
								<div class="d-flex align-items-center">
									<div class="user-img" style="background-image: url(build/images/person_1.jpg)"></div>
									<div class="pl-3">
										<p class="name">Roger Scott</p>
										<span class="position">Marketing Manager</span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="testimony-wrap py-4">
							<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></div>
							<div class="text">
								<p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
								<div class="d-flex align-items-center">
									<div class="user-img" style="background-image: url(build/images/person_2.jpg)"></div>
									<div class="pl-3">
										<p class="name">Roger Scott</p>
										<span class="position">Marketing Manager</span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="testimony-wrap py-4">
							<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></div>
							<div class="text">
								<p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
								<div class="d-flex align-items-center">
									<div class="user-img" style="background-image: url(build/images/person_3.jpg)"></div>
									<div class="pl-3">
										<p class="name">Roger Scott</p>
										<span class="position">Marketing Manager</span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="testimony-wrap py-4">
							<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></div>
							<div class="text">
								<p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
								<div class="d-flex align-items-center">
									<div class="user-img" style="background-image: url(build/images/person_1.jpg)"></div>
									<div class="pl-3">
										<p class="name">Roger Scott</p>
										<span class="position">Marketing Manager</span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="testimony-wrap py-4">
							<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></div>
							<div class="text">
								<p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
								<div class="d-flex align-items-center">
									<div class="user-img" style="background-image: url(build/images/person_2.jpg)"></div>
									<div class="pl-3">
										<p class="name">Roger Scott</p>
										<span class="position">Marketing Manager</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="ftco-section">
	<div class="container">
		<div class="row justify-content-center mb-5">
			<div class="col-md-7 heading-section text-center ftco-animate">
				<span class="subheading">Blog</span>
				<h2>Recent Blog</h2>
			</div>
		</div>
		<div class="row d-flex">
			<div class="col-lg-6 d-flex align-items-stretch ftco-animate">
				<div class="blog-entry d-flex">
					<a href="blog-single.html" class="block-20 img" style="background-image: url('build/images/image_1.jpg');">
					</a>
					<div class="text p-4 bg-light">
						<div class="meta">
							<p><span class="fa fa-calendar"></span> 23 April 2020</p>
						</div>
						<h3 class="heading mb-3"><a href="#">The Recipe from a Winemaker’s Restaurent</a></h3>
						<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
						<a href="#" class="btn-custom">Continue <span class="fa fa-long-arrow-right"></span></a>

					</div>
				</div>
			</div>
			<div class="col-lg-6 d-flex align-items-stretch ftco-animate">
				<div class="blog-entry d-flex">
					<a href="blog-single.html" class="block-20 img" style="background-image: url('build/images/image_2.jpg');">
					</a>
					<div class="text p-4 bg-light">
						<div class="meta">
							<p><span class="fa fa-calendar"></span> 23 April 2020</p>
						</div>
						<h3 class="heading mb-3"><a href="#">The Recipe from a Winemaker’s Restaurent</a></h3>
						<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
						<a href="#" class="btn-custom">Continue <span class="fa fa-long-arrow-right"></span></a>

					</div>
				</div>
			</div>
			<div class="col-lg-6 d-flex align-items-stretch ftco-animate">
				<div class="blog-entry d-flex">
					<a href="blog-single.html" class="block-20 img" style="background-image: url('build/images/image_3.jpg');">
					</a>
					<div class="text p-4 bg-light">
						<div class="meta">
							<p><span class="fa fa-calendar"></span> 23 April 2020</p>
						</div>
						<h3 class="heading mb-3"><a href="#">The Recipe from a Winemaker’s Restaurent</a></h3>
						<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
						<a href="#" class="btn-custom">Continue <span class="fa fa-long-arrow-right"></span></a>

					</div>
				</div>
			</div>
			<div class="col-lg-6 d-flex align-items-stretch ftco-animate">
				<div class="blog-entry d-flex">
					<a href="blog-single.html" class="block-20 img" style="background-image: url('build/images/image_4.jpg');">
					</a>
					<div class="text p-4 bg-light">
						<div class="meta">
							<p><span class="fa fa-calendar"></span> 23 April 2020</p>
						</div>
						<h3 class="heading mb-3"><a href="#">The Recipe from a Winemaker’s Restaurent</a></h3>
						<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
						<a href="#" class="btn-custom">Continue <span class="fa fa-long-arrow-right"></span></a>

					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php

include_once "footer.php";

?>