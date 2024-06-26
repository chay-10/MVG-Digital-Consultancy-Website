<footer class="site-footer background-change" >
        <div class="container" style="color: darkgray; padding-top: 15px;">
          <div class="row ">
            <div class="col-md-6">
              <span class="heading">Our Company</span>
              <div class="space-align"></div>
              <p>We aim in providing right and specific solutions to clients.
                We take care of the growing market with our knowledge and expertise.</p>
              <div class="space-align"></div>
              <!-- <div class="social-media-buttons">
                <button type="button" class="btn btn-primary linkedIn-button" (click)="linkedIn()"><i
                    class="bi bi-linkedin"></i></button>
              </div> -->
            </div>
            <div class="col-md-6">
              <span class="heading align-items-center justify-content-center">Contact Us</span>
              <div class="space-align"></div>
              <ul class="list-unstyled footer-link">
                <li class="d-flex">
                  <span class="me-3">
                    <i class="bi bi-geo-alt-fill"></i>
                  </span>
                  <span class="tex-white">1st Floor, Col. Dr. Jeppiaar Research Park, Jeppiaar Nagar,<br>
                  Rajiv Gandhi Salai, <br>Chennai - 600 119, India</span>
                </li>
                <!-- <li class="d-flex">
                  <span class="me-3">
                    <i class="bi bi-telephone-fill"></i>
                  </span>
                  <span class="tex-white">+974 44357958</span>
                </li> -->
                <li class="d-flex">
                  <span class="me-3">
                    <i class="bi bi-phone-fill"></i>
                  </span>
                  <span class="tex-white">+974 50216760 </span>
                </li>
                <li class="d-flex">
                  <span class="me-3">
                    <i class="bi bi-envelope-fill"></i>
                  </span>
                  <span class="tex-white">info@mvgdigital.com</span>
                </li>
              </ul>
            </div>
            <!-- <div class="col-md-4">
              <span class="heading">Quick Links</span>
              <div class="space-align"></div>
              <ul class="list-unstyled footer-link">
                <li><a routerLink="/our-company">Our Company</a></li>
                <li><a routerLink="/services">Services</a></li>
                <li><a routerLink="/careers">Careers</a></li>
                <li><a routerLink="/contact">Contact</a></li>
              </ul>
            </div> -->
          </div>
          <hr>
          <div class="row">
            <div class="col-12 text-md center text-center">
              <p style="font-size: 12px;">Copyright @2022: Renetta @ Innoviz systems. All Rights Reserved.</p>
            </div>
          </div>
        </div>
      </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <script>
    AOS.init({
      duration: 3000,
      disable: 'mobile'
    });

    document.querySelectorAll('img').forEach((img) => {
      img.addEventListener('load', () => {
        AOS.refresh()
      })
    });

    $('.clients-carousel').owlCarousel({
        loop: true,
        autoplay: true,
        margin: 15,
        sideTransition: 'linear',
        autoplayTimeout: 1000,
        autoplayHoverPause: true,
        mouseDrag: true,
        touchDrag: true,
        pullDrag: true,
        // dots: true,
        navSpeed: 700,
        navText: ['ddf', 'ewewe'],
        responsive: {
          0: {
            items: 2,
          },
          500: {
            items: 3,
          },
          600: {
            items: 4,
          },
          800: {
            items: 4,
          },
          1200: {
            items: 4,
          },
        },
        nav: false,
    });

  </script>
</body>

</html>