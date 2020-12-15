<!--Description: Swinburne Creating Web Applications Assignment 1-Profile page-->
<!--Author: Chan Kwang Yung-->
<!--Date:15/3/2019-->
<!--Validated: 6/4/2019 OK -->
<?php
include('include/header.php')
?>

<body>

<?php
include('include/menu.php')
?>

	<div class="pimg1">
		<div class="ptext">
			<h1>
			<span class="border">
				Our Products
			</span>
		</h1>
	</div>
	</div>

	<main class="category" id="effect">		
		<figure class="figure1">
			<div class="box">
				<a href="aline.php">
					<div class="imgBox">
						<img src="images/aline.jpg" class="figure-img" alt="A-line Dressess"/>
					</div>
					<div class="details">
						<div class="content">
						  <h2>A-lines</h2>
						</div>
						</div>
					</a>
					</div>
		</figure>

		<figure class="figure2">
				<div class="box">
						<a href="mermaid.php">
							<div class="imgBox">
								<img src="images/mermaid.jpg" class="figure-img" alt="Mermaid Dressess"/>
							</div>
							<div class="details">
								<div class="content_mermaid">
								  <h2>Mermaids</h2>
								</div>
								</div>
							</a>
							</div>
		</figure>

		<figure class="figure3">
				<div class="box">
						<a href="lace.php">
							<div class="imgBox">
								<img src="images/lace.jpg" class="figure-img" alt="Lace Dressess"/>
							</div>
							<div class="details">
								<div class="content">
								  <h2>Laces</h2>
								</div>
								</div>
							</a>
							</div>
		</figure>

		<figure class="figure4">
				<div class="box">
						<a href="ballgown.php">
							<div class="imgBox">
								<img src="images/ballgown.jpg" class="figure-img" alt="Ball gowns"/>
							</div>
							<div class="details">
								<div class="content_gown">
								  <h2>Ball gowns</h2>
								</div>
								</div>
							</a>
							</div>
		</figure>

	</main>

<?php
include('include/footer.php')
?>
</body>
</html>

