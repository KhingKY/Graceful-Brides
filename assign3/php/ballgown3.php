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
						<img class="product_image" src="images/ballgown3.jpg" alt="Ballgown Maria"/>  
						<!-- This information is taken from https://sassiholford.com/dresses/maria/-->
                </div>
                
                <div class="product_item" onclick="openLightbox();showImage()" title="Click to zoom in">
						<img class="product_image" src="images/ballgown3a.jpg" alt="Ballgown Maria2"/>  
						<!-- This information is taken from https://sassiholford.com/dresses/maria/-->
                </div>
            
                <a class="prev" onclick="plusSlides(-1)">❮</a>
				<a class="next" onclick="plusSlides(1)">❯</a>
				
				<div id="full_image" class="modal" onclick="closeLightbox()">
				<span class="close" onclick="closeLightbox()">&#9747;</span>
				<div class="modal-content">
				
					<div class="big_image">
					<img src="images/ballgown3.jpg" alt="Ballgown Maria"/>
					</div>
				
					<div class="big_image">
					<img src="images/ballgown3a.jpg" alt="Ballgown Maria"/>
					</div>
				
				</div>
				</div>

                <div class="catalog" id="effect">
                    <section class="gallery">
                    <figure class="gallery_item thumbnail">
                        <img class="gallery_image" src="images/ballgown3.jpg" alt="Ballgown Maria" onclick="currentSlide(1)" />
                        
                    </figure> 
                    
                    
                    <figure class="gallery_item thumbnail">
                    <img class="gallery_image" src="images/ballgown3a.jpg" alt="Ballgown Maria" onclick="currentSlide(2)" />
                    
                    </figure>
                    
                    </section>
                </div>
        </div>
              

	</section>

	<section class="box1">	
		<h2 class="name">#145368 MARIA</h2>
		<p class="price">RM580/day</p>
		<p class="book"><a href="enquiry.php" target="_blank" onclick="validateClick()">Enquire Now</a></p>
	
			<h3>Details</h3>
				<ul class="cnt">
							<li><strong>Fabric:</strong> Silk, Tulle, Sheer</li>
							<li><strong>Size Options:</strong> 2-24</li>
							<li><strong>Features:</strong> A large amount of bows</li>
							<li><strong>Colors:</strong>White, Eggshell white, Snow</li>
				</ul>
			<h3>Description</h3>
            <p>This gown is for you if you are the kind of person that wants to be seen as the most elaborate and sexiest person in the area on your special day, and who does not want that on their wedding day? It is your day after all. The top of the dress is all about sexy, featuring a sleeveless halter neck with a revealing low V-neckline reaching until the abdomen area which will be ended by a piece of silk fabric around your waist area. The back is mostly comprised of a large sheer bow tulle with an ending long enough to trail the ground tied around the neck and a very low back, revealing almost the whole back area of the bride. As we come down to the skirt of the gown, we are greeted with only more bows. A lot more bows. The whole skirt is comprised of thousands of bows tied to it, giving is great intricacy in contrast with the quite simple top.</p>
            
			<h3>Designer Notes</h3>
			<p>Bisconsin Maria, the designer of the dress, said that she put the most effort in designing and making this dress compared the others that she made from past years. All the bows attached on the dress was handtied and sewn on securely to prevent any of them from falling off.</p>				

	</section>
</div>
	</main>

<?php
include('include/footer.php');
?>
    </body>
</html>