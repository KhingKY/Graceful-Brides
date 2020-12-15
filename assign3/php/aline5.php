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
            <img class="product_image" src="images/Aline5.jpg" alt="Lace offshoulder"/>  
            <!-- This information is taken from https://shop.nordstrom.com/s/willowby-orion-tulle-charmeuse-plunging-a-line-gown/4811707-->
          </div>
          
          <div class="product_item" onclick="openLightbox();showImage()" title="Click to zoom in">
            <img class="product_image" src="images/Aline5a.jpg" alt="Lace offshoulder"/>  
            <!-- This information is taken from https://shop.nordstrom.com/s/willowby-orion-tulle-charmeuse-plunging-a-line-gown/4811707-->
          </div>
      
          <a class="prev" onclick="plusSlides(-1)">❮</a>
          <a class="next" onclick="plusSlides(1)">❯</a>
          
          <div id="full_image" class="modal" onclick="closeLightbox()">
          <span class="close" onclick="closeLightbox()">&#9747;</span>
          <div class="modal-content">
          
            <div class="big_image">
            <img  src="images/Aline5.jpg" alt="Lace offshoulder"/>
            </div>
          
            <div class="big_image">
            <img  src="images/Aline5a.jpg" alt="Lace offshoulder"/>
            </div>
          
          </div>
          </div>

          <div class="catalog" id="effect">
              <section class="gallery">
              <figure class="gallery_item thumbnail">
                  <img class="gallery_image"  src="images/Aline5.jpg" alt="Lace offshoulder" onclick="currentSlide(1)" />  
              </figure> 
              
              
              <figure class="gallery_item thumbnail">
              <img class="gallery_image"  src="images/Aline5a.jpg" alt="Lace offshoulder" onclick="currentSlide(2)" />
              </figure>
              
              </section>
          </div>
      </div>
              

	</section>

	<section class="box1">	
		<h2 class="name">A Line 871234- Orion Tulle &#x26; Charmeuse Plunging</h2>
		<p class="price">RM650/day</p>
		<p class="book"><a href="enquiry.php" target="_blank" onclick="validateClick()">Enquire Now</a></p>
		
			<h3>Details</h3>
				<ul class="cnt">
							<li><strong>Fabrics:</strong> Polyester</li>
							<li><strong>Detail Options:</strong> Partially Lined</li>
							<li><strong>Back:</strong> back-zip - hidden</li>
				</ul>
			<h3>Description</h3>
			<p>Few of stars twinkle over the sheer tulle and make all the audiences focusing 
			on the brides. It catches attention of all just like the star twinkle in the night sky
			which is understated luxury. Plunging V-neck design make the brides look like a ballerina,
			the most beautiful and shining girls in their big days. Skirt designed in sheer A-Line and fixed
			with the waist to slim the body of the brides. There is a hidden zip line tied under the chest
			of the brides to the back of them which can visually slimming the waist of the brides. 
			Looming lace of the skirt showing the white thighs of the brides can visually elongthen the
			body portions of the brides.</p>
			<h3>Designer Notes</h3>
			<p>WILLOWBY is the modern of the wedding dress. Unique dress which always subverting everyone's
			view of traditional gown. WILLOWBY had been designing wedding dresses for around 30 years between
			every kind of style of the wedding dress. This wedding dress used star sequins boldyly as the main focus point
			which is very dangerous if excessive use will cause visual fatigue for the customers.</p>			
		</section>
</div>
	</main>
	<!--https://shop.nordstrom.com/s/willowby-orion-tulle-charmeuse-plunging-a-line-gown/4811707?origin=category-personalizedsort&breadcrumb=Home%2FWomen%2FThe%20Wedding%20Suite%2FWedding%20Dresses&color=soft%20gold-->

<?php
include('include/footer.php');
?>

</body>
</html>