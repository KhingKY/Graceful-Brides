<!--Description: Swinburne Creating Web Applications Assignment 1-Profile page-->
<!--Author: Jasmin Chu Ze Kee,Chan Kwang Yung-->
<!--Date:02/04/2019-->
<!--Validated: 6/4/2019 OK -->
<?php
include('include/header.php');
?>

<body>

<?php
include('include/menu.php');
include('include/mermaid.php');
?>

<main>
<div class="product_details">
	<section class="product_showcase">
        <div class="container">

				<div class="product_item" onclick="openLightbox();showImage()" title="Click to zoom in">
					<img class="product_image" src="images/mermaid6.jpg" alt="113162XS Danielle Caprese"/>  
					<!-- This information is taken from https://www.kleinfeldbridal.com/product/danielle-caprese-strapless-lace-mermaid-wedding-dress-113162xs/-->
				</div>

				<div id="full_image" class="modal" onclick="closeLightbox()">
				<span class="close" onclick="closeLightbox()">&#9747;</span>
				<div class="modal-content">
				
					<div class="big_image">
					<img src="images/mermaid6.jpg" alt="113162XS Danielle Caprese"/>
					</div>

				</div>
				</div>

				<div class="catalog" id="effect">
						<section class="gallery">
						<figure class="gallery_item thumbnail">
								<img class="gallery_image" src="images/mermaid6.jpg" alt="113162XS Danielle Caprese" onclick="currentSlide(1)" />
								
						</figure> 

						</section>
				</div>
        </div>
              

	</section>
	<section class="box1">	
		<h2 class="name">113162XS Danielle Caprese</h2>
		<p class="price">RM650/day</p>
		<p class="book"><a href="enquiry.php" target="_blank" onclick="validateClick()">Enquire Now</a></p>
		
			<h3>Details</h3>
				<ul class="cnt">
							<li><strong>Fabrics:</strong> Mermaid</li>
							<li><strong>Detail Options:</strong> Strapless Lace mermaid wedding dress </li>
							<li><strong>Back:</strong>Zip-up style</li>
				</ul>
			<h3>Description</h3>
			<p>Sweetheart strapless beaded and embroidered mermaid wedding dress with beaded and embroidered tulle skirt and sweep train.</p>
			<h3>Designer Notes</h3>
			<p>Dennis Basso is one of the world’s leading fur and ready-to-wear designers. He is an exclusive Kleinfeld designer. He founded his company in 1983 and his designs have been worn by some of the world’s most influential women, including Nicole Kidman 
      </p>				
		</section>
</div>
	</main>
<?php
include('include/footer.php');
?>
    </body>
</html>
