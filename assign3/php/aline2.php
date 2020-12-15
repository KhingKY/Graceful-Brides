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
			<img class="product_image" src="images/Aline2.jpg" alt="V-Neck Cape Sleeve" />  
			<!-- This information is taken from https://shop.nordstrom.com/s/jesus-peiro-v-neck-cap-sleeve-wedding
			-dress/5170800?origin=category-personalizedsort&breadcrumb=Home%2FWomen%2FThe%20Wedding%20Suite%2FWedding%20Dresses&color=ivory-->
		 </figure>

		 <figure class="product_item2">
			<img class="product_image" src="images/Aline2a.jpg" alt="V-Neck Cape Sleeve2" />  
			<!-- This information is taken from https://shop.nordstrom.com/s/jesus-peiro-v-neck-cap-sleeve-weddin
			g-dress/5170800?origin=category-personalizedsort&breadcrumb=Home%2FWomen%2FThe%20Wedding%20Suite%2FWedding%20Dresses&color=ivory-->
		 </figure>

		 <figure class="product_item3">
			<img class="product_image" src="images/Aline2b.jpg" alt="V-Neck Cape Sleeve3" />  
			<!-- This information is taken from https://shop.nordstrom.com/s/jesus-peiro-v-neck-cap-sleeve-wedding
			-dress/5170800?origin=category-personalizedsort&breadcrumb=Home%2FWomen%2FThe%20Wedding%20Suite%2FWedding%20Dresses&color=ivory-->
		 </figure>

	</section>

	<section class="box1">	
		<h2 class="name">A Line 132540- V-Neck Cape Sleeve</h2>
		<p class="price">RM650/day</p>
		<p class="book"><a href="enquiry.php" target="_blank" onclick="validateClick()">Enquire Now</a></p>
		
			<h3>Details</h3>
				<ul class="cnt">
							<li><strong>Fabrics:</strong> Polymaide, cotton</li>
							<li><strong>Detail Options:</strong> lined</li>
							<li><strong>Back:</strong> button with zip</li>
				</ul>
			<h3>Description</h3>
			<p>A dress which is made in Spain. Lace designed in front of the chest which is 
			eyelash lace and it romances the A-line shape of bride's. A small design at the shoulder
			of the dress is such a special design as to make focusing on the brides. This wedding dress
			with a train as to visually lengthen the shape of the brides. The lower part of the body uses
			a material other than laces with is polyamide, a kind of nylon for making clothes and it makes
			the clothes look romantic as the fairy in the fairytale.</p>
			<h3>Designer Notes</h3>
			<p>JESÚS PEIRÓ aimed to dressing brides with beautiful wedding dress and as special as the
			women to wear them. The designer is Merche Segerra who stayed in Spain. All these humblings
			design came from her hands with perfectly tailoring and all are hand-finished wedding dress
			as to make the brides look memorable in their weddings.</p>			
		</section>
</div>
</main>
				
<?php
include('include/footer.php');
?>

</body>
</html>