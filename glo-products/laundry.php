<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>GLO | Laundry Management System</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="stylesheet" href="../css/style.css" />
  <link rel="stylesheet" href="../css/products.css" />
  <link rel="stylesheet" href="../css/singleProduct.css" />
  <link rel="stylesheet" href="../css/product-colors.css" />
  <link rel="icon" href="../images/favicon.png" type="image/png">


</head>

<body>
  <?php include '../includes/loader.php' ?>
  <?php include '../includes/gloProdheader.php' ?>

  <main>
    <section id="about-section">
      <div class="about-section laundry">
        <h2>GLO Laundry Management System</h2>
        <p>Laundry at it's best</p>
      </div>
    </section>

    <section id="hero-section">
      <div class="hero-section">
        <h3>
          Automate your laundry business operations, from order tracking and billing to delivery and customer management.
        </h3>
        <p>Reach more customers and boost your sales!</p>

        <div class="card">

          <div class="card-inner">
            <div class="card-front">
              <img
                src="../images/glo-products/banners/gloposshot.png"
                alt="glo laundry management system screenshot" />
            </div>
            <div class="card-back laundry">
              “Manage customer orders, track laundry status, and handle payments effortlessly. Streamline operations and deliver timely, quality service.”

              <div class="card-button">

                <a class="btn" href="../demo.php"><span class="far fa-bell"></span> &nbsp;Request a Demo</a>

              </div>
            </div>

          </div>
        </div>
      </div>
    </section>

    <section id="about-each">
      <div class="about-each-grid-container">
        <div class="about-each-img">
          <img
            src="../images/glo-products/laundry.jpg"
            alt="glo POS with laundry Management System logo" />
        </div>
        <With class="about-each-text laundry">
          <h3>ABOUT GLO Laundry Management System</h3>

          <p><strong> GLO Laundry Management System </strong> is a complete laundry and dry-cleaning management system built to digitize and optimize every step of the workflow — from order intake to delivery. It supports retail and commercial laundries with modules for POS, production control, delivery logistics, and analytics.</p>
          <p> With RFID/barcode garment tracking, automated billing, and real-time order visibility, GLO-LMS ensures operational accuracy, customer satisfaction, and cost efficiency at scale</p>
      </div>
      </div>
    </section>


    <section id="features">
      <div class="features">
        <h3>Features of Our GLO-<abbr title="Laundry Management System">LMS</abbr> </h3>

        <div class="features-grid-container">
          <div class="feature">
            <i class="fas fa-desktop   laundry"></i> <br> <strong class="laundry">Smart Order Management </strong> <br><br> Multi-channel order intake via POS, mobile app, or web portal.
          </div>
          <div class="feature">
            <i class="fas fa-box laundry"></i> <br> <strong class="laundry">Production Control </strong> <br><br> Track wash cycles, QC checks, and machine performance in real time.
          </div>
          <div class="feature">
            <i class="fas fa-truck-fast laundry"></i> <br><strong class="laundry">Logistics & Delivery </strong> <br><br> Optimize pickup and delivery routes with GPS tracking and proof-of-delivery.
          </div>
          <div class="feature">
            <i class="fa-solid fa-comment-dollar laundry"></i> <br><strong class="laundry"> Business Intelligence </strong> <br> <br> Get performance insights with dashboards for sales, staff, and machine usage.
          </div>
        </div>

      </div>
    </section>


    <?php include '../includes/demovideo.php' ?>

    <section id="installation">
      <h3>Installation Type</h3>
      <div class="installation laundry">
        <p>
          GLO Laundry Management System can be installed in two modes to
          suit your business needs:
        </p>
        <div class="installation-grid">
          <div class="installation-card online">
            <h4 class="laundry"><span class="fa-solid fa-cloud"></span> Online Installation</h4>
            <?php include '../includes/onlineInstall.php' ?>

          </div>
          <div class="installation-card offline">
            <h4 class="laundry"><span class="fa-solid fa-server"></span> Offline Installation</h4>
            <?php include '../includes/offlineInstall.php' ?>

          </div>
        </div>
      </div>
    </section>

    <?php include '../includes/gotoContDemo.php' ?>



  </main>

  <!-- Footer -->
  <?php include '../includes/gloProdFooter.php' ?>


  <!-- js links -->
  <script src="../js/script.js"></script>
  <script src="../js/videodemo.js"></script>



</body>

</html>