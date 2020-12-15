<!--Description: Swinburne Creating Web Applications Assignment 1-Index-->
<!--Author: Maxine, Chan Kwang Yung-->
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
					<img class="product_image" src="images/lace2.jpg" alt="Lace offshoulder"/>  
					<!-- This information is taken from https://www.essensedesigns.com/stella-york/wedding-dresses/6569/-->
                </div>
                
                <div class="product_item" onclick="openLightbox();showImage()" title="Click to zoom in">
					<img class="product_image" src="images/lace2a.jpg" alt="Lace offshoulder"/>  
					<!-- This information is taken from https://www.essensedesigns.com/stella-york/wedding-dresses/6569/-->
                </div>
            
                <a class="prev" onclick="plusSlides(-1)">❮</a>
				<a class="next" onclick="plusSlides(1)">❯</a>
				
				<div id="full_image" class="modal" onclick="closeLightbox()">
				<span class="close" onclick="closeLightbox()">&#9747;</span>
				<div class="modal-content">
				
					<div class="big_image">
					<img src="images/lace2.jpg" alt="Lace offshoulder"/>
					</div>
				
					<div class="big_image">
					<img src="images/lace2a.jpg" alt="Lace offshoulder"/>
					</div>
				
				</div>
				</div>

                <div class="catalog" id="effect">
                    <section class="gallery">
                    <figure class="gallery_item thumbnail">
                        <img class="gallery_image" src="images/lace2.jpg" alt="Lace offshoulder" onclick="currentSlide(1)" />
                        
                    </figure> 
                    
                    
                    <figure class="gallery_item thumbnail">
                    <img class="gallery_image" src="images/lace2a.jpg" alt="Lace offshoulder" onclick="currentSlide(2)" />
                    
                    </figure>
                    
                    </section>
                </div>
        </div>
              

	</section>

	<section class="box1">	
		<h2 class="name">Princess Wedding Dress with Off-The-Shoulder Sleeves</h2>
		<p class="price">RM680/month</p>
		<p class="book"><a href="enquiry.php" target="_blank" onclick="validateClick()">Enquire Now</a></p>
		
			<h3>Details</h3>
				<ul class="cnt">
						<li><strong>Fabrics:</strong> Lace &amp; Tulle </li>
						<li><strong>Detail Options:</strong> Diamante Beading </li>
						<li><strong>Back:</strong> Zip Up with Fabric Buttons</li>
				</ul>
			<h3>Description</h3>
			<p>Sheer, lace off-the-shoulder sleeves give this romantic, princess-style wedding dress a unique, boho feeling. Wedding dress designer Stella York has created a stunning silhouette in lace and tulle that pops with shimmering beadwork. Placed lace is designed in a V-pattern across the waist, drawing it inward to slim the bride’s figure. Linear beading gives off an element of modernity to the floral lace, while the scalloped lace hem of the skirt matches that of the sleeves. An open back draws attention to the long cathedral length train, which is finished in scalloped lace. The back of this wedding dress zips under the fabric and is also available in plus sizes.</p>
			<h3>Designer Notes</h3>
			<p>The Stella York Bridal Collection brings together dramatic elegance and Australian-inspired sophistication to create a remarkable look that is unsurpassed in wedding dress design. Wearing a Stella York designer wedding dress, a bride will truly be the star of her wedding day.

			Inspired by the world’s hottest red carpet trends, Stella York bridal gowns are imagined and crafted with exceptional detail. Each dress is constructed to provide a fit that will give the body a perfect form - all at a competitive price.	
      </p>				
		</section>
</div>
	</main>

<?php
include('include/footer.php');
?>
    </body>
</html>