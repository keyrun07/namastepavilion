<?php
// https://apitemplate.io/pdf-tools/pdf-to-html/
$s=isset($_GET['s'])?$_GET['s']:"nepali";
$html_title = "Dine-in/Take out Menu of the Namaste Pavilion Restaurant, Scarborough";
$html_title =($s=="nepali")?"Nepali menu: chicken, mutton, buff momo, thali set in Scarborough":$html_title;
$html_title =($s=="nepali")?"Indian menu: Tandoori Chicken, Pokora, Tikka in Scarborough":$html_title;
$html_title =($s=="chinese")?"Indo-Chinese menu: Soup, Hakka Noodles in Scarborough":$html_title;
$html_title =($s=="combo")?"Namaste Combo Lunch Special for $9.99 in Scarborough":$html_title;
$html_title =($s=="hakka")?"Hakka Menu: Drinks, Soups, Shrimp served with steamed rice in Scarborough":$html_title;
include_once('header.php'); ?>
<div class="container container-inner-banner">
<div id="res-menu" class="d-flex justify-content-center">
	<div class="row mt-0 mb-2 p-2 container d-flex align-items-center">
		<div class="col col-sm-6 pt-2 pb-2 ">
		<h1 class="page-h1">Restaurant's Menu</h1>
			<p class="pb-3">Taste the harmonious convergence of Nepalese,
				Chinese, and Indian cuisines at our restaurant, offering everything
				from appetizers to main dishes, sides, sweets, and beverages.</p>
				

		</div>
		<div class="col col-sm-6">
			
<img src="img/taste-of-nepal.png"
				alt="Taste of Nepal, Taste of India, Taste of Indo-Chinese"
				title="Taste of Nepal, Taste of India, Taste of Indo-Chinese"
				class="d-block pic transform1" style="width: 90%">
		</div>
	</div>
</div>
</div>
<div class="container container-inner-main">



<!-- Our Restaurant Start -->
<div id="res-menu-container" class="d-flex justify-content-center">

				<div class="row button mb-4" style="width: 100%">
				<div class="col button-item">
				<a href="menu?s=nepali" class="button-link button-link-menu-bar <?php echo ($s =="nepali")?"active":"";?>"> <span class="label"> Taste of Nepal
								<span class="icon"> <svg class="bookNow" fill="currentColor"
										version="1.1" xmlns="http://www.w3.org/2000/svg" width="16"
										height="16" viewBox="0 0 24 24">
<path fill="currentColor"
											d="M21.8,6.8H7.7v1.4h13.1L6.9,22.1l-0.1,0.1l1,1L21.8,9.2v13.1h1.4V8.2C23.2,7.4,22.6,6.8,21.8,6.8z"></path></svg>
							</span>
						</span>
						</a>
						</div>
					<div class="col button-item">
						<a href="menu?s=indian" class="button-link button-link-menu-bar <?php echo ($s =="indian")?"active":"";?>"> <span class="label"> Taste of India
								<span class="icon"> <svg class="bookNow" fill="currentColor"
										version="1.1" xmlns="http://www.w3.org/2000/svg" width="16"
										height="16" viewBox="0 0 24 24">
<path fill="currentColor"
											d="M21.8,6.8H7.7v1.4h13.1L6.9,22.1l-0.1,0.1l1,1L21.8,9.2v13.1h1.4V8.2C23.2,7.4,22.6,6.8,21.8,6.8z"></path></svg>
							</span>
						</span>
						</a>
						</div>
						<div class="col button-item">						
						<a href="menu?s=chinese" class="button-link button-link-menu-bar <?php echo ($s =="chinese")?"active":"";?>"> <span class="label"> Taste of Indo-Chinese
								<span class="icon"> <svg class="bookNow" fill="currentColor"
										version="1.1" xmlns="http://www.w3.org/2000/svg" width="16"
										height="16" viewBox="0 0 24 24">
<path fill="currentColor"
											d="M21.8,6.8H7.7v1.4h13.1L6.9,22.1l-0.1,0.1l1,1L21.8,9.2v13.1h1.4V8.2C23.2,7.4,22.6,6.8,21.8,6.8z"></path></svg>
							</span>
						</span>
						</a>
						</div>
						<div class="col button-item">						
						<a href="menu?s=combo" class="button-link button-link-menu-bar <?php echo ($s =="combo")?"active":"";?>"> <span class="label"> Lunch Special Combo
								<span class="icon"> <svg class="bookNow" fill="currentColor"
										version="1.1" xmlns="http://www.w3.org/2000/svg" width="16"
										height="16" viewBox="0 0 24 24">
<path fill="currentColor"
											d="M21.8,6.8H7.7v1.4h13.1L6.9,22.1l-0.1,0.1l1,1L21.8,9.2v13.1h1.4V8.2C23.2,7.4,22.6,6.8,21.8,6.8z"></path></svg>
							</span>
						</span>
						</a>
						</div>
						<div class="col button-item">
						 <a href="menu?s=hakka" class="button-link  button-link-menu-bar <?php echo ($s =="hakka")?"active":"";?>"> <span class="label">
								Hakka Menu <span class="icon"> <svg class="bookNow"
										fill="currentColor" version="1.1"
										xmlns="http://www.w3.org/2000/svg" width="16" height="16"
										viewBox="0 0 24 24">
<path fill="currentColor"
											d="M21.8,6.8H7.7v1.4h13.1L6.9,22.1l-0.1,0.1l1,1L21.8,9.2v13.1h1.4V8.2C23.2,7.4,22.6,6.8,21.8,6.8z"></path></svg>
							</span>
						</span>
						</a>
						</div>
					</div>
</div>



<div id="menu-container" class="row d-flex justify-content-center">
<?php if ($s=="nepali"){ ?>
<img src="img/menu/menu-1.png" class="menu-pic pb-2">
<?php  }?>
<?php if ($s=="indian"){ ?>
<img src="img/menu/menu-2.png" class="menu-pic pb-2">
<img src="img/menu/menu-3.png" class="menu-pic pb-2">
<img src="img/menu/menu-4.png" class="menu-pic pb-2">
<?php  }?>
<?php if ($s=="chinese"){ ?>
<img src="img/menu/menu-5.png" class="menu-pic pb-2">
<img src="img/menu/menu-6.png" class="menu-pic pb-2">
<?php  }?>
<?php if ($s=="combo"){ ?>
<style>
#combo tr {border-bottom: 1pt dotted var(--brand-color-1);}
#combo td { padding:8px;}
</style>
<div style="max-width: 1000px;">
<p class="text-end p-3">Legend 🌶 = Spicy | V = Vegetarian | 🦐 = Contains shellfish</p>
<p></p>
<p></p>
<table id="combo">
<tr><td><h2>Lunch Special Combos(11am-3pm; Wed-Mon)</h2><b>Served with your choice of steamed rice or jeera (cumin) rice or 1 naan or 2 roti.</b></td><td><b></b></td></tr>
<tr><td><b>Butter chicken combo</b><br/>Creamy tomato-and-butter based chicken curry</td><td><b>$9.99</b></td></tr>
<tr><td><b>Palak chicken combo</b><br/>Tender chicken simmered in a spiced spinach (palak) gravy</td><td><b>$9.99</b></td></tr>
<tr><td><b>Butter chicken combo</b><br/>Creamy butter chicken</td><td><b>$9.99</b></td></tr>
<tr><td><b>Paneer butter masala combo — V</b><br/>Cubes of paneer in a rich, creamy tomato gravy</td><td><b>$9.99</b></td></tr>
<tr><td><b>Paneer tikka masala combo — V</b><br/>Char-grilled paneer pieces in a smoky, spiced tomato-based sauce</td><td><b>$9.99</b></td></tr>
<tr><td><b>Mutton curry combo</b><br/>Slow-cooked mutton in an aromatic curry gravy</td><td><b>$9.99</b></td></tr>
<tr><td><b>Chicken vindaloo combo — 🌶</b><br/>Tangy, spicy Goan-style chicken vindaloo</td><td><b>$9.99</b></td></tr>
<tr><td><b>Dal makhani combo — V</b><br/>Creamy, slow-cooked black lentils finished with butter and cream</td><td><b>$9.99</b></td></tr>
<tr><td><b>Chana masala combo — V</b><br/>Hearty spiced chickpea curry</td><td><b>$9.99</b></td></tr>
<tr><td><b>Chilli chicken combo — 🌶</b><br/>Indo-Chinese style chilli chicken tossed in a tangy-spicy sauce</td><td><b>$9.99</b></td></tr>
<tr><td><b>Lamb curry combo</b><br/>Flavorful lamb curry with aromatic spices</td><td><b>$9.99</b></td></tr>
<tr><td><b>Chicken 65 combo + jeera rice — 🌶</b><br/></td><td><b>$9.99</b></td></tr>
<tr><td><h2><br/>Namaste Lunch Combo</h2></td><td><b></b></td></tr>
<tr><td><b>Biryani rice combo + raita and pickle</b><br/>Fragrant biryani rice served with cooling raita and pickle.</td><td><b>$9.99</b></td></tr>
<tr><td><b>2 Aloo paratha combo + raita and pickle — V</b><br/>Two potato-stuffed parathas served with raita and pickle.</td><td><b>$9.99</b></td></tr>
<tr><td><b>Cheese naan (2 pc) combo + raita and pickle — V</b><br/>Two cheese-stuffed naans accompanied by raita and pickle.</td><td><b>$9.99</b></td></tr>
<tr><td><b>Fish masala combo + 2 roti or naan or rice</b><br/>Fish cooked in spiced tomato-onion masala; served with your choice of roti, naan or rice.</td><td><b>$9.99</b></td></tr>
<tr><td><b>Paneer chilli combo + steam rice or fried rice — V 🌶</b><br/>Indo-Chinese paneer chilli in a savory-spicy sauce; choice of steamed or fried rice or 1 Naan or 2 roti.</td><td><b>$9.99</b></td></tr>
<tr><td><b>Veg manchurian combo + fried rice or basmati rice — V 🌶</b><br/>Crispy vegetable manchurian in a tangy sauce served with fried rice or basmati rice.</td><td><b>$9.99</b></td></tr>
<tr><td><b>Chilli chicken combo + rice or noodles — 🌶</b><br/>Spicy chilli chicken served with your choice of rice or noodles.</td><td><b>$9.99</b></td></tr>
<tr><td><b>Chilli shrimp combo + rice or noodles — 🌶 🦐</b><br/>Spicy chilli shrimp served with rice or noodles.</td><td><b>$9.99</b></td></tr>
<tr><td><b>Dragon chicken combo + noodles — 🌶</b><br/>Crispy dragon-style chicken in a sweet-spicy glaze served with noodles.</td><td><b>$9.99</b></td></tr>
<tr><td><b>Schezwan chicken combo + steam or fried rice — 🌶</b><br/>Hot Schezwan-style chicken with bold, spicy flavors; served with steamed rice.</td><td><b>$9.99</b></td></tr>
<tr><td><b>Bombay chicken combo + steam or fried rice — 🌶</b><br/>Boneless chicken pieces with onion, ginger, garlic with flavour of oyster sauce</td><td><b>$9.99</b></td></tr>
<tr><td><b>Sweet & Sour chicken or veg combo + steam or fried rice</b><br/>Choice of chicken or vegetables in tangy sweet & sour sauce, served with steamed or fried rice.</td><td><b>$9.99</b></td></tr>
<tr><td><h2><br/>2 persons share</h2></td><td><b></b></td></tr>
<tr><td><b>Chef’s Combo Suggestion</b><br/>Choice of two combo dishes (examples: Butter chicken +Paneer tikka) served with steamed rice or jeera rice or 2 Naan or 4 roti</td><td><b>$18.99</b></td></tr>
<tr><td><b>Hakka Mixed Meat Chow Mein</b><br/>Three-protein chow mein (chicken, egg & shrimp) wok-tossed with veggies and light savory sauce. 🦐</td><td><b>$19.99</b></td></tr>
<tr><td><b>Hakka Steamed Fish with Ginger & Scallion + Hakka Noodles or Steam Rice</b><br/>Whole fillet steamed with ginger, scallion and a light soy-aromatic dressing — clean Hakka flavors. 🐟</td><td><b>$18.99</b></td></tr>
<tr><td><b>Hakka Garlic Ginger Shrimp</b><br/>Plump shrimp wok-stirred with lots of garlic, fresh ginger and scallion; bright and fragrant. 🦐</td><td><b>$19.99</b></td></tr>
<tr><td><b>Hakka Noodles (chicken, Veg & shrimp)</b><br/>Hakka noodles topped with chicken, shrimp and mixed vegetables in savory sauce.🦐</td><td><b>$18.99</b></td></tr>
<tr><td><b>Chicken with Mixed Vegetables</b><br/>Tender chicken stir-fried with a colorful medley of fresh vegetables in a light soy-garlic sauce.</td><td><b>$18.99</b></td></tr>
<tr><td><b>Chicken Curry with Mixed Vegetables</b><br/>Succulent chicken and seasonal vegetables simmered in a mildly spiced, flavorful curry sauce.</td><td><b>$18.99</b></td></tr>
<tr><td><b>Chicken with Mushroom</b><br/>Sliced chicken cooked with button mushrooms, onions, and peppers in a savory brown sauce.</td><td><b>$17.99</b></td></tr>
<tr><td><b>Chicken with Broccoli</b><br/>Juicy chicken pieces stir-fried with crisp broccoli in a delicate garlic-soy glaze.</td><td><b>$17.99</b></td></tr>
<tr><td><b>Sweet & Sour Chicken Piece</b><br/>Crispy fried chicken pieces tossed in a tangy sweet-and-sour sauce with bell peppers and pineapple.</td><td><b>$17.99</b></td></tr>
<tr><td><b>Chicken with Cashew Nut — 🥜</b><br/>Tender chicken stir-fried with roasted cashew nuts, onionsand peppers in a savory sauce.</td><td><b>$18.99 </b></td></tr>
<tr><td><b>Chicken with Black Bean</b><br/>Flavorful chicken with bell peppers, onions, and aromatic fermented black bean sauce.</td><td><b>$17.99</b></td></tr>
<tr><td><b></b><br/></td><td><b></b></td></tr>
</table>
</div>
<?php  }?>
<?php if ($s=="chinese"){ ?>
<?php  }?>


</div>
<div class="d-flex justify-content-center p-3">
<?php if(isset($show_online_order) && ($show_online_order == true)){?>
<a href="https://www.clover.com/online-ordering/namaste-pavilion-toronto" target="_blank" class="button-link"> <span class="label">
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
<!--  Food Gallery Start  -->
<div class="d-flex justify-content-center">
<?php include_once('menu_gallery.php'); ?>
</div>
<!--  Food Gallery End  -->

</div>

<!-- Our Restaurant End -->
<?php include_once('footer.php'); ?>