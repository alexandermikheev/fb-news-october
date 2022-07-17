///Слайдер в логин меню

let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n){
    showSlides(slideIndex += n);
}

function showSlides(n){ 
    let i;
    let slides = document.getElementsByClassName("mySlides");
    let dots = document.getElementsByClassName("dot");

    if(n > slides.length){
        slideIndex = 1
    }
    if(n < 1){
        slideIndex = slides.length
    }
    for(i =0; i < slides.length; i++){
        slides[i].style.display = "none"
    }
    for(i = 0; i < dots.length; i++ ){
        dots[i].className =dots[i].className.replace("acrive","");
    }
    slides[slideIndex-1].style.display = "block";
    dots[slideIndex-1].className += "active";

}
let i = 1;
  setInterval(function(){
  currentSlide(i)
  i++;
  if(i == 5)
  {
   i = 1;
  }
},2000)