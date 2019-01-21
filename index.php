<?php include_once "koneksi.php" ?>

<!-- Header -->
<?php include_once "header.php"; ?>

    <!-- Header -->
    <header class="masthead">
      <div class="container d-flex h-100 align-items-center">
        <div class="mx-auto text-center">
          <h1 class="mx-auto my-0 text-uppercase">GIS PADI</h1>
          <h2 class="text-white-50 mx-auto mt-2 mb-5">Sistem Informasi Geografis Persebaran Padi di Area Malang</h2>
          <a href="#footer" class="btn btn-primary js-scroll-trigger">Check</a>
        </div>
      </div>
    </header>

    <!-- peta Section -->
    <section id="peta" class="about-section text-center">
      <?php include_once "petaSection.php" ?>
    </section>

    <!-- lahan Section -->
    <section id="lahan" class="projects-section bg-light">
      <?php include_once "lahanSection.php" ?>
    </section>


<!-- Footer -->
<section id="footer" class="projects-section bg-light">
<?php include_once "footer.php" ?>
</section>
