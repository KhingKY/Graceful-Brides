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
			<img class="product_image" src="images/Aline4.jpg" alt="Ludmila Silk Lace"/>  
			<!-- This information is taken from https://shop.nordstrom.com/s/watters-ludmila-silk-lace-tulle-a-line-gown/4994517?origin=category-personalizedsort&breadcrumb=Home%2FWomen%2FThe%20Wedding%20Suite%2FWedding%20Dresses&color=ivory%20%2F%20sunkiss-->
		 </figure>

		 <figure class="product_item2">
			<img class="product_image" src="images/Aline4a.jpg" alt="Ludmila Silk Lace"/>  
			<!-- This information is taken from https://shop.nordstrom.com/s/watters-ludmila-silk-lace-tulle-a-line-gown/4994517?origin=category-personalizedsort&breadcrumb=Home%2FWomen%2FThe%20Wedding%20Suite%2FWedding%20Dresses&color=ivory%20%2F%20sunkiss-->
		 </figure>

		 <figure class="product_item3">
			<img class="product_image" src="images/Aline4b.jpg" alt="Ludmila Silk Lace"/>  
			<!-- This information is taken from https://shop.nordstrom.com/s/watters-ludmila-silk-lace-tulle-a-line-gown/4994517?origin=category-personalizedsort&breadcrumb=Home%2FWomen%2FThe%20Wedding%20Suite%2FWedding%20Dresses&color=ivory%20%2F%20sunkiss-->
		 </figure>

	</section>

	<section class="box1">	
		<h2 class="name">A Line 168521- Ludmila Silk Lace</h2>
		<p class="price">RM650/day</p>
		<p class="book"><a href="enquiry.php" target="_blank" onclick="validateClick()">Enquire Now</a></p>
		
			<h3>Details</h3>
				<ul class="cnt">
							<li><strong>Fabrics:</strong> Silk</li>
							<li><strong>Detail Options:</strong> Partially lined</li>
							<li><strong>Back:</strong> zip - hidden faux rouleau buttons</li>
				</ul>
			<h3>Description</h3>
			<p>The most attractive feature is the faux rouleau buttons on the back of the wedding dress.
			They embellishment the back of the brides and creating a looming sense. The dress designed 
			with a double V-Neck in front and behind the dress. It used sleeveless design and using tulle
			overlay for the full skirt. Lace also a main design for the wedding dress and match with 
			a-line dress design. The ethereal elegance is created as the frothy tulle shrouds the dress
			with the lace gown. The design is used to make the brides become the focus in their big days.
			A romantic feel always the aim of the company.</p>
			<h3>Designer Notes</h3>
			<p>WATTERS is a manufacture since 1985 with design wedding dress. Their aim is 
			romance in life and perfect weddings for brides.</p>			
		</section>
</div>
	</main>
<?php
include('include/footer.php');
?>


</body>
</html>