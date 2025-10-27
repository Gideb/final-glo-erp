<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>GLO | Hospital Management System</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="stylesheet" href="../css/style.css" />
  <link rel="stylesheet" href="../css/products.css" />
  <link rel="stylesheet" href="../css/singleProduct.css" />
  <link rel="stylesheet" href="../css/product-colors.css" />
  <link rel="icon" href="../images/glo-products/favicon/hospital.png" type="image/png">


</head>

<body>
  <?php include '../includes/loader.php' ?>
  <?php include '../includes/gloProdHeader.php'; ?>

  <main>
    <section id="about-section">
      <div class="about-section hms">
        <!--    <h2>GLO Hospital Management System</h2>
        <p>Improving patient care</p> -->
      </div>
    </section>

    <section id="hero-section">
      <div class="hero-section">
        <h3>
          GLO HMS empowers healthcare professionals streamline hospital
          operations to improve patient care.
        </h3>
        <p>Saving more lives !</p>

        <div class="card">

          <div class="card-inner">
            <div class="card-front">
              <img
                src="../images/glo-products/banners/gloposshot.png"
                alt="glo hospital management system screenshot" />
            </div>
            <div class="card-back hms">
              “Manage patient records, appointments, and billing with ease. Streamline hospital operations and deliver efficient, quality healthcare services.”

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
            src="../images/glo-products/glo-hospital-Management-system.jpg"
            alt="glo POS with inventory management system logo" />
        </div>
        <div class="about-each-text hms">
          <h3>ABOUT GLO Hospital Management System</h3>

          <p>
            <strong>GLO Hospital Management System </strong> is an all-in-one healthcare platform designed to enhance patient care, streamline hospital operations, and ensure regulatory compliance. It integrates modules for patient records, billing, laboratory, pharmacy, and inventory management.
          </p>
          <p> With robust security features and analytics, hospitals can optimize workflows, improve decision-making, and deliver better healthcare outcomes. Whether it’s a small clinic or a large medical center, GLO HMS provides the efficiency and precision healthcare facilities need.

          </p>
        </div>
      </div>
    </section>

    <section id="features">
      <div class="features">
        <h3>Features of Our GLO-<abbr title="Hospital Management System">HMS</abbr> </h3>

        <div class="features-grid-container">
          <div class="feature">
            <i class="fa-solid fa-hospital-user hospital"></i> <br> <strong class="hospital"> Patient & Staff Management </strong> <br><br> Handle appointments, check-ins, and workforce scheduling effortlessly.
          </div>
          <div class="feature">
            <i class="fas fa-notes-medical hospital"></i> <br> <strong class="hospital">Electronic Health Records (EHR)</strong> <br> Centralized patient data with secure access and real-time updates.
          </div>
          <div class="feature">
            <i class="fa-solid fa-file-invoice-dollar hospital"></i> <br><strong class="hospital">Billing & Financial Control </strong> <br><br> Automate invoices, claims, and financial reports for smooth operations.
          </div>
          <div class="feature">
            <i class="fa-solid fa-share-nodes hospital"></i> <br><strong class="hospital">Advanced Modules </strong> <br> Integrated LIS, pharmacy, bed management, and telemedicine support.
          </div>
        </div>

      </div>
    </section>


    <?php include '../includes/demovideo.php' ?>

    <section id="installation">
      <h3>Installation Type</h3>
      <div class="installation hms">
        <p>
          GLO Hospital Management System can be installed in two modes to
          suit your business needs:
        </p>
        <div class="installation-grid">
          <div class="installation-card online">
            <h4 class="hms"><span class="fa-solid fa-cloud"></span> Online Installation</h4>
            <?php include '../includes/onlineInstall.php' ?>

          </div>
          <div class="installation-card offline">
            <h4 class="hms"><span class="fa-solid fa-server"></span> Offline Installation</h4>
            <?php include '../includes/offlineInstall.php' ?>

          </div>
        </div>
      </div>
    </section>

    <?php include '../includes/gotoContDemo.php' ?>




  </main>

  <!-- Footer -->
  <?php include '../includes/gloProdFooter.php' ?>

  <script src="../js/script.js"></script>
  <script src="../js/videodemo.js"></script>



</body>

</html>