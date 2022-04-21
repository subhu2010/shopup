// header
document.addEventListener("DOMContentLoaded", function () {
   // make it as accordion for smaller screens
   if (window.innerWidth > 992) {

      document.querySelectorAll('.navbar .nav-item').forEach(function (everyitem) {

         everyitem.addEventListener('mouseover', function (e) {

            let el_link = this.querySelector('a[data-bs-toggle]');

            if (el_link != null) {
               let nextEl = el_link.nextElementSibling;
               el_link.classList.add('show');
               nextEl.classList.add('show');
            }

         });
         everyitem.addEventListener('mouseleave', function (e) {
            let el_link = this.querySelector('a[data-bs-toggle]');

            if (el_link != null) {
               let nextEl = el_link.nextElementSibling;
               el_link.classList.remove('show');
               nextEl.classList.remove('show');
            }


         })
      });

   }
   // end if innerWidth




   // onclickOpenSideBar
   var sidebar = document.getElementById('sidebarButton');
   var sidebarBlock = document.getElementById('sidebar-block');
   var cancel = document.getElementById('cancel');
   var sidebbarOpacity = document.getElementById('opacity');
   var subMenu = document.getElementsByClassName('sub-menu');
   var i;

   sidebar.addEventListener('click', function () {
      (sidebarBlock).style.transform = 'translatex(0rem)';
      sidebbarOpacity.classList.add('active');
      cancel.addEventListener('click', function () {
         (sidebarBlock).style.transform = 'translatex(-30rem)';
         sidebbarOpacity.classList.remove('active')
      });
      sidebbarOpacity.addEventListener('click', function () {
         (sidebarBlock).style.transform = 'translatex(-30rem)';
         sidebbarOpacity.classList.remove('active')
      });

   });

   function closeActiveAccordion() {
      let subMenuActive = document.querySelector('.sub-menu.active');
      if (subMenuActive) {
         subMenuActive.classList.remove("active");
      }
   }

   for (i = 0; i < subMenu.length; i++) {
      subMenu[i].addEventListener('click', function () {
         closeActiveAccordion();
         this.classList.toggle("active");
      });
   }





});
// DOMContentLoaded  end







function responseMessage(msg) {
   $('.success-box').fadeIn(200);
   $('.success-box div.text-message').html("<span>" + msg + "</span>");
}







// carousel 
$('.banner-carousel').owlCarousel({
   loop: false,
   margin: 15,
   dots: false,
   nav: true,
   navText: ["<img src='frontend/img/three/arrow-left.svg'>", "<img src='frontend/img/three/arrow-right.svg'>"],
   responsive: {
      0: {
         items: 1,
         nav: true
      },
      600: {
         items: 1,
         nav: true
      },
      1000: {
         items: 1,
         nav: true
      },
      1200:{
         items: 1,
         nav: true
      }

   }
});


$('.flash-wrap').owlCarousel({
   loop: true,
   margin: 15,
   responsiveClass: true,
   dots: false,
   nav: true,
   navText: ["<img src='frontend/img/three/arrow-left.svg'>", "<img src='frontend/img/three/arrow-right.svg'>"],
   responsive: {
      0: {
         items: 2,
         nav: true
      },
      600: {
         items: 3,
         nav: true
      },
      1000: {
         items: 4,
         nav: true
      },
      1200:{
         items: 5,
         nav: true
      }

   }
});

$('.list-wrapp').owlCarousel({
   loop: true,
   margin: 15,
   responsiveClass: true,
   dots: false,
   nav: true,
   navText: ["<img src='frontend/img/three/arrow-left.svg'>", "<img src='frontend/img/three/arrow-right.svg'>"],
   responsive: {
      0: {
         items: 2,
         nav: true
      },
      576: {
         items: 3,
         nav: true
      }
      ,
      600: {
         items: 5,
         nav: true
      },
      1000: {
         items: 7,
         nav: true
      }
   }
});



$('.product__wrap').owlCarousel({
   loop: true,
   margin: 15,
   responsiveClass: true,
   dots: false,
   nav: true,
   navText: ['<i class="las la-arrow-left"></i>', '<i class="las la-arrow-right"></i>'],
   responsive: {
      0: {
         items: 1,
         nav: true
      },
      600: {
         items: 3,
         nav: true
      },
      1000: {
         items: 5,
         nav: true
      }
   }
});

$('.banner-slider').owlCarousel({
   loop: true,
   responsiveClass: true,
   dots: true,
   autoplay: true,
   autoplayTimeout: 3000,
   nav: false,
   responsive: {
      0: {
         items: 1,
      },
      600: {
         items: 1,
         nav: false
      },
      1000: {
         items: 1,
         nav: false
      }
   }
});

$('.latest-slider').owlCarousel({
   loop: true,
   responsiveClass: true,
   dots: true,
   autoplay: false,
   autoplayTimeout: 4000,
   nav: false,
   responsive: {
      0: {
         items: 1,
      },
      600: {
         items: 1,
         nav: false
      },
      1000: {
         items: 1,
         nav: false
      }
   }
});

$('.latest-list-slider').owlCarousel({
   loop: true,
   responsiveClass: true,
   dots: false,
   autoplay: true,
   autoplayTimeout: 4500,
   nav: true,
   navText: ["<img src='frontend/img/three/arrow-left.svg'>", "<img src='frontend/img/three/arrow-right.svg'>"],
   responsive: {
      0: {
         items: 1,
      },
      600: {
         items: 1,
         nav: true
      },
      1000: {
         items: 1,
         nav: true
      }
   }
});

$('.similar-product').owlCarousel({
   loop: true,
   margin: 15,
   responsiveClass: true,
   dots: false,
   nav: true,
   navText: ["<img src='../frontend/img/three/arrow-left.svg'>", "<img src='../frontend/img/three/arrow-right.svg'>"],
   responsive: {
      0: {
         items: 2,
         nav: true
      },
      600: {
         items: 3,
         nav: true
      },
      1000: {
         items: 4,
         nav: true
      },
      1200:{
         items: 5,
         nav: true
      }

   }
});


$('.category-slider').owlCarousel({
   loop: false,
   responsiveClass: true,
   dots: false,
   margin: 15,
   autoplay: false,
   autoplayTimeout: 3000,
   nav: true,
   navText: ["<img src='frontend/img/three/arrow-left.svg'>", "<img src='frontend/img/three/arrow-right.svg'>"],
   responsive: {
      0: {
         items: 2
      },
      576: {
         items: 2
      },
      600: {
         items: 3
      },
      1000: {
         items: 5
      }
   }
});


$('.about-img').owlCarousel({
   loop: true,
   responsiveClass: true,
   dots: false,
   autoplay: true,
   autoplayTimeout: 3000,
   nav: false,
   responsive: {
      0: {
         items: 1,
      },
      600: {
         items: 1,
         nav: false
      },
      1000: {
         items: 1,
         nav: false
      }
   }
});

$('.list-slider').owlCarousel({
   loop: false,
   responsiveClass: true,
   dots: false,
   // margin: 15,
   // stagePadding: 15,
   autoplay: false,
   autoplayTimeout: 3000,
   nav: false,
   responsive: {
      0: {
         items: 3,
      },
      600: {
         items: 6,
         nav: false
      },
      1000: {
         items: 6,
         nav: false
      }
   }
});


$('.products-slider').owlCarousel({
   loop: true,
   responsiveClass: true,
   dots: false,
   margin: 20,
   autoplay: false,
   autoplayTimeout: 3000,
   nav: true,
   navText: ["<i class='las la-arrow-left'></i>", "<i class='las la-arrow-right'></i>"],
   responsive: {
      0: {
         items: 2,
      },
      600: {
         items: 2,
         nav: true
      },
      1000: {
         items: 4,
         nav: true
      }
   }
});


// password
// Input field password type show/hide
function showPassword(id, el) {
   let x = document.getElementById(id);
   if (x.type === 'password') {
      x.type = 'text';
      el.innerHTML =
         '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye-off"><path d="M17.94 17.94A10.07 10.07 0 0 1 12 20c-7 0-11-8-11-8a18.45 18.45 0 0 1 5.06-5.94M9.9 4.24A9.12 9.12 0 0 1 12 4c7 0 11 8 11 8a18.5 18.5 0 0 1-2.16 3.19m-6.72-1.07a3 3 0 1 1-4.24-4.24"></path><line x1="1" y1="1" x2="23" y2="23"></line></svg> ';
   } else {
      x.type = 'password';
      el.innerHTML =
         '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>';
   }
};


/* calling script DETAILS */
$(".xzoom, .xzoom-gallery").xzoom({ tint: '#333', Xoffset: 15 });

$('#plus').click(function add() {
   var $qtde = $("#quantity");
   var a = $qtde.val();

   a++;
   $("#minus").attr("disabled", !a);
   $qtde.val(a);
});
$("#minus").attr("disabled", !$("#quantity").val());

$('#minus').click(function minusButton() {
   var $qtde = $("#quantity");
   var b = $qtde.val();
   if (b >= 1) {
      b--;
      $qtde.val(b);
   } else {
      $("#minus").attr("disabled", true);
   }
});

/*_______________________*/
// payment
$('.pay li').on('click', function () {
   $('li.active').removeClass('active');
   $(this).addClass('active');
});


// dataTable
$(document).ready(function () {
   $('#dataTable-1').DataTable({
      "lengthMenu": [
         [5, 10, 25, 50, -1],
         [5, 10, 25, 50, "All"]
      ]
   });
   $('#dataTable-2').DataTable({
      "lengthMenu": [
         [5, 10, 25, 50, -1],
         [5, 10, 25, 50, "All"]
      ]
   });
   $('#dataTable-3').DataTable({
      "lengthMenu": [
         [5, 10, 25, 50, -1],
         [5, 10, 25, 50, "All"]
      ]
   });
});

// progressBar

progressJs("#progress").start();
progressJs("#progress").set(10).autoIncrease(4, 500); //every 500 milliseconds, percentage + 4



function openFiler() {
   document.getElementById("mb-view").style.width = "100%";
}

function closeFiler() {
   document.getElementById("mb-view").style.width = "0%";
}

$(window).resize(function() {
   if ($(window).width() > 1024) {
       document.getElementById("mb-view").style.width = "100%";
   }
});
$(window).resize(function() {
   if ($(window).width() < 1023) {
       document.getElementById("mb-view").style.width = "0%";
   }
});