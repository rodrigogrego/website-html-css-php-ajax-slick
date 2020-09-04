

$(document).ready(function(){

    $('.center').slick({
      centerMode: true,
      centerPadding: '40px',
      slidesToShow: 4,
      autoplay: true,
      autoplaySpeed: 1000,
      responsive: [
        {
          breakpoint: 768,
          settings: {
            arrows: false,
            centerMode: true,
            centerPadding: '40px',
            slidesToShow: 3
          }
        },
        {
          breakpoint: 480,
          settings: {
            arrows: false,
            centerMode: true,
            centerPadding: '40px',
            slidesToShow: 3
          }
        }
      ]
    });
  
  
  
  
  })




        var mq = window.matchMedia('(max-width: 780px)');
        var logo = document.getElementById('img1');
        var icon1 = document.getElementById('login1');
        var icon2 = document.getElementById('in1');

        if (mq.matches) {
                $(logo).attr('src', '../img/icon/marca2.webp');
                $('.navbar-expand-lg').css("background-color", "#ffff");

                $(icon1).attr('src', '../img/icon/login.png');
                $(icon2).attr('src', '../img/icon/in.png');
        }
        else {
                $(logo).attr('src', '../img/icon/marca.webp');
                $('.navbar-expand-lg').css("background-color", "transparent");
                $(icon1).attr('src', '../img/icon/login2.png');
                $(icon2).attr('src', '../img/icon/in2.png');
        }



        var mq = window.matchMedia('(max-width: 780px)');
        $(window).scroll(function () {

                if (mq.matches) {
                        $('.navbar-expand-lg').css("background-color", "#ffff");
                }

                else if ($(this).scrollTop() > 1) {
                        $('.navbar-expand-lg').css("background-color", "#ffff");
                        $('.navbar').css("padding", "0rem 1rem 0rem 1rem");
                       


                } else {
                        $('.navbar-expand-lg').css("background-color", "transparent");
                        $('.navbar').css("padding", ".5rem 1rem .5rem 1rem");


                }
        });


        var mq = window.matchMedia('(max-width: 780px)');
        var troca = document.getElementById('img1');
        $(window).scroll(function () {

                if (mq.matches) {
                        $(troca).attr('src', '../img/icon/marca2.webp')
                }

                else if ($(document).scrollTop() > 1) {
                        $(troca).attr('src', '../img/icon/marca2.webp');
                } else {
                        $(troca).attr('src', '../img/icon/marca.webp');
                }

        });


        var mq = window.matchMedia('(max-width: 780px)');
        var troca3 = document.getElementById('login1');
        $(window).scroll(function () {
                if (mq.matches) {
                        $(troca3).attr('src', '../img/icon/login.png');
                }
                else if ($(document).scrollTop() > 1) {
                        $(troca3).attr('src', '../img/icon/login.png');
                } else {
                        $(troca3).attr('src', '../img/icon/login2.png');
                }
        });


        var mq = window.matchMedia('(max-width: 780px)');
        var troca4 = document.getElementById('in1');
        $(window).scroll(function () {

                if (mq.matches) {
                        $(troca4).attr('src', '../img/icon/in.png');
                }

                else if ($(document).scrollTop() > 1) {
                        $(troca4).attr('src', '../img/icon/in.png');
                } else {
                        $(troca4).attr('src', '../img/icon/in2.png');
                }
        });




        $(window).scroll(function () {

                if ($(this).scrollTop() > 1) {
                        $('.nav-item .nav-link').css("color", "#1e227b");

                } else {
                        $('.nav-item .nav-link').css("color", "#ffffff");

                }
        });



function funcaoClick() {
var mq = window.matchMedia('(max-width: 780px)');
var x = document.getElementById("drop");
  if(mq.matches && x.className.indexOf("show") == -1){

                  x.className += "show";
        }
   else {
    x.className = x.className.replace("show", "");

  }
}


function funcaoClick2() {
var mq = window.matchMedia('(max-width: 780px)');
var y = document.getElementById("drop2")
  if(mq.matches && y.className.indexOf("show2") == -1){
         
        y.className += "show2";
        }
   else {
    y.className = y.className.replace("show2", "");
  }
}

function openModal() {
    document.getElementById("myModal").style.display = "block";
  }
  
  function closeModal() {
    document.getElementById("myModal").style.display = "none";
  }
  
  var slideIndex = 1;
  showSlides(slideIndex);
  
  function plusSlides(n) {
    showSlides(slideIndex += n);
  }
  
  function currentSlide(n) {
    showSlides(slideIndex = n);
  }
  
  function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("demo");
    var captionText = document.getElementById("caption");
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
    captionText.innerHTML = dots[slideIndex-1].alt;
  }


