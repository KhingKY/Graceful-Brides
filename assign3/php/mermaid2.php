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
					<img class="product_image" src="images/mermaid2.jpg" alt="ENOL Pronovias"/>  
					<!-- This information is taken from https://www.kleinfeldbridal.com/product/pronovias-bateau-neck-sleeveless-illusion-lace-back-mermaid-wedding-dress-enol/-->
				</div>
				
				<div class="product_item" onclick="openLightbox();showImage()" title="Click to zoom in">
					<img class="product_image" src="images/mermaid2a.jpg" alt="ENOL Pronovias"/>  
					<!-- This information is taken from https://www.kleinfeldbridal.com/product/pronovias-bateau-neck-sleeveless-illusion-lace-back-mermaid-wedding-dress-enol/-->
				</div>
		
				<a class="prev" onclick="plusSlides(-1)">❮</a>
				<a class="next" onclick="plusSlides(1)">❯</a>
				
				<div id="full_image" class="modal" onclick="closeLightbox()">
				<span class="close" onclick="closeLightbox()">&#9747;</span>
				<div class="modal-content">
				
					<div class="big_image">
					<img src="images/mermaid2.jpg" alt="ENOL Pronovias"/>
					</div>
				
					<div class="big_image">
					<img src="images/mermaid2a.jpg" alt="ENOL Pronovias"/>
					</div>
				
				</div>
				</div>

                <div class="catalog" id="effect">
                    <section class="gallery">
                    <figure class="gallery_item thumbnail">
                        <img class="gallery_image" src="images/mermaid2.jpg" alt="ENOL Pronovias" onclick="currentSlide(1)" />
                        
                    </figure> 
                    
                    
                    <figure class="gallery_item thumbnail">
                    <img class="gallery_image" src="images/mermaid2a.jpg" alt="ENOL Pronovias" onclick="currentSlide(2)" />
                    
                    </figure>
                    
                    </section>
                </div>
        </div>
              

	</section>
	<section class="box1">	
		<h2 class="name">ENOL Pronovias</h2>
		<p class="price">RM650/day</p>
		<p class="book"><a href="enquiry.php" target="_blank" onclick="validateClick()">Enquire Now</a></p>
		
			<h3>Details</h3>
				<ul class="cnt">
							<li><strong>Fabrics:</strong> Mermaid</li>
							<li><strong>Detail Options:</strong>Bateau neck sleeveless illusion lace back</li>
							<li><strong>Back:</strong> Zip-up with an illusion back in crystal tulle</li>
				</ul>
			<h3>Description</h3>
			<p>In a game of perspectives, this dress contrasts points of view to create a dress that combines crepe and the most sophisticated lines, like the natural waist mermaid skirt and the bateau neckline, with an illusion back in crystal tulle with thread-embroidered and beaded floral appliqués. The same thread and beaded appliqués flow over the hips and also appear on the train.</p>
			<h3>Designer Notes</h3>
			<p> Based in Barcelona, PRONOVIAS GROUP is the global leader in bridalwear and has dressed brides in more than 105 countries for over 50 years. In 1964, the company presented its first prêt-a-porter wedding collection. Today, the company’s glamorous bridal dresses are distributed through more than 60 Pronovias stores 
      </p>				
		</section>
</div>
	</main>
<?php
include('include/footer.php');
?>
    </body>
</html>
