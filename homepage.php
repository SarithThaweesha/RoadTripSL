<!doctype html>
<html>
<head>
<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet">
<title>RoadTripSL</title>
<style type="text/css">
	html {

  scroll-behavior: smooth;
}
	
body{
		color: black;
		margin: 0;
		background-color: white;
	}
	
	
	
	* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
	
	
.MySlides {
	display: none;
	}
img {vertical-align: middle;}
/* Slideshow container */
.slideshow-container {
  max-width: 3000px;
  position: absolute;top: 14.1%;
  margin: auto;		
}
	/*hovering dots*/
 .dot {
   height: 12px;
   width: 12px;
   margin: 0 2px;
   background-color: #bbb;
   border-radius: 50%;
   display: inline-block;
   transition: background-color 0.6s ease;
}
	/* shadow of texts*/
	 p.Caption Text{  
        text-shadow: 200px 200px #000000;  
      }  
.fadepic {
  -webkit-animation-name:slidefade;
  -webkit-animation-duration: 2s;
  animation-name: slidefade;
  animation-duration: 2s;
}

@-webkit-keyframes slidefade {
  from {opacity: .6} 
  to {opacity: 1}
}

@keyframes slidefade {
  from {opacity: .6} 
  to {opacity: 1}
}
	
/* Caption  */
.text {
    color: #ffffff;
    font-size: 50px;
    padding: 20px 20px;
    position: absolute;
    top: 400px;
    width: 100%;
    text-align: center;
    font-family: allan;
    text-shadow: 0 0 30px #000000;
    font-style: normal;
    font-weight: 800;
}
	.img1{
		position: absolute;
		left: 20%;
	}
	.img2{
		position: absolute;
		left: 55%;
	}



.active {
  background-color: #717171;
}
	@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
	/*footer style*/
	.bottom {
		position:absolute;
		left:0%;
		top:130%;
		background-color:mediumslateblue;
		font-family:alegreya;
		font-weight:500;
		font-size: 20px;
		color: #fffafa;
		height: 300px;
		width:1520px;
	}
	/*paragraps text*/
	.para{
		position:absolute;
		left: 3%;
		font-family: alegreya;
		font-size: 25px;	
		font-weight: 545;
		line-space: 0.7px;
		border: 1px solid white;
		padding: 1px;
		 width: 1450px;
		height: 100px;
		text-align: justify;
		
	}
	.heading{
		position: relative;
	
		font-family: alegreya;
		font-size: 35px;	
		font-weight: 545;
		line-space: 0.7px;
		border: 1px solid white;
		padding: 1px;
		 width: auto;
		height: auto;
		text-align: center;
		
	}
	
	
	
</style>
</head>

<body>
	
	<?php include("navigation.html") ?>
	
	
	<div class="slideshow-container">
		
		
  <div class="MySlides fadepic">
  <div class="numbertext"></div>
  <img src="website pics/lanka.jpg" width="1520" height="580" alt="" align="center"/>
  <div class="text"><b>Travel and experience Sri Lanka's most eye catching and historical sites with us.</b></div>
		</div>
		
  <div class="MySlides fadepic">
  <div class="numbertext"></div>
  <img src="../sri-lanka-top-attractions-yala-national-park.jpg" width="1520" height="580" alt="" align="center"/>
  <div class="text"><b>Register with us and get amazing discounts.</b></div>
		</div>
		
  <div class="MySlides fadepic">
  <div class="numbertext"></div>
  <img src="../Sigiriya-rock-fortress-in-Sri-Lanka.jpg" width="1520" height="580" alt="" align="center"/>
			<div class="text"><b>Log in using register details to see the discounted packages</b></div>
		</div>
		
  <div class="MySlides fadepic">
  <div class="numbertext"></div>
  <img src="website pics/Kandy.jpg" width="1520" height="580" alt="" align="center"/>
		</div>
		
  <div class="MySlides fadepic">
  <div class="numbertext"></div>
  <img src="../ninearch.jpg" width="1520" height="580" alt="" align="center" />
		</div>
		
  <div class="MySlides fadepic">
  <div class="numbertext"></div>
  <img src="website pics/Traditional-Fishermen-in-Sri-Lanka-Sunset-Places-to-Visit-Sri-Lanka.jpg" width="1520" height="580" alt="" align="center"/>
		</div>
		
  <div class="MySlides fadepic">
  <div class="numbertext"></div>
  <img src="website pics/leopards.jpg" width="1520" height="580" alt="" align="center"/>
		</div>
		
	

		<br>
		
  <div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span>
  <span class="dot"></span>
  <span class="dot"></span>
		</div>
		
		<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("MySlides");
  var dots = document.getElementsByClassName("dot") ;
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 5000); //  this Changes image after every 2 seconds
}
</script>
		<br><br>
		<div class="heading">
		<h1>Sri Lanka</h1>
		</div>
	
<div class="para">
	
	
	<p>Sri Lanka, formerly known as Ceylon and officially the Democratic Socialist Republic of Sri Lanka, is an island nation in South Asia. It is located in the Indian Ocean, southwest of the Bay of Bengal and southeast of the Arabian Sea; Today Sri Lanka is a multinational state in which different cultures, languages and ethnicities live. The Sinhalese make up the majority of the country's population. The Tamils, a large minority, have also played an influential role in the island's history.</p>
		
		</div>
		<br><br><br><br><br><br><br><br><br>
	<div class="heading">
		<h1>Biodiversity of Sri Lanka</h1>
		</div>
		<br>
		
	<div class="para">
		<p>Sri Lanka has the highest biodiversity per unit area of any Asian country for flowering plants and all vertebrate groups except birds. A remarkably high proportion of the species in flora and fauna, 27% of the 3,210 flowering plants and 22% of mammals, are endemic. Sri Lanka comprises four terrestrial ecoregions: Sri Lankan lowland rainforests, Sri Lankan mountain rainforests, Sri Lankan dry zones evergreen dry forests, and Deccan thorn bush forests. Yala National Park  protects herds of elephants, deer and peacocks. The Wilpattu National Park which is located in the northwest, the largest national park, preserves the habitats of many water birds such as storks, pelicans, ibis and spoonbills. The island has four biosphere reserves: Bundala, Hurulu Forest Reserve, Kanneliya-Dediyagala-Nakiyadeniya and Sinharaja.</p>
		
		</div>
		
		<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
		
  <div class="img1">
  <div class="numbertext"></div>
  <img src="website pics/yala(1).jpg" width="400" height="300" alt="" align="center" />
	</div>
		
  <div class="img2">
  <div class="numbertext"></div>
  <img src="website pics/yala2.jpg" width="400" height="300" alt="" align="center" />
	</div>
		
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
		
   <div class="heading">
   <h1>Most notable Places you can visit in Sri Lanka</h1>
	</div>
		
		<br>
	<div class="para">
	<p><b>Eastern Province</b>:-This area of the island is well known for it's beautiful coastal area.specially beaches in trincomalee such as <b><i>nilaveli</i></b> and<b><i> marble beach</i></b> are huge tourist attractions.</p>
			
			
	<p><b>Central Province</b>:- Features some of the highlights of Sri Lankan tourism, including the former royal capital of Kandy and the impressive rock fort of <b><i>Sigiriya</i></b>,  Central Province attracts tourists with its amazing historical sites, pleasant climate, and the world famous tea plantations.</p>

    <p><b>Southern Province</b>:- Known for its long stretches of coastline which attracts thousands of local and foreign visitors .southern province is also well known for elephant safari parks and the colonial<b><i> port of Galle</i></b>. Southern Province serves as a memorable addition to any Sri Lanka itinerary.</p>

    <p><b>Western Province</b>:- Densely populated and packed with beach resorts, Sri Lanka's Western Province contains the nation's largest city, but also offers a rich array of religious and cultural attractions.</p>
		
		
		
		</div>
			
<div class="bottom" style="text-align:center">
	<br><br><br>
  <a href="aboutus.php" style="color:#fffafa">About Us</a>
	<br><br>
	<a href="#Partner" style="color:#fffafa">Partner with Us</a><br><br><br>
	<hr width="1000px" align="center"> <br>
	<p> &#169; 2021 ROADTRIP SRI LANKA.   All rights reserved.</p>
    
</div>
</body>
</html>
