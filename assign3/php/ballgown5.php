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
					<img class="product_image" src="images/ballgown5.jpg" alt="Ballgown Kylo"/>  
					<!-- This information is taken from https://www.jlmcouture.com/hayley-paige/bridal/spring/2019/style-6912-->
                </div>
                
                <div class="product_item" onclick="openLightbox();showImage()" title="Click to zoom in">
					<img class="product_image" src="images/ballgown5a.jpg" alt="Ballgown Kylo2"/>  
					<!-- This information is taken from https://www.jlmcouture.com/hayley-paige/bridal/spring/2019/style-6912-->
                </div>
            
                <a class="prev" onclick="plusSlides(-1)">❮</a>
				<a class="next" onclick="plusSlides(1)">❯</a>
				
				<div id="full_image" class="modal" onclick="closeLightbox()">
				<span class="close" onclick="closeLightbox()">&#9747;</span>
				<div class="modal-content">
				
					<div class="big_image">
					<img src="images/ballgown5.jpg" alt="Ballgown Kylo"/>
					</div>
				
					<div class="big_image">
					<img src="images/ballgown5a.jpg" alt="Ballgown Kylo"/>
					</div>
				
				</div>
				</div>

                <div class="catalog" id="effect">
                    <section class="gallery">
                    <figure class="gallery_item thumbnail">
                        <img class="gallery_image" src="images/ballgown5.jpg" alt="Ballgown Kylo" onclick="currentSlide(1)" />
                        
                    </figure> 
                    
                    
                    <figure class="gallery_item thumbnail">
                    <img class="gallery_image" src="images/ballgown5a.jpg" alt="Ballgown Kylo" onclick="currentSlide(2)" />
                    
                    </figure>
                    
                    </section>
                </div>
        </div>
              

	</section>

	<section class="box1">	
		<h2 class="name">#654912 KYLO</h2>
		<p class="price">RM600/day</p>
		<p class="book"><a href="enquiry.php" target="_blank" onclick="validateClick()">Enquire Now</a></p>
			<h3>Details</h3>
				<ul class="cnt">
							<li><strong>Fabric:</strong> Sheer, Organza, Tulle</li>
							<li><strong>Size Options:</strong> 2-24</li>
							<li><strong>Colors:</strong>Eggshell white, Ivory, White</li>
				</ul>
			<h3>Description</h3>
            <p>A bridal gown that resonates grace and luxury is all that this gown brings and more! This ballgown can be described as something that is far away from modest. This gown is a high neck ball gown with embroidery all round.  Although not much revealing at the front, it will still definitely be the limelight of the show. The sweetheart lining overlaid by an embroidered modern halter neckline creates a great exquisite look with a tint of sexiness. An open back with strap accents is always a great approach for a wedding. The multi-tiered skirt with the first tier being of embroidery and the rest as tulle with organza banded trim adds a whole other tier of flavour to the overall luxury look.</p>
            
			<h3>Designer Notes</h3>
			<p>The reason why Bobby La Francisco, the designer of this dress, decided to name this dress as Kylo is because of brings great meaning to the dress. The name Kylo bears a meaning of sky and just like the sky, the dress is just like the clouds floating freely in the sky. The intricacy of the embroidery depicts the well defined and yet random shapes and sizes the cloud could make and the tulle represents the fuzzy softness of some clouds.</p>				
		
	</section>
</div>
	</main>
	
<?php
include('include/footer.php');
?>

    </body>
</html>