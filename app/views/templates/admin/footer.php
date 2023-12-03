<script>
        const checkWidth = () => {
          var windowWidth = $(window).width();
          var sidebar = $(".sidebar");

          if (windowWidth <= 768) {
            sidebar.addClass("fixed_sidebar");
            $('.containerBarsMobile').removeClass("toggle_bars_mobile");
            $('.containerBarsDefault').css('visibility', 'hidden');
            $('.containerBars_toggled').css('visibility', 'hidden');
          } else {
            sidebar.removeClass("fixed_sidebar");
            $('.containerBarsMobile').addClass("toggle_bars_mobile");
            $('.containerBarsDefault').css('visibility', 'visible');
            $('.containerBars_toggled').css('visibility', 'visible');
          }
        }
        $(document).ready(function() {
          checkWidth();
          $('.toggle_bars').on("click", function() {
            $('.sidebar').toggleClass('sidebar_toggled');
            $('.main').toggleClass('main_toggled');
          });

          $(window).resize(function() {
            checkWidth();
            // anjay 
          });
        });
      </script>
  </body>

  </html>