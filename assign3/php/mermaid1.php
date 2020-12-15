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
					<img class="product_image" src="images/mermaid1.jpg" alt="4644 PNINA TORNAI"/>  
					<!-- This information is taken from https://www.kleinfeldbridal.com/product/pnina-tornai-dramatic-strapless-lace-mermaid-wedding-dress-4644/-->
				</div>

				<div id="full_image" class="modal" onclick="closeLightbox()">
				<span class="close" onclick="closeLightbox()">&#9747;</span>
				<div class="modal-content">
				
					<div class="big_image">
					<img src="images/mermaid1.jpg" alt="4644 PNINA TORNAI"/>
					</div>

				</div>
				</div>

                <div class="catalog" id="effect">
                    <section class="gallery">
                    <figure class="gallery_item thumbnail">
                        <img class="gallery_image" src="images/mermaid1.jpg" alt="4644 PNINA TORNAI" onclick="currentSlide(1)" />
                        
                    </figure> 

                    </section>
                </div>
        </div>
              

	</section>
	<section class="box1">	
		<h2 class="name">4644 PNINA TORNAI</h2>
		<p class="price">RM650/day</p>
		<p class="book"><a href="enquiry.php" target="_blank" onclick="validateClick()">Enquire Now</a></p>
		
			<h3>Details</h3>
				<ul class="cnt">
							<li><strong>Fabrics:</strong> Mermaid</li>
							<li><strong>Detail Options:</strong> Dramatic Strapless lace</li>
							<li><strong>Back:</strong> Strapless sweetheart neckline</li>
				</ul>
			<h3>Description</h3>
			<p>The mermaid silhouette is fitted in the natural waist, hips, and thighs. The mermaid style is the sexiest silhouette. It will show off your curves in a fitted, body-hugging dress that subtly flares out below the knee.</p>
			<h3>Designer Notes</h3>
			<p> Pnina Tornai, exclusive designer for Kleinfeld, is a leading international bridal and eveningwear designer. Pnina Tornai’s collection features her signature corset design. Inspired by the construction of original ancient corsets
      </p>				
		</section>
</div>
	</main>
<?php
include('include/footer.php');
?>
    </body>
</html>
