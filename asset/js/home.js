slideIndex = 0;

showSlides(slideIndex);

autoSlide();
function autoSlide() {
  var article = document.getElementsByClassName('mySlides');
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < article.length; i++){
    article[i].style.display = "none";
  }

  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
}

  slideIndex++;

   if(slideIndex > article.length){
     slideIndex = 1;
   }

   article[slideIndex-1].style.display = "block";
   dots[slideIndex-1].className += " active";

   setTimeout(autoSlide, 5000);

}


function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}

  if (n < 1) {slideIndex = slides.length}

  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  

  }

  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");      
  }

  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";

  var dots = document.getElementsByClassName("dot");

for(i = 0; i < dots.length; i++){

  let n = i;

  dots[i].addEventListener('click', function(e){
    showSlides(slideIndex = n+1);

  })
}



}

