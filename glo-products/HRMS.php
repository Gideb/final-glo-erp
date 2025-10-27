<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>GLO | Human Resource Management System</title>
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

  <?php include '../includes/gloProdHeader.php' ?>


  <main>
    <section id="about-section">
      <div class="about-section hrms">
        <!--     <h2>GLO Human Resource Management System</h2>
        <p>Streamlining HR operations and empowering your team.</p> -->
      </div>
    </section>

    <section id="hero-section">
      <div class="hero-section">
        <h3>
          Simplify HR processes with a complete solution for managing
          employees, payroll, attendance, and more.
        </h3>
        <p>Boost productivity and streamline HR operations!</p>

        <div class="card">

          <div class="card-inner">
            <div class="card-front">
              <img
                src="../images/glo-products/banners/gloposshot.png"
                alt="glo hrms screenshot" />
            </div>
            <div class="card-back hrms">
              “Simplify employee management, payroll, and performance tracking. Streamline HR processes and enhance workforce productivity.”

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
            src="../images/glo-products/human-resource-management.jpg"
            alt="glo POS with inventory management system logo" />
        </div>
        <div class="about-each-text hrms">
          <h3>ABOUT GLO Human Resource Management System</h3>

          <p><strong>GLO Human Resource Management System</strong> is a comprehensive, future-ready human resource platform built to manage every stage of the employee lifecycle. It simplifies core HR processes such as recruitment, payroll, attendance, and performance management, all while ensuring global compliance and data security. </p>
          <p>With integrated analytics and self-service portals, GLO-HRMS empowers both HR teams and employees with transparency, efficiency, and insight. Scalable and modular, it adapts perfectly to organizations of all sizes and industries.</p>
        </div>
      </div>
    </section>


    <section id="features">
      <div class="features">
        <h3>Features of Our GLO-<abbr title="Human Resource Management System">HRMS</abbr> </h3>

        <div class="features-grid-container">
          <div class="feature">
            <i class="fa-solid fa-address-card hrms"></i> <br> <strong class="hrms">Employee Hub</strong> <br><br> Centralized employee data, organizational hierarchy, and digital document management.
          </div>
          <div class="feature">
            <i class="fas fa-file-invoice-dollar hrms"></i> <br> <strong class="hrms"> Payroll & Workforce Management </strong> <br><br> Integrated attendance, leave tracking, and global payroll processing.
          </div>
          <div class="feature">
            <i class="fa-solid fa-chart-line hrms"></i> <br><strong class="hrms">Performance & Learning </strong> <br><br> Continuous feedback, goal tracking, and personalized learning paths.
          </div>
          <div class="feature">
            <i class="fa-solid fa-house-user hrms"></i> <br><strong class="hrms">Recruitment & Onboarding </strong> <br> <br> Automated job posting, candidate tracking, and paperless onboarding workflows.
          </div>
        </div>

      </div>
    </section>

    <?php include '../includes/demovideo.php' ?>



    <section id="installation">
      <h3>Installation Type</h3>
      <div class="installation hrms">
        <p>
          GLO Human Resource Management System can be installed in two modes to
          suit your business needs:
        </p>
        <div class="installation-grid">
          <div class="installation-card online">
            <h4 class="hrms"><span class="fa-solid fa-cloud"></span> Online Installation</h4>
            <?php include '../includes/onlineInstall.php' ?>

          </div>
          <div class="installation-card offline">
            <h4 class="hrms"><span class="fa-solid fa-server"></span> Offline Installation</h4>
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