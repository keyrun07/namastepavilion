<?php
// https://apitemplate.io/pdf-tools/pdf-to-html/
$html_title = "Dine-in/Take out Menu of the Namaste Pavilion Restaurant, Scarborough";
include_once('header.php'); ?>
<div class="container container-inner-banner">

<img src="img/inner_banner2.jpg" alt="About Us Banner" class="d-block" style="width:100%">
</div>
<div class="container container-inner-main">

<h1 class="page-h1">Restaurant's Menu</h1>

<!-- Our Restaurant Start -->
<div id="res-menu" class="d-flex justify-content-center">
	<div class="row mt-0 mb-2 p-2 container d-flex align-items-center">
		<div class="col col-sm-5 pt-5 pb-5 ">
			<p class="pb-3">Taste the harmonious convergence of Nepalese,
				Chinese, and Indian cuisines at our restaurant, offering everything
				from appetizers to main dishes, sides, sweets, and beverages.</p>
				
				<div class="button">
						<a href="#menu-container" class="button-link"> <span class="label"> See Menu
								<span class="icon"> <svg class="bookNow" fill="currentColor"
										version="1.1" xmlns="http://www.w3.org/2000/svg" width="16"
										height="16" viewBox="0 0 24 24">
<path fill="currentColor"
											d="M21.8,6.8H7.7v1.4h13.1L6.9,22.1l-0.1,0.1l1,1L21.8,9.2v13.1h1.4V8.2C23.2,7.4,22.6,6.8,21.8,6.8z"></path></svg>
							</span>
						</span>
						</a>
						<?php if(isset($show_online_order) && ($show_online_order == true)){?>
						 <a href="https://www.foodbooking.com/api/fb/qd_x_gg" target="_blank" class="button-link"> <span class="label">
								Online Order <span class="icon"> <svg class="bookNow"
										fill="currentColor" version="1.1"
										xmlns="http://www.w3.org/2000/svg" width="16" height="16"
										viewBox="0 0 24 24">
<path fill="currentColor"
											d="M21.8,6.8H7.7v1.4h13.1L6.9,22.1l-0.1,0.1l1,1L21.8,9.2v13.1h1.4V8.2C23.2,7.4,22.6,6.8,21.8,6.8z"></path></svg>
							</span>
						</span>
						</a>
						<?php } ?>
					</div>
		</div>
		<div class="col col-sm-7 pt-5 pb-5 ">
			
<img src="img/taste-of-nepal.png"
				alt="Taste of Nepal, Taste of India, Taste of Indo-Chinese"
				title="Taste of Nepal, Taste of India, Taste of Indo-Chinese"
				class="d-block pic transform1" style="width: 100%">
		</div>
	</div>
</div>

<style>
</style>

<div id="menu-container" class="row">
<img src="img/menu/menu-1.png" class="menu-pic pb-2">
<img src="img/menu/menu-2.png" class="menu-pic pb-2">
<img src="img/menu/menu-3.png" class="menu-pic pb-2">
<img src="img/menu/menu-4.png" class="menu-pic pb-2">
<img src="img/menu/menu-5.png" class="menu-pic pb-2">
<img src="img/menu/menu-6.png" class="menu-pic pb-2">
</div>
<!--  Food Gallery Start  -->
<div id="res-menu-gallery" class="d-flex justify-content-center">
<?php include_once('menu_gallery.php'); ?>
</div>
<!--  Food Gallery End  -->
<div>
<?php if(isset($show_online_order) && ($show_online_order == true)){?>
<a href="https://www.foodbooking.com/api/fb/qd_x_gg" target="_blank" class="button-link"> <span class="label">
								Online Order <span class="icon"> <svg class="bookNow"
										fill="currentColor" version="1.1"
										xmlns="http://www.w3.org/2000/svg" width="16" height="16"
										viewBox="0 0 24 24">
<path fill="currentColor"
											d="M21.8,6.8H7.7v1.4h13.1L6.9,22.1l-0.1,0.1l1,1L21.8,9.2v13.1h1.4V8.2C23.2,7.4,22.6,6.8,21.8,6.8z"></path></svg>
							</span>
						</span>
						</a>
						<?php } ?>
</div>
</div>

<!-- Our Restaurant End -->
<?php include_once('footer.php'); ?>