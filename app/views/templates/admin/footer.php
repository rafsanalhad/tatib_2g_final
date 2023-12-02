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
        const modalKompen = document.getElementById('static-modal-kompen');
        const showModalKompen = () => {
          $('.sidebar').addClass('sidebar-backdrop');
          modalKompen.classList.remove('hidden');
        }
        const tutupModalKompen = document.getElementById('tutupModalKompen');
        const tutupModalKompen2 = document.getElementById('tutupModalKompen2');


        tutupModalKompen.addEventListener('click', function() {
          $('.sidebar').removeClass('sidebar-backdrop');
          modalKompen.classList.add('hidden');
        });
        tutupModalKompen2.addEventListener('click', function() {
          $('.sidebar').removeClass('sidebar-backdrop');
          modalKompen.classList.add('hidden');
        });

        const showModal = () => {
          const modal = document.getElementById('static-modal');
          $('.sidebar').addClass('sidebar-backdrop');
          modal.classList.remove('hidden');
        }


        const buttonTambahDosen = document.getElementById('buttonTambahDosen');
        const staticModal = document.getElementById('static-modal');
        const tutupModal = document.getElementById('tutupModal');
        const tutupModa2 = document.getElementById('tutupModal2');



        tutupModal.addEventListener('click', function() {
          $('.sidebar').removeClass('sidebar-backdrop');
          staticModal.classList.add('hidden');
        });
        tutupModal2.addEventListener('click', function() {
          $('.sidebar').removeClass('sidebar-backdrop');
          staticModal.classList.add('hidden');
        });
      </script>
  </body>

  </html>