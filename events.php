<?php
$html_title = "Events at Namaste Pavilion Restaurant, Scarborough";
include_once('header.php'); ?>
<div class="container container-inner-banner">
<img src="img/inner_banner2.jpg" alt="About Us Banner" class="d-block" style="width:100%">
</div>
<div class="container container-inner-main">

<h1 class="page-h1">Events</h1>
<style>
.s_img {
  border-radius: 5px;
  cursor: pointer;
  transition: 0.3s;
}

.s_img:hover {opacity: 0.7;}

.modal {
  display: none;
  position: fixed;
  z-index: 200; /* Sit on top */
  padding-top: 100px;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: rgb(0,0,0);
  background-color: rgba(0,0,0,0.9);
}

/* Modal Content (image) */
.modal-content {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
}

/* Caption of Modal Image */
#caption {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
  text-align: center;
  color: #ccc;
  padding: 10px 0;
  height: 150px;
}

/* Add Animation */
.modal-content, #caption {  
  -webkit-animation-name: zoom;
  -webkit-animation-duration: 0.6s;
  animation-name: zoom;
  animation-duration: 0.6s;
}

@-webkit-keyframes zoom {
  from {-webkit-transform:scale(0)} 
  to {-webkit-transform:scale(1)}
}

@keyframes zoom {
  from {transform:scale(0)} 
  to {transform:scale(1)}
}

/* The Close Button */
.close {
  position: absolute;
  top: 85px;
  right: 35px;
  color: #f1f1f1;
  font-size: 40px;
  font-weight: bold;
  transition: 0.3s;
}

.close:hover,
.close:focus {
  color: #bbb;
  text-decoration: none;
  cursor: pointer;
}

/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 700px){
  .modal-content { width: 100%; margin-top:30px; }
.close { top: 65px; right: 10px;}
}
</style>

<?php 
$pics = [
    '1-dohari.jpg' => 'Live Dohari Saaj at the Grand Opening on August 16, 2025' , 
    '2-grand.jpg' => '15% OFF Grand Opening Exclusive on August 16, 2025', 
    '3-off.jpg' => 'Grand Opening 15% OFF valid until September 15, 2025', 
    '4-saigrace.jpg' => 'Canada Tour with Saigrace at Namaste Pavilion Restaurant on Sept 12, 2025', 
];
?>
<div class="row pt-4 pb-4 container d-flex align-items-center">
<?php 
$i=1;
$total=count($pics);
foreach ($pics as $pkey => $pval){
?>
  <div class="col p-2">
<img class="s_img" src="img/events/<?php echo $pkey; ?>" alt="<?php echo $pval; ?>" title="<?php echo $pval; ?>" width="350px" style="min-width:350px;">
<p><?php echo $pval; ?></p>
</div>
<?php
$i++;
}
?>
</div>
<!-- The Modal -->
<div id="myModal" class="modal">
  <span class="close">&times;</span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div>

<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the image and insert it inside the modal - use its "alt" text as a caption
var images = document.getElementsByClassName("s_img");
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");

 Array.from(images).forEach(function(img) {
    img.addEventListener('click', function() {
		modal.style.display = "block";
		modalImg.src = this.src;
		captionText.innerHTML = this.alt;
	});
});
 
// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
  modal.style.display = "none";
}
</script>
</div>
<?php include_once('footer.php'); ?>