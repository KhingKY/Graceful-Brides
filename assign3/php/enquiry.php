<!--Description: Swinburne Creating Web Applications Assignment 1-Profile page-->
<!--Author: Chan Kwang Yung-->
<!--Date:15/3/2019-->
<!--Validated: OK -->
<?php
include('include/header.php');
?>

<body>

<?php
include('include/menu.php');
?>

<main>

	<div class="product_heading">
		<h1>Enquiry</h1>
</div>

<form id="enquiry" method="post" novalidate="novalidate">
    
<fieldset>
<legend> Contact Information</legend>  

	<p class="name"><input type="text" maxlength="25" name="first name" placeholder="First Name" pattern="[a-zA-Z]+$" required="required"/> <input type="text" maxlength="25" name="last name" placeholder="Last Name" pattern="[a-zA-Z]+$" required="required"/></p>

	<p class="dob"><span class="dob_text">Date of birth:</span><input type="date" name="dob" required="required"/></p> 

	<p><input type="email" name="email" placeholder="Email Address" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required="required"/></p>
		
	<p><input type="tel" maxlength="10" name="Mobile no." placeholder="Phone number eg.(XX) XX-XXXX XXXX" pattern="^(\+?6?01)[0-46-9]-*[0-9]{7,8}$" required="required"/></p>

</fieldset>
    
<fieldset>
<legend>Address</legend>
				
	<p>Street Address:</p>
	<p><textarea name="address" placeholder="Your address" rows="4" maxlength="40" required="required"></textarea></p>



	<p>Town/City:</p>
	<p><input name="city" type="text" maxlength="25" required="required"/></p>
					
	
	
	<label>State</label>
	<select required="required" name="state">
		<option selected="selected" value="">--</option> 
		<option value="Selangor">Selangor Darul Ehsan</option>   
		<option value="Johor">Johor Darul Ta'zim</option>
		<option value="Sarawak">Sarawak</option>    
		<option value="Sabah">Sabah</option>
		<option value="Penang">Penang</option>
		<option value="Pahang">Pahang Darul Makmur</option>
		<option value="Kedah">Kedah Darul Aman</option>
		<option value="Terengganu">Terengganu Darul Iman</option>
		<option value="Malacca">Malacca</option>
		<option value="Perak">Perak Darul Ridzuan</option>
		<option value="Kelantan">Kelantan D\arul Naim</option>
		<option value="Perlis">Perlis INdera Kayangan</option>
		<option value="Negeri Sembilan">Negeri Sembilan Darul Khusus</option>
		<option value="KL">Kuala Lumpur</option>
		<option value="Labuan">Labuan</option>
		<option value="Putrajaya">Putrajaya</option>
	</select>

<p>Postcode</p>
<p><input type="text" name="postcode" pattern="\d{5}" required="required"/></p>
</fieldset>

        
<fieldset>
<legend>Product</legend>
<select required="required" name="products">
	<option value="" selected="selected">--</option>
	<optgroup label="Mermaid">
		<option value="#4644 PNINA TORNAI">&#35;4644 PNINA TORNAI</option>
		<option value="#ENOL Pronovias">&#35;ENOL Pronovias</option>
		<option value="#ERIADU Pronovias">&#35;ERIADU Pronovias</option>
		<option value="#ERCILIA Pronovias">&#35;ERCILIA Pronovias</option>
		<option value="#Estilo Pronovias">&#35;Estilo Pronovias</option>
		<option value="#113162XS Danielle Caprese">&#35;113162XS Danielle Caprese</option>
	</optgroup>
	<optgroup label="Ball gown">
		<option value="#104374 COUTURE">&#35;104374 COUTURE</option>
		<option value="#119270 Gwendolyn">&#35;119270 Gwendolyn</option>
		<option value="#145368 MARIA">&#35;145368 MARIA</option>
		<option value="#Y11958 Rylee">&#35;Y11958 Rylee</option>
		<option value="#654912 KYLO">&#35;654912 KYLO</option>
		<option value="#6800 ANDI">&#35;6800 ANDI</option>
	</optgroup>
	<optgroup label="Lace">
		<option value="Lace Dress with Off-The-Shoulder Sleeves">Lace Dress with Off-The-Shoulder Sleeves</option>
		<option value="Lace and Chiffon Wedding Gown with Cap Sleeves">Lace and Chiffon Wedding Gown with Cap Sleeves</option>
		<option value="Classic Lace Wedding Gown">Classic Lace Wedding Gown</option>
		<option value="Princess Wedding Dress with Off-The-Shoulder Sleeves">Princess Wedding Dress with Off-The-Shoulder Sleeves</option>
		<option value="Illusion Racerback Wedding Dress with High-Neck">Illusion Racerback Wedding Dress with High-Neck</option>
		<option value="Modest Illusion Lace Wedding Dress Separates">Modest Illusion Lace Wedding Dress Separates</option>
	</optgroup>
	<optgroup label="A-line">
		<option value="Asa Sleeveless">Asa Sleeveless</option>
		<option value="V-Neck Cape Sleeve">V-Neck Cape Sleeve</option>
		<option value="Daphne Sleeveless">Daphne Sleeveless</option>
		<option value="Ludmila Silk Lace">Ludmila Silk Lace</option>
		<option value="Orion Tulle &#x26; Charmeuse Plunging">Orion Tulle &#x26; Charmeuse Plunging</option>
		<option value="Nash V-Neck Lace">Nash V-Neck Lace</option>
	</optgroup>

</select>   
</fieldset>
    
<fieldset>
<legend>Rental duration</legend>

	<p>From: <input name="fromDate" type="text" placeholder="DD/MM/YYYY" required="required"/></p>
	<p>To: <input name="ToDate" type="text" placeholder="DD/MM/YYYY" required="required"/></p>


</fieldset>

<fieldset>
<legend>Comments</legend>
	<p>Subject: <input type="text" id="subject" name="subject" required="required"/></p>
	<p><textarea name="comments" rows="10" cols="50" placeholder="Please specify the aspect you are interested in (if any)"></textarea></p>
</fieldset>

<p>
	<input type="submit" value="Submit"/>
	<input type="reset" value="Reset"/>  
</p>
</form>
</main>

<?php
include('include/footer.php')
?>

</body>
</html>