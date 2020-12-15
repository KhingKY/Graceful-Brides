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
					<img class="product_image" src="images/ballgown2.jpg" alt="Ballgown Gwendolyn"/>  
					<!-- This information is taken from https://moncheribridals.com/wedding-dresses/collections/martin-thornburg/119270-gwendolyn/-->
                </div>
                
                <div class="product_item" onclick="openLightbox();showImage()" title="Click to zoom in">
					<img class="product_image" src="images/ballgown2a.jpg" alt="Ballgown Gwendolyn"/>  
					<!-- This information is taken from https://moncheribridals.com/wedding-dresses/collections/martin-thornburg/119270-gwendolyn/-->
                </div>
            
                <a class="prev" onclick="plusSlides(-1)">❮</a>
				<a class="next" onclick="plusSlides(1)">❯</a>
				
				<div id="full_image" class="modal" onclick="closeLightbox()">
				<span class="close" onclick="closeLightbox()">&#9747;</span>
				<div class="modal-content">
				
					<div class="big_image">
					<img src="images/ballgown2.jpg" alt="Ballgown Gwendolyn"/>
					</div>
				
					<div class="big_image">
					<img src="images/ballgown2a.jpg" alt="Ballgown Gwendolyn"/>
					</div>
				
				</div>
				</div>

                <div class="catalog" id="effect">
                    <section class="gallery">
                    <figure class="gallery_item thumbnail">
                        <img class="gallery_image" src="images/ballgown2.jpg" alt="Ballgown Gwendolyn" onclick="currentSlide(1)" />
                        
                    </figure> 
                    
                    
                    <figure class="gallery_item thumbnail">
                    <img class="gallery_image" src="images/ballgown2a.jpg" alt="Ballgown Gwendolyn" onclick="currentSlide(2)" />
                    
                    </figure>
                    
                    </section>
                </div>
        </div>
              

	</section>

	<section class="box1">	
		<h2 class="name">#119270 Gwendolyn</h2>
		<p class="price">RM550/day</p>
		<p class="book"><a href="enquiry.php" target="_blank" onclick="validateClick()">Enquire Now</a></p>
	
			<h3>Details</h3>
				<ul class="cnt">
							<li><strong>Fabric:</strong> Lace, Sheer, Organza</li>
							<li><strong>Size Options:</strong> 0-20, 18W-26W</li>
							<li><strong>Features:</strong> Separate bodice linings</li>
							<li><strong>Colors:</strong>Light Champagne, Ivory, White</li>
				</ul>
			<h3>Description</h3>
            <p>Want to be that princess in those Disney movies where they dance and twirl in their flamboyant gowns during the ball? Well here is your chance. This dress is a combination of modern looks and a dash of sexy. This gown features a sheer Venise lace bodice detailed with crystals and pearl beadings all over. The top is made of a stunning V-neckline with illusion detail paired up with beaded spaghetti straps, coming down with a natural slimming waist. The back is comprised of a low V-back as well. These will embrace the bride’s sexiness and perfect body shape. The bottom features a spacious multi-level pleated-looking organza skirt with a cathedral train trailing behind you. This paired with the top creates a great balance between a flashy and yet somewhat humble top and a eye-catching skirt.</p>
            
			<h3>Designer Notes</h3>
			<p>The name Gwendolyn is very suiting for this dress as the meaning of the name in Welsh culture meaning fair, blessed and white browed. And just like what the name implies, the dress contains similar characteristics, making the wearer and everyone around her feel the beauty and fairness of the dress as the bride walks in the hall and have all the attention on her.</p>				

	</section>
</div>
	</main>

<?php
include('include/footer.php');
?>

    </body>
</html>