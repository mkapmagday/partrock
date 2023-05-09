
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url({{asset('img/breadcrumbs-bg.jpg')}});">
        <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">
  
          <h2>Contact</h2>
          <ol>
            <li><a href="{{route('home')}}">Home</a></li>
            <li>Contact</li>
          </ol>
  
        </div>
      </div><!-- End Breadcrumbs -->
  
      <!-- ======= Contact Section ======= -->
      <section id="contact" class="contact">
        <div class="container" data-aos="fade-up" data-aos-delay="100">
  
          <div class="row gy-4">
            <div class="col-lg-6">
              <div class="info-item  d-flex flex-column justify-content-center align-items-center">
                <i class="bi bi-map"></i>
                <h3>Our Address</h3>
                <p>                Tower 4 Unit 7-O Little Baguio Terraces, N. Domingo St., San Juan City
</p>
              </div>
            </div><!-- End Info Item -->
  
            <div class="col-lg-3 col-md-6">
              <div class="info-item d-flex flex-column justify-content-center align-items-center">
                <i class="bi bi-envelope"></i>
                <h3>Email Us</h3>
                <p>partrockservices@gmail.com</p>
              </div>
            </div><!-- End Info Item -->
  
            <div class="col-lg-3 col-md-6">
              <div class="info-item  d-flex flex-column justify-content-center align-items-center">
                <i class="bi bi-telephone"></i>
                <h3>Call Us</h3>
                <p>(+632) 8813-4231 </p>
                <p>(+63) 999-220-3248  </p>

              </div>
            </div><!-- End Info Item -->
  
          </div>
  
          <div class="row gy-4 mt-1">
  
            <div class="col-lg-6 ">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3860.790683489866!2d121.02774457596249!3d14.610996576820307!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397b7f91ca636e1%3A0xcd34682df897508b!2sTower%204%20Little%20Baguio%20Terraces!5e0!3m2!1sen!2sph!4v1682868543473!5m2!1sen!2sph" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>            </div><!-- End Google Maps -->
  
            <div class="col-lg-6">
              <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                <div class="row gy-4">
                  <div class="col-lg-6 form-group">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                  </div>
                  <div class="col-lg-6 form-group">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                  </div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                </div>
                <div class="my-3">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>
                </div>
                <div class="text-center"><button type="submit">Send Message</button></div>
              </form>
            </div><!-- End Contact Form -->
  
          </div>
  
        </div>
      </section><!-- End Contact Section -->
  