<!--Description: Swinburne Creating Web Applications Assignment 1-Product details page-->
<!--Author:  Maxine-->
<!--Date:1/4/2019-->
<!--Validated: 6/4/2019 -->
<?php
include('include/header.php');
?>

<body>

<?php
include('include/menu.php');
include('include/lace.php');
?>
		<main>
		<div class="product_details">
		<section class="product_showcase">
        <div class="container">

                <div class="product_item" onclick="openLightbox();showImage()" title="Click to zoom in">
					<img class="product_image" src="images/lace5.jpg" alt="Lace classic" />	
					<!-- This information is taken from https://www.essensedesigns.com/martina-liana/wedding-dresses/992/ -->
                </div>
                
                <div class="product_item" onclick="openLightbox();showImage()" title="Click to zoom in">
					<img class="product_image" src="images/lace5a.jpg" alt="Lace classic" />	
					<!-- This information is taken from https://www.essensedesigns.com/martina-liana/wedding-dresses/992/ -->
                </div>
            
                <a class="prev" onclick="plusSlides(-1)">❮</a>
				<a class="next" onclick="plusSlides(1)">❯</a>
				
				<div id="full_image" class="modal" onclick="closeLightbox()">
				<span class="close" onclick="closeLightbox()">&#9747;</span>
				<div class="modal-content">
				
					<div class="big_image">
					<img src="images/lace5.jpg" alt="Lace classic"/>
					</div>
				
					<div class="big_image">
					<img src="images/lace5a.jpg" alt="Lace classic"/>
					</div>
				
				</div>
				</div>

                <div class="catalog" id="effect">
                    <section class="gallery">
                    <figure class="gallery_item thumbnail">
                        <img class="gallery_image" src="images/lace5.jpg" alt="Lace classic" onclick="currentSlide(1)" />
                        
                    </figure> 
                    
                    
                    <figure class="gallery_item thumbnail">
                    <img class="gallery_image" src="images/lace5a.jpg" alt="Lace classic" onclick="currentSlide(2)" />
                    
                    </figure>
                    
                    </section>
                </div>
        </div>
              

	</section>	
		<section class="box1">
		<h2 class="name">Classic Lace Wedding Gown</h2>
		<p class="price">RM650/month</p>
		<p class="book"><a href="enquiry.php" target="_blank" onclick="validateClick()">Enquire Now</a></p>	
		
           <h3>Details</h3>
				<ul class="cnt">
			
					<li><strong>Fabrics:</strong> Lace &amp; Tulle over Matte-Side Lustre Satin</li>
					<li><strong>Detail Options:</strong> Ivory beading, White Beading </li>
					<li><strong>Back:</strong> Zip Up with Fabric Buttons</li>
				</ul>
	
			<h3>Description</h3>
			<p>A classic lace design, this fit-and-flare gown from Martina Liana brings the sexiness with its open back. A sweetheart neckline, highlighted with sheer peek-a-boo detailing, is accented on either side with sexy shoestring straps. Soft lace adorns the fitted bodice of this gown, spacing out slightly on the flared skirt, and finished with a full lace hem. Floating straps accentuate the completely open back of this style, while a dramatic lace train completes the look. The back of this backless wedding dress zips up beneath fabric-covered buttons.</p>
	
			<h3>Designer Notes</h3>
			<p>The Martina Liana Bridal Collection is the embodiment of exquisite couture wedding dress design. Each dress is a perfect choice for the bride who wants to radiates confidence, global glamour, and impeccable style on her wedding day.
            </p>
			
			</section>
			</div>
		</main>

<?php
include('include/footer.php');
?>
    </body>
</html>