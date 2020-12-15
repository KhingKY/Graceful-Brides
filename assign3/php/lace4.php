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
					<img class="product_image" src= "images/lace4.jpg" alt="Lace modest" />
					<!-- This information is taken from https://www.essensedesigns.com/martina-liana/wedding-dresses/calais-shiloh-jace/-->	
                </div>
                
                <div class="product_item" onclick="openLightbox();showImage()" title="Click to zoom in">
					<img class="product_image" src= "images/lace4a.jpg" alt="Lace modest" />
					<!-- This information is taken from https://www.essensedesigns.com/martina-liana/wedding-dresses/calais-shiloh-jace/-->	
                </div>
            
                <a class="prev" onclick="plusSlides(-1)">❮</a>
				<a class="next" onclick="plusSlides(1)">❯</a>
				
				<div id="full_image" class="modal" onclick="closeLightbox()">
				<span class="close" onclick="closeLightbox()">&#9747;</span>
				<div class="modal-content">
				
					<div class="big_image">
					<img src= "images/lace4.jpg" alt="Lace modest"/>
					</div>
				
					<div class="big_image">
					<img src= "images/lace4a.jpg" alt="Lace modest"/>
					</div>
				
				</div>
				</div>

                <div class="catalog" id="effect">
                    <section class="gallery">
                    <figure class="gallery_item thumbnail">
                        <img class="gallery_image" src= "images/lace4.jpg" alt="Lace modest" onclick="currentSlide(1)" />
                        
                    </figure> 
                    
                    
                    <figure class="gallery_item thumbnail">
                    <img class="gallery_image" src= "images/lace4a.jpg" alt="Lace modest" onclick="currentSlide(2)" />
                    
                    </figure>
                    
                    </section>
                </div>
        </div>
              

	</section>
		
		<section class="box1">
		          <h2 class="name">Modest Illusion Lace Wedding Dress Separates</h2>
		          <p class="price">RM650/month</p>
	                  <p class="book"><a href="enquiry.php" target="_blank" onclick="validateClick()">Enquire Now</a></p>
			
			<h3>Details</h3>
				<ul class="cnt">
				
							<li><strong>Fabrics:</strong> Lace and Parisian Silk Chiffon</li>
							<li><strong>Detail Options:</strong> No Beading </li>
							<li><strong>Back:</strong> Zip Up Only</li>
						</ul>
			
			<h3>Description</h3>
			<p>Modest, illusion lace and silky Parisian chiffon come together to create the dreamy Calais Corset, Shiloh Skirt and Jude Jacket combination from the Martina Liana separates collection. </p>
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