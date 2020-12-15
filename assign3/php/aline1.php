<!--Description: Swinburne Creating Web Applications Assignment 1-Profile page-->
<!--Author: Chan Kwang Yung-->
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
			<img class="product_image" src="images/Aline1.jpg" alt="Asa Sleeveless"/>  
			<!-- This information is taken from https://shop.nordstrom.com/s/willowby-asa-sleeveless-v-neck-lace-tulle-wedding-dress/4728489-->
		 </figure>

		 <figure class="product_item2">
			<img class="product_image" src="images/Aline1a.jpg" alt="Asa Sleeveless2"/>  
			<!-- This information is taken from https://shop.nordstrom.com/s/willowby-asa-sleeveless-v-neck-lace-tulle-wedding-dress/4728489-->
		 </figure>

		 <figure class="product_item3">
			<img class="product_image" src="images/Aline1b.jpg" alt="Asa Sleeveless3"/>  
			<!-- This information is taken from https://shop.nordstrom.com/s/willowby-asa-sleeveless-v-neck-lace-tulle-wedding-dress/4728489-->
		 </figure>

	</section>

	<section class="box1">	
		<h2 class="name">A-Line 195925- Asa Sleeveless</h2>
		<p class="price">RM650/day</p>
		<p class="book"><a href="enquiry.php" target="_blank" onclick="validateClick()">Enquire Now</a></p>
		
			<h3>Details</h3>
				<ul class="cnt">
							<li><strong>Fabrics:</strong> Illusion Tulle, Moraea Lace</li>
							<li><strong>Detail Options:</strong> clear beading and boning</li>
							<li><strong>Back:</strong> back-zip - hidden</li>
				</ul>
			<h3>Description</h3>
			<p>Asa is a style which is the perfect marriage of tradition and evolution.
			The shaped A-line skirt softly flows from a natural waist which Morea lace
			placed on illusion tulle gives the feel of a very bare, nymphlike neckline.
			The wedding dress is designed with strappy and in a style of Romantic with Bohemian.
			Sheer tulle is placed over, floral lace is given the fancy of revealing while concealing 
			for a gossamer gown that appears on the back too.
			The deeply scooped back perfectly displayed the bride's shape and also elongating the body portion.
			This is suitable escpecially for the Asian girls as Asian has relatively petite stature compared to 
			Western girls.</p>
			<h3>Designer Notes</h3>
			<p>The dress had designed a hidden back-zip closure for the brides to wear on it. The V-neck with 
			illusion inset design make a visually slimming effect as to make the overall look slimmer.
			Designer does not included a long hemline in this wedding dress as to ease the bride to walk and 
			reduce the weight of the wedding dress. This is a very bold cross-age design for wedding dress.
			Lace is also used in the design as it has played a role in fashionable dress since sixteenth century.
			The combination of lace with A-line skirt design create a romantic feel for the brides.</p>			
		</section>
</div>
</main>

<?php
include('include/footer.php');
?>

</body>
</html>
