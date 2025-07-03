<?php include_once('header.php'); ?>
<div class="container">
<!-- Carousel -->
<div id="carousel-home" class="carousel slide" data-bs-ride="carousel">
  <!-- Indicators/dots -->
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carousel-home" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#carousel-home" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#carousel-home" data-bs-slide-to="2"></button>
	<button type="button" data-bs-target="#carousel-home" data-bs-slide-to="3"></button>
	<button type="button" data-bs-target="#carousel-home" data-bs-slide-to="4"></button>
  </div>
  
  <!-- The slideshow/carousel -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/banner-1.webp" alt="Banner 1" class="d-block" style="width:100%">
    </div>
    <div class="carousel-item">
      <img src="img/banner-2.webp" alt="Banner 2" class="d-block" style="width:100%">
    </div>
    <div class="carousel-item">
      <img src="img/banner-3.webp" alt="Banner 3" class="d-block" style="width:100%">
    </div>
	<div class="carousel-item">
      <img src="img/banner-4.webp" alt="Banner 4" class="d-block" style="width:100%">
    </div>
	<div class="carousel-item">
      <img src="img/banner-5.webp" alt="Banner 5" class="d-block" style="width:100%">
    </div>
  </div>
  
  <!-- Left and right controls/icons -->
  <button class="carousel-control-prev" type="button" data-bs-target="#carousel-home" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carousel-home" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>

<div id="stats-row" class="row mt-5 mb-5 p-4">
<div class="col col-sm-3">
<table><tr>
<td class="stats-icon">
<svg role="img" width="40" height="40" data-icon="chair" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M192 32V224H160V37.5C122.7 50.6 96 86.2 96 128v96H64V128C64 57.3 121.3 0 192 0h64c70.7 0 128 57.3 128 128v96H352V128c0-41.8-26.7-77.4-64-90.5V224H256V32H192zM64 288L32 352l384 0-32-64H64zM35.4 273.7C40.8 262.8 51.9 256 64 256H384c12.1 0 23.2 6.8 28.6 17.7l32 64c5 9.9 4.4 21.7-1.4 31.1s-16.1 15.2-27.2 15.2l0 112c0 8.8-7.2 16-16 16s-16-7.2-16-16V384H64V496c0 8.8-7.2 16-16 16s-16-7.2-16-16l0-112c-11.1 0-21.4-5.7-27.2-15.2s-6.4-21.2-1.4-31.1l32-64z"></path></svg>
</td>
<td style="max-width: 150px; min-width: 120px;"><h2 class="title">Seated</h2>
<p class="content">60-300</p></td>
</tr></table>
</div>
<div class="col col-sm-3">
<table><tr>
<td class="stats-icon">
<svg role="img" width="40" height="40" data-icon="people" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><path fill="currentColor" d="M136 56a24 24 0 1 1 48 0 24 24 0 1 1 -48 0zm80 0A56 56 0 1 0 104 56a56 56 0 1 0 112 0zM147.3 160h25.4c6.8 0 13.3 1.4 19.3 4V320H128V164c6-2.6 12.5-4 19.3-4zM128 496V352h64V496c0 8.8 7.2 16 16 16s16-7.2 16-16V202.2l49.9 93.4c4.2 7.8 13.9 10.7 21.7 6.6s10.7-13.9 6.6-21.7L243.3 170.3c-13.9-26-41-42.3-70.6-42.3H147.3c-29.5 0-56.7 16.3-70.6 42.3L17.9 280.5c-4.2 7.8-1.2 17.5 6.6 21.7s17.5 1.2 21.7-6.6L96 202.1V496c0 8.8 7.2 16 16 16s16-7.2 16-16zM456 56a24 24 0 1 1 48 0 24 24 0 1 1 -48 0zm80 0A56 56 0 1 0 424 56a56 56 0 1 0 112 0zM446.3 263.2c4-7.9 .7-17.5-7.2-21.5s-17.5-.7-21.5 7.2l-64 128c-2.5 5-2.2 10.9 .7 15.6s8.1 7.6 13.6 7.6h48v96c0 8.8 7.2 16 16 16s16-7.2 16-16V400h64v96c0 8.8 7.2 16 16 16s16-7.2 16-16V400h48c5.5 0 10.7-2.9 13.6-7.6s3.2-10.6 .7-15.6l-64-128c-4-7.9-13.6-11.1-21.5-7.2s-11.1 13.6-7.2 21.5L566.1 368H528 432 393.9l52.4-104.8zM480 160c25.5 0 49 14.1 61 36.6l52.9 98.9c4.2 7.8 13.9 10.7 21.7 6.6s10.7-13.9 6.6-21.7l-52.9-98.9C551.7 148.6 517.3 128 480 128s-71.7 20.6-89.3 53.5l-52.9 98.9c-4.2 7.8-1.2 17.5 6.6 21.7s17.5 1.2 21.7-6.6L419 196.6c12-22.5 35.5-36.6 61-36.6z"></path></svg>
</td>
<td><h2 class="title">Standing</h2>
<p class="content">80-500</p></td>
</tr></table>
</div>
<div class="col col-sm-3">
<table><tr>
<td class="stats-icon">
<svg role="img" width="40" height="40" data-icon="plate-utensils" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><path fill="currentColor" d="M16 16C7.2 16 0 23.2 0 32V176c0 26.5 21.5 48 48 48H64V480c0 8.8 7.2 16 16 16s16-7.2 16-16V224h16c26.5 0 48-21.5 48-48V32c0-8.8-7.2-16-16-16s-16 7.2-16 16V176c0 8.8-7.2 16-16 16H96V32c0-8.8-7.2-16-16-16s-16 7.2-16 16V192H48c-8.8 0-16-7.2-16-16V32c0-8.8-7.2-16-16-16zM498 78.9C455.3 39.8 398.4 16 336 16c-54 0-103.9 17.9-144 48v41.9C229.4 70 280.1 48 336 48c58.9 0 112 24.5 149.9 63.8c3.1-12 7.2-22.9 12.1-32.9zm24.5 269.4C488.5 416.9 417.7 464 336 464c-73.8 0-138.6-38.4-175.5-96.4c-8.5 6.5-18.3 11.3-29 14C173.7 450.2 249.5 496 336 496c98.4 0 183-59.2 220-144H544c-7.6 0-14.8-1.3-21.5-3.7zM480 256a144 144 0 1 0 -288 0 144 144 0 1 0 288 0zm-256 0a112 112 0 1 1 224 0 112 112 0 1 1 -224 0zM608 54.4V288H544V160c0-61.3 39.4-92.2 64-105.6zM640 288V36.9c0-11.5-9.3-20.9-20.9-20.9c-2.1 0-4.1 .3-6.1 1C596.2 23.2 512 59.2 512 160V288c0 17.7 14.3 32 32 32h64V480c0 8.8 7.2 16 16 16s16-7.2 16-16V320 304 288z"></path></svg>
</td>
<td style="min-width: 170px;"><h2 class="title">Catering</h2>
<p class="content ">On-Site Catering</p></td>
</tr></table>
</div>
<div class="col col-sm-3">
<table><tr>
<td class="stats-icon">
<svg role="img" width="40" height="40" data-prefix="fal" data-icon="circle-dollar" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M480 256A224 224 0 1 0 32 256a224 224 0 1 0 448 0zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zM272 120v23c13.5 1 26.6 4.6 39.6 8.3c1.5 .4 3.1 .9 4.6 1.3c8.5 2.4 13.5 11.2 11.2 19.7s-11.2 13.5-19.7 11.2c-2.4-.7-4.8-1.4-7.2-2.1c-7.5-2.2-15.2-4.4-22.9-5.5c-19.1-2.8-36.6-.4-49.3 5.1c-12.9 5.6-18.6 13.1-19.8 19.5c-1.8 9.8 2.1 16.5 10.2 21.7c10.6 6.8 26.5 11.3 45.8 16.8l.3 .1c17.7 5 38.9 11.1 54.3 21.7c19 13 27.8 33.8 23.6 56.5c-4 21.6-18.9 36-37.8 43.6c-9.9 4-21.1 6.3-33.1 6.9l0 24.2c0 8.8-7.2 16-16 16s-16-7.2-16-16l0-25.9c-8.1-1.3-21.8-5.2-32.4-8.4c-6.9-2.1-13.8-4.3-20.7-6.5c-8.4-2.8-12.9-11.8-10.2-20.2s11.8-12.9 20.2-10.2c6.6 2.2 13.2 4.3 19.9 6.3c11.2 3.4 22.7 6.6 28.1 7.4c19.8 2.9 36.5 1.3 48-3.4c11.2-4.5 16.8-11.3 18.3-19.7c1.9-10.5-1.5-18.4-10.2-24.4c-12-8.2-26.8-12.3-40.9-16.2c-2.3-.6-4.7-1.3-6.9-1.9c-17.1-4.8-37-10.5-51.7-19.9c-8.1-5.2-15.7-12.1-20.5-21.7c-4.9-9.8-6.2-20.8-4-32.8c3.8-20.7 20-35.1 38.6-43.1c7.4-3.2 15.6-5.6 24.3-7.1V120c0-8.8 7.2-16 16-16s16 7.2 16 16z"></path></svg>
</td>
<td style="min-width: 170px;"><h2 class="title">Pricing</h2>
<p class="content">$10 - $50 /person</p></td>
</tr></table>
</div>
</div>


<div id="offer" class="p-3 mb-4 offer">
<div class="row">
<div class="col events">
<h3 class="p-4 mb-0 text-center">Let us help you create  memorable moments</h3>
<div class="row">
<div class="col col-offer corporate p-4 fade-out-up-element">
<span class="for">for</span>
<h4>Corporate</h4>
<img src="img/offer_business.jpg" alt="Corporate Event" class="d-block pic transform1" style="width:100%">
<ul>
<li>Business Meeting</li>
<li>AGM</li>
<li>Christmas or Holidays</li>
<li>Retirement Parties</li>
<li>Award Ceremonies</li>
<li>Industry Seminars & Workshops</li>
<li>Athletic Club Dinner</li>

</ul>
</div>
<div class="col col-offer private p-4">
<span class="for">for</span>
<h4>Private Events</h4>
<img src="img/offer_private.jpg" alt="Private Event" class="d-block pic transform2" style="width:100%">
<ul>
<li>Baby Shower</li>
<li>Gender reveal</li>
<li>Weaning / Rice Feeding</li>
<li>Birthdays</li>
<li>Bratabandha</li>
<li>Gunyo Cholo / Ihi</li>
<li>Sweet 16</li>
<li>Proms and Semi-Formals</li>
<li>Engagement & Wedding</li>
</ul>
</div>
<div class="col col-offer social p-4">
<span class="for">for</span>
<h4>Social Events</h4>
<img src="img/offer_social.jpg" alt="Social Event" class="d-block pic transform3" style="width:100%">
<ul>
<li>Musical Events</li>
<li>Concerts / Live Music Events</li>
<li>Cultural Celebrations</li>
<li>Dances / Balls</li>
<li>Community Festivals/Fairs </li>
<li>Meet and Greet</li>
<li>Charity Galas</li>
<li>and many more</li>
</ul>
</div>
</div>
</div>

</div>
</div>

<div id="partners" class="p-3 mb-4 partners">
<div class="row pb-5">
<div class="col"><hr /></div>
<div class="col title text-center"><h3>Our Partners</h3></div>
<div class="col"><hr /></div>
</div>
<div class="row pb-5">
<div class="col item text-center image-hover-effect">
<a href ="https://www.sumaxhomes.ca/" target="_blank">
<img alt="EXP Reality - Sagoon Group" src="img/partner-sagoon.jpg" title="EXP Reality - Sagoon Group" width="120">
</a>
</div>
<div class="col item text-center image-hover-effect">
<a href ="https://vindaloocuisine.com/" target="_blank">
<img alt="Vindaloo Restaurant" src="img/partner-vindaloo.jpg" title="Vindaloo Restaurant" width="120">
</a>
</div>
<div class="col item text-center image-hover-effect">
<a href ="https://www.facebook.com/p/BiD-CPA-Professional-Corporation-100089216624294/" target="_blank">
<img alt="BiD CPA Professional Corporation " src="img/partner-bid.jpg" title="BiD CPA Professional Corporation" width="120">
</a>
</div>
<div class="col item text-center image-hover-effect">
<a href ="https://www.kathmandurestaurant.ca/" target="_blank">
<img alt="Kathmandu Restaurant" src="img/partner-ktm.jpg" title="Kathmandu Restaurant" width="120">
</a>
</div>
<div class="col item text-center image-hover-effect">
<a href ="https://kipastories.com/" target="_blank">
<img alt="Kipa Stories" src="img/partner-kipa.jpg" title="Kipa Stories" width="120">
</a>
</div>
</div>
</div>
</div>
<?php include_once('footer.php'); ?>