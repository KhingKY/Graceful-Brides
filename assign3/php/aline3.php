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
		<figure class="product_item1">
			<img class="product_image" src="images/Aline3.jpg" alt="A-Line Daphne Sleeveless"/>  
			<!-- This information is taken from https://shop.nordstrom.com/s/jesus-peiro-daphne-sleeveless-strap-back-satin-gown/4854362?
			origin=category-personalizedsort&breadcrumb=Home%2FWomen%2FThe%20Wedding%20Suite%2FWedding%20Dresses&color=off%20white/-->
		 </figure>

	</section>

	<section class="box1">	
		<h2 class="name">A Line 103874- Daphne Sleeveless</h2>
		<p class="price">RM650/day</p>
		<p class="book"><a href="enquiry.php" target="_blank" onclick="validateClick()">Enquire Now</a></p>
		
			<h3>Details</h3>
				<ul class="cnt">
							<li><strong>Fabrics:</strong> Polyster, Acrylic</li>
							<li><strong>Detail Options:</strong> Partially lined</li>
							<li><strong>Back:</strong> Back with rouleau button</li>
				</ul>
			<h3>Description</h3>
			<p>The most conspicuous features of this wedding dress is the jewel neck. It makes
			a focal point on the wedding and act as a remarkable effect of the brides. Jewel neck always
			given a impression of noble and temperament, with the white color will make the wedding dress becomes
			a very pure feeling. There is also a very intimate design as a side-seam pockets on this wedding dress.
			This is very suitable for an icy beauty or cold belle in their big days. The back of the wedding dress
			using a rouleau button closure for brides to wear it.</p>
			<h3>Designer Notes</h3>
			<p>JESÚS PEIRÓ aimed to dressing brides with beautiful wedding dress and as special as the
			women to wear them. The designer is Merche Segerra who stayed in Spain. All these humblings
			design came from her hands with perfectly tailoring and all are hand-finished wedding dress
			as to make the brides look memorable in their weddings.</p>			
		</section>
</div>
</main>
	<!---->
    
<?php
include('include/footer.php');
?>

</body>
</html>