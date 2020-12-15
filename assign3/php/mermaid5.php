<!--Description: Swinburne Creating Web Applications Assignment 1-Profile page-->
<!--Author: Jasmin Chu Ze Kee,Chan Kwang Yung-->
<!--Date:02/04/2019-->
<!--Validated: 6/4/2019 OK -->
<?php
include('include/header.php')
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
					<img class="product_image" src="images/mermaid5.jpg" alt="Estilo Pronovias"/>  
					<!-- This information is taken from https://www.kleinfeldbridal.com/product/pronovias-v-neck-sleeveless-mermaid-wedding-dress-estilo/-->
				</div>
				
				<div class="product_item" onclick="openLightbox();showImage()" title="Click to zoom in">
					<img class="product_image" src="images/mermaid5a.jpg" alt="Estilo Pronovias"/>  
					<!-- This information is taken from https://www.kleinfeldbridal.com/product/pronovias-v-neck-sleeveless-mermaid-wedding-dress-estilo/-->
				</div>
		
				<a class="prev" onclick="plusSlides(-1)">❮</a>
				<a class="next" onclick="plusSlides(1)">❯</a>
				
				<div id="full_image" class="modal" onclick="closeLightbox()">
				<span class="close" onclick="closeLightbox()">&#9747;</span>
				<div class="modal-content">
				
					<div class="big_image">
					<img src="images/mermaid5.jpg" alt="Estilo Pronovias"/>
					</div>
				
					<div class="big_image">
					<img src="images/mermaid5a.jpg" alt="Estilo Pronovias"/>
					</div>
				
				</div>
				</div>

                <div class="catalog" id="effect">
                    <section class="gallery">
                    <figure class="gallery_item thumbnail">
                        <img class="gallery_image" src="images/mermaid5.jpg" alt="Estilo Pronovias" onclick="currentSlide(1)" />
                        
                    </figure> 
                    
                    
                    <figure class="gallery_item thumbnail">
                    <img class="gallery_image" src="images/mermaid5a.jpg" alt="Estilo Pronovias" onclick="currentSlide(2)" />
                    
                    </figure>
                    
                    </section>
                </div>
        </div>
              

	</section>
	<section class="box1">	
		<h2 class="name">Estilo Pronovias</h2>
		<p class="price">RM650/day</p>
		<p class="book"><a href="enquiry.php" target="_blank" onclick="validateClick()">Enquire Now</a></p>
		
			<h3>Details</h3>
				<ul class="cnt">
							<li><strong>Fabrics:</strong> Mermaid</li>
							<li><strong>Detail Options:</strong> V-Neck Sleeveless </li>
							<li><strong>Back:</strong>V-back with a Chantilly inset and line of buttons down the center</li>
				</ul>
			<h3>Description</h3>
			<p>The silhouette is the source of the inspiration for this sensational mermaid dress with a natural waist crafted in crepe. A beautiful design that plays with the elegant drape of the fabric to streamline contours and forms. And, the bodice plays up the suggestiveness of the bust with a sensual V-neckline that plunges thanks to the invisible effect of crystal tulle. The spectacular open armholes, with tulle and Chantilly appliqués, play with sheer effects and floral motifs. As does the V-back with a Chantilly inset and line of buttons down the center.</p>
			<h3>Designer Notes</h3>
			<p>Based in Barcelona, PRONOVIAS GROUP is the global leader in bridalwear and has dressed brides in more than 105 countries for over 50 years. In 1964, the company presented its first prêt-a-porter wedding collection. Today, the company’s glamorous bridal dresses are distributed through more than 60 Pronovias stores 
      </p>				
		</section>
</div>
	</main>
<?php
include('include/footer.php')
?>
    </body>
</html>
