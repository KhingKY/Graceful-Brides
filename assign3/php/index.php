<!--Description: Swinburne Creating Web Applications Assignment 1-Index-->
<!--Author: Elaine Wong Wen Rou, Chan Kwang Yung-->
<!--Date:1/4/2019-->
<!--Validated: 6/4/2019 -->
<?php
include('include/header.php')
?>

<body>

<?php
include('include/menu.php')
?>

<article>
<section class="video_banner">
    <div class="myvideo">
    <video poster="indexVid.png" autoplay="autoplay" muted="muted" loop="loop">
      <source src="images/indexVid.mp4" type="video/mp4"/>
      Sorry, video is unable to be played.
      <!--This video is taken from https://www.youtube.com/watch?v=L2QwB-wc2s4-->
    </video>
    </div>
    <div class="bride-text">
        <h1>
          <span class="graceful-brides">
              Graceful Brides
          </span>
        </h1>
        <blockquote><p><em>&quot;Selecting a weeding dress is more than just a fitting...it's a process &#8212; a memory in the making&quot;</em></p></blockquote><p><span class="olivelli">&#8212;Olivelli Cape Jown</span></p>
      </div>
</section>

<section class="intro">
  <h2>Who are we?</h2>
  <p>
      From humble and elegant, to daring and flambouyant, Gracful Brides has got it all and more. Luxuria is here to provide you your dream dress as you walk down the aisle with your special someone on your special day. With us, getting the dress of your dreams has never been easier or more affordable. Singularity, elegance and grace &#8212; This is the Graceful Brides' vision. We hope that your experience with us will be euphoric.
  </p>
</section>

<section>
<div class="ballgown_img">
    <div class="ptext">
      <h2>
          <a class="index_products" href="ballgown.php"><span class="border">
            Ballgown
        </span></a>
      </h2>
      <div class="view_button"><p>&#8618;Click the button to view</p></div>
      <p><em>If you want to be the Cinderella of the ball, these will be perfect for you. All eyes will be on you as you appear in the most flambouyant outfit of the party.</em></p>
    </div>
</div>
</section>

<section>
    <div class="mermaid_img">
        <div class="ptext">
          <h2>
              <a class="index_products" href="mermaid.php"><span class="border">
                Mermaid
            </span></a>
          </h2>
          <div class="view_button"><p>&#8618;Click the button to view</p></div>
          <p><em>Be poise, be grace, be beauty. Make waves of applause as you walk down the aisle. Show them that you are the pearl of the ocean as you appear in a dress fit for mermaids.</em></p>
        </div>
    </div>
    
  </section>

  <section>
    <div class="aline_img">
        <div class="ptext">
          <h2>
            <a class="index_products" href="aline.php"><span class="border">
                A-line
            </span></a>
          </h2>
          <div class="view_button"><p>&#8618;Click the button to view</p></div>
          <p><em>Be the most beautiful girl and marry him.</em></p>
        </div>
    </div>
    
  </section>

  <section>
      <div class="lace_img">
          <div class="ptext">
            <h2>
                <a class="index_products" href="lace.php"><span class="border">
                    Lace
              </span></a>
            </h2>
            <div class="view_button"><p>&#8618;Click the button to view</p></div>
            <p><em>Every seam, every lace, every bead has been painstakingly, with love, corrected, perfected and mastered.</em></p>
          </div>
      </div>
      </section>

</article>

<?php
include('include/footer.php')
?>

</body>
</html>
