<?php include('header.php'); ?>

    <!-- about us page -->
    <div class="about-us container">
      <!-- Section for 3 Pictures -->
      <div class="row">
          <div class="col-md-4">
              <img src="img_about/plazh.jpg" class="img-responsive" alt="Picture 1">
          </div>
          <div class="col-md-4">
              <img src="img_about/histori.jpg" class="img-responsive" alt="Picture 2">
          </div>
          <div class="col-md-4">
              <img src="img_about/mal.jpg" class="img-responsive" alt="Picture 3">
          </div>
      </div>

      <!-- Background and Philosophy Section -->
      <div class="row">
          <div class="col-md-6 about-box">
              <h2>Background Information</h2>
              <p>Albania is a country with a rich history and diverse cultural heritage, located in the heart of the Balkans. Known for its stunning landscapes, ranging from pristine beaches along the Adriatic and Ionian seas to majestic mountains and ancient ruins, Albania offers a unique blend of natural beauty and historical significance. Our team is deeply rooted in this vibrant culture and is dedicated to showcasing the best of what Albania has to offer, from its welcoming people to its centuries-old traditions. We strive to provide an authentic experience, whether you are exploring the bustling cities,or the picturesque coastline..</p>
          </div>
          <div class="col-md-6 about-box">
              <h2>Our Philosophy</h2>
              <p>Our philosophy is grounded in the belief that travel is not just about visiting new places, but about immersing oneself in the local culture and creating meaningful connections. We are committed to promoting sustainable tourism that respects the environment and honors the heritage of Albania. By working closely with local communities and businesses, we aim to provide our visitors with genuine experiences that reflect the true essence of Albania. We believe in responsible travel that leaves a positive impact, ensuring that the beauty and culture of Albania can be enjoyed by future generations</p>
          </div>
      </div>

      <!-- Staff Carousel -->
      <div id="staffCarousel" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
              <li data-target="#staffCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#staffCarousel" data-slide-to="1"></li>
              <li data-target="#staffCarousel" data-slide-to="2"></li>
          </ol>

          <!-- Wrapper for slides -->
          <div class="carousel-inner">
              <div class="item active">
                  <img src="img_about/worker.jpg" alt="Staff 1">
                  <div class="carousel-caption">
                      <h3>Andi Hoxha</h3>
                      <p>CEOs</p>
                  </div>
              </div>

              <div class="item">
                  <img src="img_about/worker2.jpg" alt="Staff 2">
                  <div class="carousel-caption">
                      <h3>Sokol Abazi</h3>
                      <p>Drejtor</p>
                  </div>
              </div>

              <div class="item">
                  <img src="img_about/staff.jpg" alt="Staff 3">
                  <div class="carousel-caption">
                      <h3>Full Staff</h3>
                      <p>Skuadra Marketingut</p>
                  </div>
              </div>
          </div>

          <!-- Left and right controls -->
          <a class="left carousel-control" href="#staffCarousel" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#staffCarousel" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next</span>
          </a>
      </div>
  </div>

<?php include('footer.php'); ?>
