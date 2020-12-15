<!--Description: Swinburne Creating Web Applications Assignment 1-Product details page-->
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
					<img class="product_image"  src="images/ballgown1.jpg" alt="Ballgown Couture"  />
					<!-- This information is taken from http://www.eveofmiladybridals.com/stylescollections/4374.html -->
                </div>
                
                <div class="product_item" onclick="openLightbox();showImage()" title="Click to zoom in">
					<img class="product_image" src="images/ballgown1a.jpg" alt="Ballgown Couture"  />
					<!-- This information is taken from http://www.eveofmiladybridals.com/stylescollections/4374.html -->
                </div>
            
                <a class="prev" onclick="plusSlides(-1)">❮</a>
				<a class="next" onclick="plusSlides(1)">❯</a>
				
				<div id="full_image" class="modal" onclick="closeLightbox()">
				<span class="close" onclick="closeLightbox()">&#9747;</span>
				<div class="modal-content">
				
					<div class="big_image">
					<img src="images/ballgown1.jpg" alt="Ballgown Couture"/>
					</div>
				
					<div class="big_image">
					<img src="images/ballgown1a.jpg" alt="Ballgown Couture"/>
					</div>
				
				</div>
				</div>

                <div class="catalog" id="effect">
                    <section class="gallery">
                    <figure class="gallery_item thumbnail">
                        <img class="gallery_image" src="images/ballgown1.jpg" alt="Ballgown #104374 COUTURE" onclick="currentSlide(1)" />
                        <!-- This information is taken from http://www.eveofmiladybridals.com/stylescollections/4374.html -->
                    </figure> 
                    
                    
                    <figure class="gallery_item thumbnail">
                    <img class="gallery_image" src="images/ballgown1a.jpg" alt="Ballgown #104374 COUTURE" onclick="currentSlide(2)" />
                    <!-- This information is taken from http://www.eveofmiladybridals.com/stylescollections/4374.html -->
                    </figure>
                    
                    </section>
                </div>
        </div>
              

	</section>

	<section class="box1">	
		<h2 class="name">#104374 COUTURE</h2>
		<p class="price">RM650/day</p>
		<p class="book"><a href="enquiry.php" target="_blank" onclick="validateClick()">Enquire Now</a></p>
		
			<h3>Details</h3>
				<ul class="cnt">
							<li><strong>Fabric:</strong> Lace, Sheer</li>
							<li><strong>Size Options:</strong> 2-24</li>
							<li><strong>Features:</strong> Removable Sleeves</li>
							<li><strong>Colors:</strong>White, Ivory</li>
				</ul>
			<h3>Description</h3>
            <p>A ball gown that is fit for a queen. This gown features a classic Victorian design with a pinch of modern style. It contains the characteristics of an A-line dress with detachable sleeves for a wider range of choice. The top part features a strapless sheer three-dimensional bodice and a low back to emphasize your body shape and a matching skirt with sequin underlay to make the dress as sparkly as can be and out-shine the rest. The back of the dress is of an intricate lace chapel train , maximizing details and intricacy as you walk down the aisle with elegance, poise and confidence.</p>
			<h3>Designer Notes</h3>
			<p>This gown is the epitome of exquisite couture wedding dress designs. The lucky ones who wear it will feel a rush of empowerment, confidence and happiness on their special day. The team has spent hours in the process of making this dress into a reality with all the intricate designs it contains. The lead designer &#8212; Paprianka Bonostalava said that a wedding dress is not a wedding dress if the bride is not the star of the show. Therefore, much time and effort is put into this for the sole purpose of making this dress perfect for the bride.
      </p>				

	</section>
</div>
	</main>

<?php
include('include/footer.php');
?>

    </body>
</html>