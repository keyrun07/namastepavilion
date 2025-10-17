<?php 
$events = [
    //'1-dohari.jpg' => 'Live Dohari Saaj at the Grand Opening on August 16, 2025' , 
    //'2-grand.jpg' => '15% OFF Grand Opening Exclusive on August 16, 2025', 
    //'3-off.jpg' => 'Grand Opening 15% OFF valid until September 15, 2025', 
    //'4-saigrace.jpg' => 'Canada Tour with Saigrace at Namaste Pavilion Restaurant on Sept 12, 2025', 
    '5-eventa' => [        
        'status'=>'show',
        'date'=>'October 12, 2025',
        'img'=>'5-eventa.jpg',
        'title'=> 'Eventa Rodhi Ghar - Dohori Saajh',
        'desc'=> 'Who needs a playlist when you have the heartbeats of Dohori? Invite your partner in time to join the excitement!  Let\'s keep the spirit of Nepali culture thriving, one Dohori at a time, through karaoke and singing challenges!',
    ],
    '6-ramesh' => [
        'status'=>'show',
        'date'=>'October 17, 2025',
        'img'=>'6-ramesh.jpg',
        'title'=> 'Namaste Friday with Ramesh Raj Bhattrai',
        'desc'=> 'Namaste Friday, featuring performances by RAMESH RAJ BHATTRAI <br /> Booking: E-transfer to namasteg2025@gmail.com <br /> message: Namaste Friday',
    ],
    '7-bhairav' => [        
        'status'=>'show',
        'date'=>'October 18, 2025',
        'img'=>'7-bhairav.jpg',
        'title'=> 'Bhairav Events Tihar Night 2025',
        'desc'=> 'Bhairav Events Tihar Night is here! <br /> After last year SOLD OUT events, we are back by popular demand!<br /><br /> <b>What to expect:</b><br />Deusi-Bhailo<br />Live Music<br />Dance<br />Dj - after party<br />Langur Burja<br />Raffles',
    ],
    '10-baglung' => [
        'status'=>'show',
        'date'=>'October 20, 2025',
        'img'=>'10-baglung.jpg',
        'title'=> 'देउसी भैलो, Baglung Sewa Samaj Canada',
        'desc'=> 'हार्दिक निमन्त्रणा ! २०८२ सालको तिहारको उपलक्ष्यमा संस्थाका संरक्षक, सल्लाहकार, पदाधिकारी, सदस्य, शुभेच्छुक एवम शुभचिन्तक ज्युहरुमा हार्दिक शुभकामना व्यक्त गर्दै यहि अक्टोबर २० गते हुन गैरहेको संस्थाको देउसी भैलोमा सहभागिताको लागी हार्दिक निमन्त्रणा गर्दछौ । समय र स्थान यसै संग संलग्न पोस्टरमा उल्लेख गरेका छौं ।',
    ],
    '8-newa' => [        
        'status'=>'show',
        'date'=>'October 22, 2025',
        'img'=>'8-newa.jpg',
        'title'=> 'Newa Guthi Canada Community Mha Puja 2025',
        'desc'=> 'Join the Newa Guthi Canada community as we celebrate the Mha Puja Ceremony and welcome the New Year 1146 of the Nepal Sambat calendar! <br />This sacred ceremony is a time for purification, well-being, and prosperity. We invite you and your family to partake in this beautiful tradition.',
    ],
    '9-sonec' => [
        'status'=>'show',
        'date'=>'November 1, 2025',
        'img'=>'9-sonec.jpg',
        'title'=> 'Society of Nepalese Engineers in Canada - SONEC',
        'desc'=> ' <b>Invitation to All Nepali Engineering Professionals Across Canada!</b> <br />
Please join SONEC\'s Get-together, Networking & Expert Knowledge Sharing Program,  an unmissable opportunity to connect with fellow engineering professionals, exchange ideas, share knowledge, and inspire professional growth.',
    ],

];
if(isset($_GET['id']) && isset ($events[$_GET['id']])){
    $event = $events[$_GET['id']];
}
if(isset($event)){     
$html_title = $event['title']." | Namaste Pavilion";
}else{
    $html_title = "Events at Namaste Pavilion Restaurant, Scarborough";
}
?>


<?php
include_once('header.php'); ?>
<div class="container container-inner-banner">
<img src="img/inner_banner2.jpg" alt="About Us Banner" class="d-block" style="width:100%">
</div>
<div class="container container-inner-main">

<h1 class="page-h1">
<?php 
if(isset($event)){
echo $event['title'];
}else{
    echo "Events at Namaste Pavilion";
}
?>
</h1>
<style>
<?php 

// .s_img {
//   border-radius: 5px;
//   cursor: pointer;
//   transition: 0.3s;
// }

// .s_img:hover {opacity: 0.7;}

// .modal {
//   display: none;
//   position: fixed;
//   z-index: 200; /* Sit on top */
//   padding-top: 100px;
//   left: 0;
//   top: 0;
//   width: 100%;
//   height: 100%;
//   overflow: auto;
//   background-color: rgb(0,0,0);
//   background-color: rgba(0,0,0,0.9);
// }

// /* Modal Content (image) */
// .modal-content {
//   margin: auto;
//   display: block;
//   width: 80%;
//   max-width: 700px;
// }

// /* Caption of Modal Image */
// #caption {
//   margin: auto;
//   display: block;
//   width: 80%;
//   max-width: 700px;
//   text-align: center;
//   color: #ccc;
//   padding: 10px 0;
//   height: 150px;
// }

// /* Add Animation */
// .modal-content, #caption {  
//   -webkit-animation-name: zoom;
//   -webkit-animation-duration: 0.6s;
//   animation-name: zoom;
//   animation-duration: 0.6s;
// }

// @-webkit-keyframes zoom {
//   from {-webkit-transform:scale(0)} 
//   to {-webkit-transform:scale(1)}
// }

// @keyframes zoom {
//   from {transform:scale(0)} 
//   to {transform:scale(1)}
// }

// /* The Close Button */
// .close {
//   position: absolute;
//   top: 85px;
//   right: 35px;
//   color: #f1f1f1;
//   font-size: 40px;
//   font-weight: bold;
//   transition: 0.3s;
// }

// .close:hover,
// .close:focus {
//   color: #bbb;
//   text-decoration: none;
//   cursor: pointer;
// }

?>
/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 700px){
  .modal-content { width: 100%; margin-top:30px; }
.close { top: 65px; right: 10px;}
}
</style>


<div class="row pt-4 pb-4 container">
<?php
if(isset($event)){
    ?>
<center>
<img class="s_img" src="img/events/<?php echo $event['img']; ?>" alt="<?php echo $event['title']; ?>" title="<?php echo $event['title']; ?>">
<p class="p-3"><?php echo $event['desc']; ?></p>
<br/>
<p class="p-3"><a href="events"><b>View All Events</b></a></p>
</center>
<?php 
}else{
    $i=1;
    $total=count($events);
    foreach ($events as $eKey => $eVal){
        if($eVal['status']=='hide')
            continue;
?>
	<div class="col p-3 d-flex justify-content-center align-items-center border m-1">
		<div class="content pb-4">
			<center>
    			<p><b><?php echo $eVal['date']; ?></b></p>
    			<h2 class='fs-4'><a href='?id=<?php echo $eKey; ?>'><?php echo $eVal['title']; ?></a></h2>
    			<a href='?id=<?php echo $eKey; ?>'><img class="s_img" src="img/events/<?php echo $eVal['img']; ?>" alt="<?php echo $eVal['title']; ?>" title="<?php echo $eVal['title']; ?>" width="350px" style="min-width:350px;"></a>
			</center>
		</div>
	</div>
<?php
    $i++;
    }
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
// var modal = document.getElementById("myModal");

// // Get the image and insert it inside the modal - use its "alt" text as a caption
// var images = document.getElementsByClassName("s_img");
// var modalImg = document.getElementById("img01");
// var captionText = document.getElementById("caption");

//  Array.from(images).forEach(function(img) {
//     img.addEventListener('click', function() {
// 		modal.style.display = "block";
// 		modalImg.src = this.src;
// 		captionText.innerHTML = this.alt;
// 	});
// });
 
// // Get the <span> element that closes the modal
// var span = document.getElementsByClassName("close")[0];

// // When the user clicks on <span> (x), close the modal
// span.onclick = function() { 
//   modal.style.display = "none";
// }
</script>
</div>
<?php include_once('footer.php'); ?>