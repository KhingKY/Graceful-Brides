<!--Description: Swinburne Creating Web Applications Assignment 1-Product page-->
<!--Author: Elaine-->
<!--Date:1/4/2019-->
<!--Validated: 6/4/2019 OK -->
<?php
include('include/header.php');
?>

<body>

<?php
include('include/menu.php');
include('include/aline.php');
?>

<main>
<div class="product_details">
	<section class="product_showcase">
        <div class="container">

        <div class="product_item" onclick="openLightbox();showImage()" title="Click to zoom in">
          <img class="product_image" src="images/Aline6.jpg" alt="Lace offshoulder"/>  
          <!-- This information is taken from https://www.essensedesigns.com/martina-liana/wedding-dresses/1015/-->
        </div>
        
        <div class="product_item" onclick="openLightbox();showImage()" title="Click to zoom in">
          <img class="product_image" src="images/Aline6a.jpg" alt="Lace offshoulder"/>  
          <!-- This information is taken from https://www.essensedesigns.com/martina-liana/wedding-dresses/1015/-->
        </div>
    
        <a class="prev" onclick="plusSlides(-1)">❮</a>
				<a class="next" onclick="plusSlides(1)">❯</a>
				
				<div id="full_image" class="modal" onclick="closeLightbox()">
				<span class="close" onclick="closeLightbox()">&#9747;</span>
				<div class="modal-content">
				
					<div class="big_image">
					<img src="images/Aline6.jpg" alt="Lace offshoulder"/>
					</div>
				
					<div class="big_image">
					<img src="images/Aline6a.jpg" alt="Lace offshoulder"/>
					</div>
				
				</div>
				</div>

        <div class="catalog" id="effect">
            <section class="gallery">
            <figure class="gallery_item thumbnail">
                <img class="gallery_image" src="images/Aline6.jpg" alt="Lace offshoulder" onclick="currentSlide(1)" />
                
            </figure> 
            
            
            <figure class="gallery_item thumbnail">
            <img class="gallery_image" src="images/Aline6a.jpg" alt="Lace offshoulder" onclick="currentSlide(2)" />
            
            </figure>
            
            </section>
        </div>
        </div>
              

	</section>

	<section class="box1">	
		<h2 class="name">A Line 720159- Nash V-Neck Lace</h2>
		<p class="price">RM650/day</p>
		<p class="book"><a href="enquiry.php" target="_blank" onclick="validateClick()">Enquire Now</a></p>
		
			<h3>Details</h3>
				<ul class="cnt">
							<li><strong>Fabrics:</strong> polyster(bodice), nylon(skirt)</li>
							<li><strong>Detail Options:</strong> Lined</li>
							<li><strong>Back:</strong> zip - back only</li>
				</ul>
			<h3>Description</h3>
			<p>A sleeveless wedding dress with some lace combined with A-line skirt with train. Lace desig
			extends from bodice to the lower part of the waist which follows the a-line design of the skirt.
			The waist had designed as flexible to suite the waist of brides. This wedding dress made in the USA
			with the imported fabric rarely to use that kind of fabric as it cost higher than others fabric.
			The backless design of the wedding dress creates a romantic sense to brides and elongthen the bodice portions
			of them. The brides become the focus point in their big days.</p>
			<h3>Designer Notes</h3>
			<p>HAYLEY PAIGE is a company of bridal design which aim to pinnacle dress wear for bridal.
			Memaid design is the most popular of HAYLEY PAIGE with dreamy fabrics and romantic silhouettes.
			The company wish to make every brides feel glamorous in their wedding days.</p>			
		</section>
</div>
	</main>
		<!--https://shop.nordstrom.com/s/hayley-paige-nash-v-neck-lace-wedding-dress/5157756?origin=category-personalizedsort&breadcrumb=Home%2FWomen%2FThe%20Wedding%20Suite%2FWedding%20Dresses&color=ivory-->
    

<?php
include('include/footer.php');
?>

</body>
</html>