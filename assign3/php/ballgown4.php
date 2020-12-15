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
					<img class="product_image" src="images/ballgown4.jpg" alt="Ballgown Rylee"/>  
					<!-- This information is taken from https://moncheribridals.com/wedding-dresses/collections/sophia-tolli/y11958-rylee/-->
                </div>
                
                <div class="product_item" onclick="openLightbox();showImage()" title="Click to zoom in">
					<img class="product_image" src="images/ballgown4a.jpg" alt="Ballgown Rylee"/>  
					<!-- This information is taken from https://moncheribridals.com/wedding-dresses/collections/sophia-tolli/y11958-rylee/-->
                </div>
            
                <a class="prev" onclick="plusSlides(-1)">❮</a>
				<a class="next" onclick="plusSlides(1)">❯</a>
				
				<div id="full_image" class="modal" onclick="closeLightbox()">
				<span class="close" onclick="closeLightbox()">&#9747;</span>
				<div class="modal-content">
				
					<div class="big_image">
					<img src="images/ballgown4.jpg" alt="Ballgown Rylee"/>
					</div>
				
					<div class="big_image">
					<img src="images/ballgown4a.jpg" alt="Ballgown Rylee"/>
					</div>
				
				</div>
				</div>

                <div class="catalog" id="effect">
                    <section class="gallery">
                    <figure class="gallery_item thumbnail">
                        <img class="gallery_image" src="images/ballgown4.jpg" alt="Ballgown Rylee" onclick="currentSlide(1)" />
                        
                    </figure> 
                    
                    
                    <figure class="gallery_item thumbnail">
                    <img class="gallery_image" src="images/ballgown4a.jpg" alt="Ballgown Rylee" onclick="currentSlide(2)" />
                    
                    </figure>
                    
                    </section>
                </div>
        </div>
              

	</section>

	<section class="box1">	
		<h2 class="name">#Y11958 Rylee</h2>
		<p class="price">RM580/day</p>
		<p class="book"><a href="enquiry.php" target="_blank" onclick="validateClick()">Enquire Now</a></p>
		
			<h3>Details</h3>
				<ul class="cnt">
							<li><strong>Fabric:</strong> Sheer</li>
							<li><strong>Size Options:</strong> 2-24</li>
							<li><strong>Features:</strong>Detachable straps</li>
							<li><strong>Colors:</strong>Champagne, Ivory, White</li>
				</ul>
			<h3>Description</h3>
            <p>Looking for a ball gown from a modern-day fairy tale? Well, you are in luck, because Rylee is the one for you. From its flattering top to its stunning skirt, this is the dress for a princess of present date. This dress is a one-piece with a top part of a a strapless sweetheart neckline combo-ed a fine tulle draping that compliments the bust. The back is safely secured with a corset. Going down the dress is where a crystal embedded belt that comes with the dress. The belt serves as a frame around the waist to display a perfect waistline and to differentiate the top part of the dress with the bottom part. The bottom part is simply stunning with multiple asymmetrical layers circling the gown and a gentle finish with light lice appliques with a chapel train to complete the look.</p>
            
			<h3>Designer Notes</h3>
			<p>Ryle is the kind of dress that looks classy and sophisticated but also bears fun elements. This gown is all about the details, having high intricacy in every direction. From afar, it looks like any normal wedding dress, but going up close is where the crystal belt and lace applique can be seen clearly, the true art can be appreciated.</p>				
		
	</section>
</div>
	</main>

<?php
include('include/footer.php');
?>

    </body>
</html>