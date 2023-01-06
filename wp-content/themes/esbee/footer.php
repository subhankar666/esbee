<!-- Footer start -->

<footer>
     <div class="container">
       <div class="row">
         <div class="col-lg-4 col-12">
            <?php dynamic_sidebar('footer-1');?>
         </div>
         <div class="col-lg-4 col-12 my-footer">
            <?php dynamic_sidebar('footer-2');?>
         </div>
         <div class="col-lg-4 col-12 my-footer">
            <?php dynamic_sidebar('footer-3');?>
         </div>
       </div>
     </div>

   </footer>

   <div class="container-fluid justify-content-center copy-right">
       <p>Copyright © 2022 | Design & Developed By Magicmind Technologies</p>
     </div>

<!-- Footer end -->
    <?php wp_footer();?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- Menu -->
    <script type="text/javascript">
      (function($) {
        "use strict";
        $(function() {
          var header = $(".start-style");
          $(window).scroll(function() {
            var scroll = $(window).scrollTop();
            if (scroll >= 10) {
              header.removeClass('start-style').addClass("scroll-on");
            } else {
              header.removeClass("scroll-on").addClass('start-style');
            }
          });
        });
        //Animation
        $(document).ready(function() {
          $('body.hero-anime').removeClass('hero-anime');
        });
        //Menu On Hover
        $('body').on('mouseenter mouseleave', '.nav-item', function(e) {
          if ($(window).width() > 750) {
            var _d = $(e.target).closest('.nav-item');
            _d.addClass('show');
            setTimeout(function() {
              _d[_d.is(':hover') ? 'addClass' : 'removeClass']('show');
            }, 1);
          }
        });
        //Switch light/dark
        $("#switch").on('click', function() {
          if ($("body").hasClass("dark")) {
            $("body").removeClass("dark");
            $("#switch").removeClass("switched");
          } else {
            $("body").addClass("dark");
            $("#switch").addClass("switched");
          }
        });
      })(jQuery);
    </script>
    <!-- Testimonial slider -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script type="text/javascript">
      jQuery("#carousel").owlCarousel({
        autoplay: true,
        rewind: true,
        /* use rewind if you don't want loop */
        margin: 20,
        /*
  animateOut: 'fadeOut',
  animateIn: 'fadeIn',
  */
        responsiveClass: true,
        autoHeight: true,
        autoplayTimeout: 7000,
        smartSpeed: 800,
        nav: true,
        responsive: {
          0: {
            items: 1
          },
          600: {
            items: 2
          },
          1024: {
            items: 3
          },
          1366: {
            items: 3
          }
        }
      });
    </script>
  </body>
</html>
