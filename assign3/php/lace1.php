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
					<img class="product_image" src="images/lace1.jpg" alt="Lace offshoulder"/>  
					<!-- This information is taken from https://www.essensedesigns.com/martina-liana/wedding-dresses/1015/-->
                </div>
                
                <div class="product_item" onclick="openLightbox();showImage()" title="Click to zoom in">
					<img class="product_image" src="images/lace1a.jpg" alt="Lace offshoulder"/>  
					<!-- This information is taken from https://www.essensedesigns.com/martina-liana/wedding-dresses/1015/-->
                </div>
            
                <a class="prev" onclick="plusSlides(-1)">❮</a>
				<a class="next" onclick="plusSlides(1)">❯</a>
				
				<div id="full_image" class="modal" onclick="closeLightbox()">
				<span class="close" onclick="closeLightbox()">&#9747;</span>
				<div class="modal-content">
				
					<div class="big_image">
					<img src="images/lace1.jpg" alt="Lace offshoulder"/>
					</div>
				
					<div class="big_image">
					<img src="images/lace1a.jpg" alt="Lace offshoulder"/>
					</div>
				
				</div>
				</div>

                <div class="catalog" id="effect">
                    <section class="gallery">
                    <figure class="gallery_item thumbnail">
                        <img class="gallery_image" src="images/lace1.jpg" alt="Lace offshoulder" onclick="currentSlide(1)" />
                        
                    </figure> 
                    
                    
                    <figure class="gallery_item thumbnail">
                    <img class="gallery_image" src="images/lace1a.jpg" alt="Lace offshoulder" onclick="currentSlide(2)" />
                    
                    </figure>
                    
                    </section>
                </div>
        </div>
              

	</section>

	<section class="box1">	
		<h2 class="name">Lace Dress with Off-The-Shoulder Sleeves</h2>
		<p class="price">RM650/day</p>
		<p class="book"><a href="enquiry.php" target="_blank" onclick="validateClick()">Enquire Now</a></p>
		
			<h3>Details</h3>
				<ul class="cnt">
							<li><strong>Fabrics:</strong> Lace</li>
							<li><strong>Detail Options:</strong> Clear beading</li>
							<li><strong>Back:</strong> Zip up only - Crystal Buttons</li>
				</ul>
			<h3>Description</h3>
			<p>A gown that is both sexy and romantic, prepare to turn heads in this lace wedding dress with off-the-shoulder sleeves from Martina Liana. The lace on this gown is placed to sculpt throughout the body, creating an enviable shape. From sweetheart neckline, the lace of this gown extends out into an off-the-shoulder neckline that then extends into long, illusion-lace sleeves. Long cutouts highlight both sides of the bodice, continuing through to the completely open back of this gown. A scalloped-lace train completes the look perfectly. The back of this wedding dress with off-the-shoulder sleeves zips up beneath crystal buttons.</p>
			<h3>Designer Notes</h3>
			<p>The Martina Liana Bridal Collection is the embodiment of exquisite couture wedding dress design. Each dress is a perfect choice for the bride who wants to radiate confidence, global glamour, and impeccable style on her wedding day.
      </p>				
		</section>
</div>
	</main>

<?php
include('include/footer.php');
?>
    </body>
</html>