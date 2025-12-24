<?php
// https://apitemplate.io/pdf-tools/pdf-to-html/
$s=isset($_GET['s'])?$_GET['s']:"nepali";
$html_title = "Dine-in/Take out Menu of the Namaste Pavilion Restaurant, Scarborough";
$html_title =($s=="nepali")?"Nepali menu: chicken, mutton, buff momo, thali set in Scarborough":$html_title;
$html_title =($s=="indian")?"Indian menu: Tandoori Chicken, Pokora, Tikka in Scarborough":$html_title;
$html_title =($s=="chinese")?"Indo-Chinese menu: Soup, Hakka Noodles in Scarborough":$html_title;
$html_title =($s=="combo")?"Namaste Combo Lunch Special under $10 in Scarborough":$html_title;
$html_title =($s=="hakka")?"Hakka Menu: Drinks, Soups, Shrimp served with steamed rice in Scarborough":$html_title;

$page_title = "Restaurant's Menu - Taste of Nepal";
$page_title =($s=="nepali")?"Restaurant's Menu - Taste of Nepal":$page_title;
$page_title =($s=="indian")?"Restaurant's Menu - Taste of India":$page_title;
$page_title =($s=="chinese")?"Restaurant's Menu - Taste of Indo-Chinese":$page_title;
$page_title =($s=="combo")?"Restaurant's Menu - Lunch Combo":$page_title;
$page_title =($s=="hakka")?"Restaurant's Menu - Hakka":$page_title;

include_once('header.php'); ?>
<style>
.button-link-menu-bar { min-width: 150px;}
.tbl-menu { margin-bottom: 20px;}
.tbl-menu tr {border-bottom: 1pt dotted var(--brand-color-1);}
.tbl-menu td { padding:8px;}
h2 {color: var(--brand-color-1); }
.menu-price tr { font-weight: 700; border-bottom: 0pt solid #fff; text-align:center;}
</style>
<div class="container container-inner-banner">
<div id="res-menu" class="d-flex justify-content-center">
	<div class="row mt-0 mb-2 p-2 container d-flex align-items-center">
		<div class="col col-sm-6 pt-2 pb-2 ">
		<h1 class="page-h1"><?php echo $page_title;?></h1>
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
<div style="max-width: 1000px;">
<p class="text-end p-3"></p>

<table class="tbl-menu">
<tr><td><h2>MOMO SPECIAL</h2><b></b></td><td><b></b></td></tr>
<tr><td><b>Steam Momo</b><br/>Steamed dumplings served in a spicy, tangy Nepali-style sesame-tomato broth.</td><td><table class='menu-price'><tr><td>Veg</td><td>Chicken</td><td>Buff</td></tr><tr><td>$11.99</td><td>$12.99</td><td>$13.99</td></tr></table></td></tr>
<tr><td><b>Fried Momo</b><br/>Steamed or fried dumplings served in a fiery tomato- chili sauce with Nepali spices and fresh herbs.</td><td><table class='menu-price'><tr><td>Veg</td><td>Chicken</td><td>Buff</td></tr><tr><td>$12.99</td><td>$13.99</td><td>$14.99</td></tr></table></td></tr>
<tr><td><b>C-Momo</b><br/>Steamed or fried dumplings served in a fiery tomato- chili sauce with Nepali spices and fresh herbs.</td><td><table class='menu-price'><tr><td>Veg</td><td>Chicken</td><td>Buff</td></tr><tr><td>$12.99</td><td>$13.99</td><td>$14.99</td></tr></table></td></tr>
<tr><td><b>Tandoori Momo</b><br/> Marinated dumplings roasted in a tandoor, smoky and full of spice.</td><td><table class='menu-price'><tr><td>Veg</td><td>Chicken</td><td>Buff</td></tr><tr><td>$12.99</td><td>$13.99</td><td>$14.99</td></tr></table></td></tr>
<tr><td><b>Hariyali Momo</b><br/> Dumplings marinated in a vibrant green herb & spice blend, grilled to smoky perfection with a minty kick.</td><td><table class='menu-price'><tr><td>Veg</td><td>Chicken</td><td>Buff</td></tr><tr><td>$13.99</td><td>$14.99</td><td>$15.99</td></tr></table></td></tr>
<tr><td><b>Namaste Pavilion Special - Momo (Jhol) </b><br/>Steamed dumplings served in a spicy, tangy Nepali- style sesame-tomato sauce.</td><td><table class='menu-price'><tr><td>Veg</td><td>Chicken</td><td>Buff</td></tr><tr><td>$13.99</td><td>$14.99</td><td>$15.99</td></tr></table></td></tr>
<tr><td><h2><br/>KHAZA SPECIAL</h2><b></b></td><td><b></b></td></tr>
<tr><td><b>Sukuti Buff</b><br/>Dried buffalo meat slow-cooked with traditional Nepali spices, garlic, ginger, and timur for a rich, smoky flavor, served with bhuja. </td><td><b>$16.99</b></td></tr>
<tr><td><b>Mutton Ko Bhutun</b><br/>Pan-fried goat stomach, heart and liver sautéed with garlic, ginger, onions, and bold Nepali spices for a rich and hearty taste, served with bhuja.  </td><td><b>$16.99 </b></td></tr>
<tr><td><b>Taas </b><br/>A spicy stir-fried meat dish, made with tender mutton pieces sizzled in hot oil with bold spices, garlic, and dried chili served with bhuja. </td><td><b>$16.99 </b></td></tr>
<tr><td><b>Buff Choila  </b><br/>Grilled buffalo meat marinated in mustard oil, garlic, and Nepali spices—bold, smoky, and spicy. </td><td><b>$14.99</b></td></tr>
<tr><td><b>Timur Chicken </b><br/>Chicken stir-fried with Nepali herbs, garlic, and Szechuan pepper (timur) </td><td><b>$14.99</b></td></tr>
<tr><td><b>Bhatamas Sadheko</b><br/>Crispy roasted soybeans tossed with finely chopped onion, green chili, tomato, coriander, and traditional Nepali spices for a bold and zesty flavor. </td><td><b>$10.99</b></td></tr>
<tr><td><b>Badam Sadeko</b><br/>Crispy soybeans mixed with onion, chili, tomato, and Nepali spices for a bold, zesty taste. </td><td><b>$11.99</b></td></tr>
<tr><td><h2><br/>CHEF'S SPECIAL</h2><b></b></td><td><b></b></td></tr>
<tr><td><b>Non-Veg Thali</b><br/>A deluxe Nepali platter curated by our chef — includes rice, your choice of premium curry chicken or mutton, daal, seasonal vegetables, chicken pakora, pickles, chutney, raita, salad, papad and gulab jamun served with love and tradition.</td><td><b>$19.99</b></td></tr>
<tr><td><b>Veg Thali</b><br/>A deluxe Nepali platter curated by our chef — includes rice, daal, two seasonal vegetables, Veg pakora, pickles, chutney, raita, salad, papad and gulab jamun served with love and tradition. </td><td><b>$17.99</b></td></tr>
</table>
</div>
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
<div style="max-width: 1000px;">
<p class="text-end p-3">Legend 🌶 = Spicy | V = Vegetarian | 🦐 = Contains shellfish</p>
<p></p>
<p></p>
<table class="tbl-menu">
<tr><td><h2>Lunch Special Combos (11am-3pm; Wed-Mon)</h2><b>Served with your choice of steamed rice or jeera (cumin) rice or 1 naan or 2 roti.</b></td><td><b></b></td></tr>
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
</table>
</div>
<?php  }?>
<?php if ($s=="hakka"){ ?>
<div style="max-width: 1000px;">
<h2 class="p-3">Legend </h2>
<ul>
<li>	🌶 = Spicy / hot
<li>	🦐 = Contains shellfish (shrimp, squid, crab, seafood)
<li>	🥜 = Contains tree nuts (cashew)
<li>	🥚 = Contains egg
<li>	🌾 = Contains wheat / gluten (soy sauce, battered items)
<li>	🔸 = Contains soy
<li>	&nbsp;V&nbsp; = Vegetarian
</ul>

<p><b>Important allergy notice:</b> Please inform your server of any food allergies. While we identify common allergens on the menu, our kitchen handles many ingredients and cross-contact may occur. We cannot guarantee any item is free from allergens. Substitutions may be available on request.</p>
<p></p>
<table class="tbl-menu">
<tr><td><h2>Drinks</h2><b></b></td><td><b></b></td></tr>
<tr><td><b>Mango Punch (Small/Large) </b><br/></td><td><b>$3.50 / $5.50 </b></td></tr>
<tr><td><b>Lemon Punch (Small/Large) </b><br/></td><td><b>$3.50 / $5.50 </b></td></tr>
<tr><td><b>Mango Spritz (Small/Large) </b><br/></td><td><b>$3.50 / $5.50</b></td></tr>
<tr><td><br /><h2>Soups</h2><b></b></td><td><b></b></td></tr>
<tr><td><b>Chicken Egg vegetable (Small/Large</b><br/></td><td><b>$4.50 / $6.50 </b></td></tr>
<tr><td><b>Chicken Sweet Corn Soup (Small/Large) </b><br/></td><td><b>$4.50 / $6.50 </b></td></tr>
<tr><td><b>Sweet Corn Vegetable (Small/Large) </b><br/></td><td><b>$3.99 / $5.99 </b></td></tr>
<tr><td><br /><h2>Shrimp (served with steamed rice)</h2><b></b></td><td><b></b></td></tr>
<tr><td><b>Shrimp with Mixed Vegetables </b><br/>Tender shrimp stir-fried with mixed seasonal vegetables. 🦐 🔸</td><td><b>$16.99</b></td></tr>
<tr><td><b>Shrimp with Broccoli </b><br/>Classic shrimp and broccoli in a savory garlic-soy glaze. 🦐 🔸</td><td><b>$16.99</b></td></tr>
<tr><td><b>Shrimp with Curry Vegetable</b><br/>Shrimp cooked with vegetables in a fragrant curry sauce. 🦐</td><td><b>$16.99</b></td></tr>
<tr><td><b>Shrimp with Szechuan Sauce</b><br/>Spicy Szechuan-style shrimp with chili and garlic. 🌶 🦐 🔸</td><td><b>$16.99</b></td></tr>
<tr><td><b>Sweet & Sour Shrimp </b><br/> Crispy shrimp tossed in tangy sweet-and-sour sauce with pineapple. 🦐 🌾</td><td><b>$16.99</b></td></tr>
<tr><td><br /><h2>Noodles</h2><b></b></td><td><b></b></td></tr>
<tr><td><b>Cantonese Noodles ( Chicken)</b><br/>Crispy Noodles topped with chicken, shrimp and mixed vegetables in savory sauce. 🦐 🔸</td><td><b>$14.99</b></td></tr>
<tr><td><b>Seafood Cantonese Noodles ( Shrimp)</b><br/>Crispy Noodles with a medley of seafood and vegetables. 🦐 🔸</td><td><b>$16.99</b></td></tr>
<tr><td><b>Mix Cantonese Noodles (Chicken, Egg, Shrimp) — </b><br/>Three-protein Cantonese-style Noodles with mixed vegetables. 🦐 🔸</td><td><b>$16.99</b></td></tr>
<tr><td><b>Shrimp Cantonese Noodles </b><br/>Crispy noodles topped with shrimp and vegetables. 🦐 🔸</td><td><b>$16.99</b></td></tr>
<tr><td><b>Vegetable Cantonese Noodles </b><br/>Crispy noodles with assorted seasonal vegetables. V</td><td><b>$13.99</b></td></tr>
<tr><td><b>American Chop Suey (chicken & shrimp) </b><br/>Soft-style noodles with chicken, shrimp and vegetables (sweet & slightly spicy). 🌶 🦐 🔸</td><td><b>$14.99</b></td></tr>
<tr><td><b>Vegetable American Chop Suey </b><br/>Soft noodles stir-fried with mixed vegetables. V</td><td><b>$13.99</b></td></tr>
<tr><td><b>Shrimp American Chop Suey </b><br/>Cripsy noodles with shrimp and mixed vegetables. 🦐 🔸</td><td><b>$16.99 </b></td></tr>
<tr><td><br /><h2>Fried Rice (no spicy)</h2><b></b></td><td><b></b></td></tr>
<tr><td><b>Egg Fried Rice </b><br/>Simple egg-fried rice with egg and mixed vegetables. </td><td><b>$9.99</b></td></tr>
<tr><td><b>Chicken Fried Rice</b><br/>Classic fried rice with diced chicken and vegetables. 🔸</td><td><b>$11.99</b></td></tr>
<tr><td><b>Shrimp Fried Rice</b><br/>Fried rice tossed with plump shrimp and scallions. 🦐 🔸</td><td><b>$14.99</b></td></tr>
<tr><td><b>Vegetable Fried Rice</b><br/>Stir-fried rice with a mix of fresh vegetables. V</td><td><b>$9.99</b></td></tr>
<tr><td><b>3 Kinds of Meat Fried Rice (chicken, egg, shrimp) </b><br/>Namaste fried rice with three proteins. 🦐 🔸</td><td><b>$14.99 </b></td></tr>
<tr><td><b>Steamed Rice </b><br/>Plain steamed white rice. (V)</td><td><b>$4.50</b></td></tr>
<tr><td><br /><h2>Manchurian Fried Rice (red/spicy style)</h2><b></b></td><td><b></b></td></tr>
<tr><td><b>Manchurian Chicken Fried Rice</b><br/>Spicy red-style fried rice with diced chicken and Manchurian sauce. 🌶 🔸</td><td><b>$12.99</b></td></tr>
<tr><td><b>Manchurian Shrimp Fried Rice</b><br/>Spicy-style fried rice with shrimp and bold Manchurian flavors. 🌶 🦐 🔸</td><td><b>$15.50</b></td></tr>
<tr><td><b>Manchurian Mix Fried Rice</b><br/>Mixed-protein Manchurian fried rice (chicken, Egg, shrimp). 🌶 🦐 🔸</td><td><b>$15.99</b></td></tr>
<tr><td><b>Manchurian Vegetable Fried Rice</b><br/>Vegetarian Manchurian-style fried rice with mixed vegetables. V 🌶</td><td><b>$10.99</b></td></tr>
<tr><td><br /><h2>Chicken (served with steamed rice)</h2><b></b></td><td><b></b></td></tr>
<tr><td><b>Chicken with Mixed Vegetables</b><br/>🔸</td><td><b>$12.99</b></td></tr>
<tr><td><b>Chicken Curry with Mixed Vegetables</b><br/>(mild curry) 🔸</td><td><b>$13.99</b></td></tr>
<tr><td><b>Chicken with Mushroom</b><br/>🔸</td><td><b>$13.99</b></td></tr>
<tr><td><b>Chicken with Broccoli</b><br/>🔸</td><td><b>$13.99</b></td></tr>
<tr><td><b>Sweet & Sour Chicken Piece</b><br/>Crispy chicken pieces in sweet & sour sauce. 🌾 🔸</td><td><b>$13.99</b></td></tr>
<tr><td><b>Chicken with Cashew Nut</b><br/>Stir-fried chicken with cashew nuts. 🥜 🔸</td><td><b>$13.99</b></td></tr>
<tr><td><b>Chicken with Black Bean</b><br/>🔸</td><td><b>$13.99 </b></td></tr>
<tr><td><b>Chicken with Green Bean </b><br/>🔸</td><td><b>$13.99</b></td></tr>
<tr><td><br /><h2>Chicken (served with steamed rice)</h2><b></b></td><td><b></b></td></tr>
<tr><td><b>Vegetarian (served with steamed rice)</b><br/></td><td><b></b></td></tr>
<tr><td><b>Manchurian Broccoli </b><br/>V 🌶 🔸</td><td><b>$13.50 </b></td></tr>
<tr><td><b>Manchurian Mix Vegetable </b><br/>V 🌶 </td><td><b>$13.50 </b></td></tr>
<tr><td><b>Vegetable Curry </b><br/>V</td><td><b>$13.50 </b></td></tr>
<tr><td><b>Szechuan Vegetable </b><br/>V 🌶 🔸</td><td><b>$13.50 </b></td></tr>
<tr><td><b>Manchurian Tofu </b><br/>V 🌶 🔸</td><td><b>$13.50 </b></td></tr>
<tr><td><b>Garlic Tofu (sweet & spicy</b><br/>V 🔸</td><td><b>$13.50 </b></td></tr>
<tr><td><b>Vegetable Delight (Mix Veg) </b><br/>V 🔸</td><td><b>$13.50 </b></td></tr>
<tr><td><br /><h2>Fish (served with steamed rice)</h2><b></b></td><td><b></b></td></tr>
<tr><td><b>Fish with Mixed Vegetable </b><br/>Flaky fish fillet stir-fried with seasonal vegetables. 🐟 🔸</td><td><b>$14.99</b></td></tr>
<tr><td><b>Curry Fish with Vegetable </b><br/>Fish in a mild curry sauce with vegetables. 🐟</td><td><b>$14.99</b></td></tr>
<tr><td><b>Sweet & Sour Fish </b><br/>Crispy fish in tangy sweet-and-sour sauce. 🐟 🌾</td><td><b>$14.99</b></td></tr>
</table>
</div>
<?php  }?>


</div>
<?php if ($s=="nepali" || $s=="indian" || $s=="chinese" ){ ?>
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
<?php } ?>
<!--  Food Gallery Start  -->
<div class="d-flex justify-content-center">
<?php include_once('menu_gallery.php'); ?>
</div>
<!--  Food Gallery End  -->

</div>

<!-- Our Restaurant End -->
<?php include_once('footer.php'); ?>