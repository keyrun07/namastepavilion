<?php include("setting.php");?>
<!DOCTYPE html><html lang="en">
<head>
<meta charset="utf-8">
<?php 
if(!isset($html_title)){
    $html_title = "Namaste Pavilion Restaurant | 客滿亭  | Event Venue in Scarborough";
}
?>
<title><?php echo $html_title; ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Namaste Restaurant pavilion is a versatile destination for authentic Nepalese, Indian, & Indo-Chinese dining (with lunch buffet) & a premier event venue in Scarborough.">
<meta name="keywords" content="Restaurant in Scarborough, Event Venue in Toronto, GTA, Authentic Nepalese, Indian, and Indo-Chinese cuisine, Banquet Hall, Dining, Lunch Buffet, Social, Private Event Venue, Pavilion Restaurant, Taste of Nepal">
<meta name="robots" content="index" />
<link rel="canonical" href="" /> 
<meta property="og:url" content="https://www.namastepavilion.ca/">
<meta property="og:type" content="website">
<meta property="og:title" content="<?php echo $html_title; ?>">
<meta property="og:site_name" content="Namaste Pavilion Restaurant">
<meta property="og:description" content="Namaste Restaurant pavilion is a versatile destination for authentic Nepalese, Indian, & Indo-Chinese dining (with lunch buffet) & a premier event venue in Scarborough.">
<meta property="og:image" content="https://www.namastepavilion.ca/img/title.png">
<meta name="twitter:card" content="summary">
<meta name="twitter:domain" content="https://www.namastepavilion.ca/">
<meta name="twitter:url" content="https://www.namastepavilion.ca/">
<meta name="twitter:title" content="<?php echo $html_title; ?>">
<meta name="twitter:description" />
<meta name="twitter:image" content="https://www.namastepavilion.ca/">
<!-- Le styles -->

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
<link href="css/style.css" media="screen" rel='stylesheet' type="text/css">
<link href="css/style-mid.css" media="screen" rel='stylesheet' type="text/css">
<link href="img/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon">
<link href="https://fonts.googleapis.com/css2?family=Dynalight&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Georama&display=swap" rel="stylesheet">

<!-- Scripts -->
<!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js" defer></script> -->
<script type="application/ld+json">
{
    "@context" : "https://schema.org",
    "@type" : "WebSite",
    "name" : "Namaste Pavilion Restaurant",    
    "url" : ""
}
</script>
</head>
<body>

<div class="container-top-bar sticky-top shadow">
<nav id="top-bar" class="navbar navbar-expand-lg navbar-light container">
  <div class="container-fluid">    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
<div id="" class="row">
<div class="col col-title p-1"><a href="/"><img src="img/logo-title.webp" width="" height="60"  title="Namaste Pavilion Restaurant" alt="Namaste Pavilion Restaurant"></a></div>
</div>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">HOME</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about">ABOUT US</a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="menu">RESTAURANT MENU</a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="venue">EVENT VENUE</a>
        </li>
        <!--<li class="nav-item">
          <a class="nav-link" href="buffet">BUFFET</a>
        </li>         
         <li class="nav-item">
          <a class="nav-link" href="events">EVENTS</a>
        </li>
        -->
		<li class="nav-item">
          <a class="nav-link" href="catering">CATERING</a>
        </li>
        <!-- 
        <li class="nav-item">
          <a class="nav-link" href="careers">CAREERS</a>
        </li>
         -->
		<li class="nav-item">
          <a class="nav-link" href="contact">CONTACT US</a>
        </li>
        <?php if(isset($show_online_order) && ($show_online_order == true)){?>
        <li class="nav-item">
          <a href="https://www.clover.com/online-ordering/namaste-pavilion-toronto" class="button-link"> <span class="label">
								Online Order <span class="icon"> <svg class="bookNow"
										fill="currentColor" version="1.1"
										xmlns="http://www.w3.org/2000/svg" width="16" height="16"
										viewBox="0 0 24 24">
<path fill="currentColor"
											d="M21.8,6.8H7.7v1.4h13.1L6.9,22.1l-0.1,0.1l1,1L21.8,9.2v13.1h1.4V8.2C23.2,7.4,22.6,6.8,21.8,6.8z"></path></svg>
							</span>
						</span>
						</a>
        </li>
        <?php } ?>
      </ul>
    </div>
  </div>
</nav>
</div>