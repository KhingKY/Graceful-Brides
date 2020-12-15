<!--Description: Swinburne Creating Web Applications Assignment 1-Peoduct detail page-->
<!--Author:  Chan Kwang Yung-->
<!--Date:1/4/2019-->
<!--Validated: 6/4/2019 -->
<?php
include('include/header.php');
?>

<body>

<?php
include('include/menu.php');
include('include/ballgown.php');
?>

<main>
<div class="product_details">
	<section class="product_showcase">
        <div class="container">

                <div class="product_item" onclick="openLightbox();showImage()" title="Click to zoom in">
					<img class="product_image" src="images/ballgown6.jpg" alt="Ballgown Andi"/>  
					<!-- This information is taken from https://www.jlmcouture.com/hayley-paige/bridal/spring/2018/style-6800-->
                </div>
                
                <div class="product_item" onclick="openLightbox();showImage()" title="Click to zoom in">
					<img class="product_image" src="images/ballgown6a.jpg" alt="Ballgown Andi"/>  
					<!-- This information is taken from https://www.jlmcouture.com/hayley-paige/bridal/spring/2018/style-6800-->
                </div>
            
                <a class="prev" onclick="plusSlides(-1)">❮</a>
				<a class="next" onclick="plusSlides(1)">❯</a>
				
				<div id="full_image" class="modal" onclick="closeLightbox()">
				<span class="close" onclick="closeLightbox()">&#9747;</span>
				<div class="modal-content">
				
					<div class="big_image">
					<img src="images/ballgown6.jpg" alt="Ballgown Andi"/>
					</div>
				
					<div class="big_image">
					<img src="images/ballgown6a.jpg" alt="Ballgown Andi"/>
					</div>
				
				</div>
				</div>

                <div class="catalog" id="effect">
                    <section class="gallery">
                    <figure class="gallery_item thumbnail">
                        <img class="gallery_image" src="images/ballgown6.jpg" alt="Ballgown Andi" onclick="currentSlide(1)" />
                        
                    </figure> 
                    
                    
                    <figure class="gallery_item thumbnail">
                    <img class="gallery_image" src="images/ballgown6a.jpg" alt="Ballgown Andi" onclick="currentSlide(2)" />
                    
                    </figure>
                    
                    </section>
                </div>
        </div>
              

	</section>

	<section class="box1">	
		<h2 class="name">#6800 ANDI</h2>
		<p class="price">RM400/day</p>
		<p class="book"><a href="enquiry.php" target="_blank" onclick="validateClick()">Enquire Now</a></p>
			<h3>Details</h3>
				<ul class="cnt">
							<li><strong>Fabric:</strong> Sheer, Organza, Tulle</li>
							<li><strong>Size Options:</strong> 2-24</li>
							<li><strong>Colors:</strong>Snow, Ivory, White</li>
				</ul>
			<h3>Description</h3>
            <p>If you are a minimalistic and humble person and a plain ball gown will satisfy you, then this is the perfect one for you. This dress brings a very clean and tidy look to the bride with minimal detailing but soothing to the eyes. This is a tulle bridal gown with spaghetti strap bodice with a very deep sweetheart neckline ranging to the top of the abdomen. It also features an ivory net side cut out, exposing more of the sides as well. The skirt features a multi-tier cascading banded tulle with a small chapel train at the back.</p>
            
			<h3>Designer Notes</h3>
			<p>This dress highlights the simpler and minimalistic aspects of life. Not all brides have to be sparkly and flashy, some just want to feel peace and happiness during the big day.  Even though this dress is said to be simple, it still brings out the beauty of it.  The designer, Bobby La Francisco acquired the inspiration for this dress during his vacation period in Interlaken, Switzerland. He said that the simple life of the local residents had given him a new perspective in life away from all the hustle and bustle of the city, to live simpler and not to overcomplicate everything.</p>				
		
	</section>
</div>
	</main>

<?php
include('include/footer.php');
?>

    </body>
</html>