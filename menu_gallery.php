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
    '1' => 'Steam Momo' , 
    '2' => 'Classic Indian Comfort', 
    '4' => 'Aloo Gobi', 
    '5' => 'Dragon Chicken', 
    '6' => 'Sizzler Central',
    '7' => 'Crispy Spicy Addictive',
    '8' => 'Straight from the Tandoor', 
    '9' => 'Nepalese, Indian, and Hakka cuisines',
//    '10' => 'Feel the Sizzle'
];
?>
<div class="row pt-4 pb-4 container d-flex align-items-center">
<?php 
$i=1;
$total=count($pics);
foreach ($pics as $pkey => $pval){
?>
  <div class="col p-2">

<img class="s_img" src="img/menu/mp-<?php echo $pkey; ?>.jpg" alt="<?php echo $pval; ?>" title="<?php echo $pval; ?>" width="150px" style="min-width:150px;">
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