//-------------------------------------------------Data Transfer between Web pages---------------------------------------------------------
function storeName(productName){
    sessionStorage.productName = productName;
}

function validateClick(){
    var productName=document.getElementsByTagName("h2")[0].innerHTML;
    storeName(productName);
    
}

function getName(){
    if (sessionStorage.productName!=undefined){
        document.getElementById("subject").value = "RE: Enquiry on " + sessionStorage.productName;
    }
}

function init(){
  getName();
}
//-----------------------------------------------------------image gallery slideshow---------------------------------------------------------------

var slideIndex = 1;

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("product_item");
  var dots = document.getElementsByClassName("gallery_item");
  if (n > slides.length) {
      slideIndex = 1
    }
  if (n < 1) {
      slideIndex = slides.length
    }
//This controls the previous and next arrows by having one image display none when the button is clicked
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace("active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}


//---------------------------------------Back to top button----------------------------------------------------------------------------------------
// When the user scrolls down 70px from the top of the document, show the button				
function scrollFunction() {
  if (document.body.scrollTop > 70 || document.documentElement.scrollTop > 70) {
  document.getElementById("TopBtn").style.display = "block";
  } else {
  document.getElementById("TopBtn").style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}


window.onload=function() {init()};
window.onscroll = function() {scrollFunction()};