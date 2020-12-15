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
?>
<article>

<div class="product_heading">
        <h1>Enhancements</h1>
</div>

<div class="enhancements">
    <h2>1.Auto playing full screen video</h2>

        <p>The basic requirements of the assignment did not require a video being implemented into the website, but after careful consideration, the team thought it would boost the attractiveness of the website especially when the user firstly enters the website and gets greeted with the video.</p>  

        <p>The code needed for the implementation of the video is simply by using the <span class="courier"> video</span> in the HTML and some added styles to the CSS. Some attributes are added to the tag such as <span class="courier">autoplay, muted and loop</span>. A <span class="courier">poster</span> attribute is added as well in case the user internet was slow, the poster will be displayed first. In CSS, the use of <span class="courier">width:100%;</span> and <span class="courier">height:100vh;</span> in the <span class="courier">.myvideo</span> tag gave the video a suitable frame to resize itself in. The video is then resized using the <span class="courier">min-height:100%; min-width:100%;</span> to fully fit the screen.  A pseudo element <span class="courier">::before </span> is used as well to darken the video so that the words overlaying the video can be the main focus. </p>

        <p>This feature is available <a href="index.php" target="_blank">here</a>. The idea of making this feature was referenced from <a href="https://www.youtube.com/watch?v=Xy3GlrddZFI&#x26;t=1011s" target="_blank">here</a> and <a href="https://www.youtube.com/watch?v=7S0X0OWMu_k" target="_blank">here</a>.</p> 

    <h2>2.Hamburger menu</h2>

        <p>A large amount of enhancements was used in the making of this menu. The assignment requirements only asked for a menu that links to the      other parts of the website. The team thought it would be better to create a more unique navigation menu so that it stands out from the others.  This also ease the process of making a fluid layout as it is compatible for all screen sizes. </p>

        <p>The HTML coding for the implementation of the feature is quite simple. The use of <span class="courier">input type="checkbox"</span> with two empty labels for the checkbox will do the trick. An unordered list as the navigation links are added as well. For the CSS, to make the three lines, pseudo elements <span class="courier">::after and ::before</span> are used. The reason being that is because the team can add some special animation to the pseudo elements such as changing the burger icon into an arrow icon. To make the middle line of the burger, the two labels with their respective id selectors are used and a declaration of <span class="courier">width:30px; height:3px;</span> is added to make a line that is 30px long and 3px high. The top line is made by using a pseudo element <span class="courier">::before</span> with a declaration of the same height and width but with an added declaration of <span class="courier">content: “ ";</span>. The bottom line used a pseudo element of <span class="courier">::after</span> and has the same declarations as the top line. To position the lines, <span class="courier">position: absolute;</span> is used alongside with <span class="courier">top</span> and <span class="courier">left</span>. </p>

        <p>In order to make the animation of the burger icon into an arrow icon, the declaration<span class="courier">transform: rotate();</span> is used. The top and bottom lines will rotate 45 degrees towards the middle line and all three line will rotate 180 degrees. <span class="courier">transition</span> is used to make the animation look better. </p>

        <p>When clicking the hamburger menu, the checkbox will be checked and the <span class="courier">animation: checked-anim .8s both;</span> declaration is used with <span class="courier">@keyframes checked-anim {0% {opacity: 0;height: 100%;width: 100%} 100% {opacity: 1;height: 100%;width:100%;} }</span> will reveal the menu. The menu will be hidden once the icon is clicked again, unchecking the checkbox <span class="courier"> [type="checkbox"]:not(:checked),[type="checkbox"]:checked {display: none;}.</span> </p>

        <p>The source of reference of this feature can be found <a href="https://redstapler.co/10-awesome-css-hamburger-menu/" target="_blank">here</a> with the title of #1 Burger Menu. This feature can be found on every webpage in the header including <a href="index.php" target="_blank">index.php</a>. </p>

    <h2>3.Image hover effects</h2>

        <p>Apart from having the cursor change when hovering over an image with an anchor tag, the team decided to add some hover effects to make the webpage more interactive and interesting. There are two image hover effects available in the website.</p>

        <p>The first effect is available at the <a href="products.php#effect" target="_blank">product category page</a> with the source of the reference from <a href=" https://www.youtube.com/watch?v=ltxxNidblts&#x26;t=608s" target="_blank">here</a>. Firstly, the images are added into the webpage with the semantic element tag such as <span class="courier">main, figure</span>. In CSS, the images are arranged with <span class="courier">display: grid</span> in a media query <span class="courier">@media (min-width: 800px){}</span> which means when the CSS will only be carried out when the screen size is larger than 800px in width.  The first effect is the enlarging of the image with <span class="courier">.box:hover .imgBox img{transform: scale(1.2);}</span>. The box does not enlarge with the image as the parent of the image is set to <span class="courier">overflow: hidden;</span>. Next, the white text box overlay is achieved by having the the <span class="courier">div class="details"</span> set to <span class="courier">position: absolute;</span> and a <span class="courier">top left right bottom</span> of 10px <span class="courier">opacity:0</span>. When hovered over, the opacity will change to 1 and <span class="courier">transition: opacity 2s</span> is added to make the effect appear more naturally. </p>

        <p>The second effect is available <a href="ballgown.php#effect" target="_blank">here</a> with no source reference as it is an original idea. The first step is by inserting the images into the webpage with<span class="courier">main section figure</span> . Next, in CSS, the images have to be arranged with <span class="courier">display: flex;</span>  and <span class="courier">flex-flow: row wrap;</span>. Media queries such as <span class="courier">@media only screen and (min-width: 48em){.gallery_item{flex-basis: calc(50% - 2rem);}}</span> were added too to give a better fluidity of the images. For the hover effect, the first effect is how the picture enlarges with the declaration of <span class="courier">.gallery_item:hover .gallery_image{transform: scale();}</span>. The vignette effect was added using a pseudo element of <span class="courier"> ::before</span> with the declaration of <span class="courier">box-shadow:inset 0 0 60px 10px rgba(0,0,0,.7);</span> and a reuse of the declaration of <span class="courier">animation:checked-anim 1s both;</span> from the menu to make it appear more subtly and elegantly. The text box that appears at the bottom of the image is styled by pushing the text box down with <span class="courier">position: absolute; bottom:-600px;</span> and having the image <span class="courier">overflow: hidden;</span>.When hovered over, the <span class="courier">bottom</span> property will have a value of 0. </p>

    <h2>4.Parallax scrolling effect</h2>

        <p>When adding banners into some product pages, the team felt like static images are just not attractive enough. Instead of going with the standard banner, the team decided to change it into a parallax scrollable background image that remains at a fixed position whenever the page is being scrolled up or down.  </p>
        <p>In order to carry out this feature, a <span class="courier">div class="pimg1"</span> is added in HTML to add the background image. In CSS, declarations of <span class="courier">background-position: center; background-size: cover; background-repeat: no-repeat;</span> are used to position the background image to the center, adjust the background image to constantly try to cover the whole area with just one image, turning off repeating images a <span class="courier"> min-height: 100vh;</span> is used to set the height of the background to be 100% of the height of the screen. Next, the most crucial part of to make this feature possible is <span class="courier">background-attachment: fixed;</span>. Lastly, the image is added by using<span class="courier">background-image:url();</span>. 
        </p>
        <p>This feature is available at the <a href="products.php" target="_blank">product category page</a>. The source reference is from <a href="https://www.w3schools.com/howto/howto_css_parallax.asp" target="_blank"> here</a>. </p>
</div>
</article>
<?php
include('include/footer.php');
?>
</body>
</html>