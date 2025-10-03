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
              “Manage your pharmacy inventory, sales, and prescriptions with ease. Streamline operations and improve accuracy.”

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
          <!--  <p>
            <strong>GLO Human Resource Management System (HRMS)</strong> is a
            comprehensive, web-based platform designed to automate and
            optimize HR operations for organizations of all sizes. The system
            offers intuitive tools for managing employee records, recruitment,
            onboarding, attendance, and leave.
          </p>
          <p>
            HR teams can efficiently handle payroll processing, benefits
            administration, performance appraisals, and compliance tracking.
            Employees have secure access to their profiles, payslips, and
            leave requests, fostering transparency and engagement.
          </p>
          <p>
            Advanced analytics and reporting provide insights into workforce
            trends, helping managers make informed decisions. GLO HRMS is
            scalable, secure, and customizable to fit your unique HR needs.
          </p>
          <p>
            With GLO HRMS, you can reduce manual tasks, minimize errors, and
            focus on building a productive and satisfied workforce.
          </p> -->
          <p><strong>GLO Human Resource Management System</strong> is a complete human resource management solution designed to simplify HR operations and improve employee experience. It automates core HR functions such as recruitment, payroll, attendance, performance evaluation, and compliance tracking.</p>
          <p> With self-service portals for employees and managers, it reduces paperwork and ensures smoother workflows. GLO HRMS empowers organizations to manage their workforce effectively while fostering productivity, transparency, and employee satisfaction.</p>
        </div>
      </div>
    </section>


    <section id="features">
      <div class="features">
        <h3>Features of Our GLO-<abbr title="Human Resource Management System">HRMS</abbr> </h3>

        <div class="features-grid-container">
          <div class="feature">
            <i class="fa-solid fa-address-card hrms"></i> <br> <strong class="hrms">Employee Records </strong> <br><br> Centralized staff profiles with personal and work details.
          </div>
          <div class="feature">
            <i class="fas fa-file-invoice-dollar hrms"></i> <br> <strong class="hrms">Payroll & Attendance </strong> <br><br> Automated payroll, leave tracking, and time management.
          </div>
          <div class="feature">
            <i class="fa-solid fa-chart-line hrms"></i> <br><strong class="hrms"> Performance Management </strong> <br><br> Track appraisals, reviews, and skill development.
          </div>
          <div class="feature">
            <i class="fa-solid fa-house-user hrms"></i> <br><strong class="hrms">Self-Service Portal </strong> <br> <br> Allow employees to manage requests and view payslips.
          </div>
        </div>

      </div>
    </section>

    <section id="demo">
      <h3>Watch Our Demo</h3>
      <div class="demo-video">
        <iframe
          src="https://www.youtube.com/embed/https://www.youtu.be/b1_yZDLJlA0"
          width="100%"
          height="600"
          title="demo video"
          frameborder="0"
          allowfullscreen></iframe>
      </div>
    </section>



    <section id="installation">
      <h3>Installation Type</h3>
      <div class="installation hrms">
        <p>
          GLO Human Resource Management System can be installed in two modes to
          suit your business needs:
        </p>
        <div class="installation-grid">
          <div class="installation-card online">
            <h4 class="hrms">Online Installation</h4>
            <?php include '../includes/onlineInstall.php' ?>

          </div>
          <div class="installation-card offline">
            <h4 class="hrms">Offline Installation</h4>
            <?php include '../includes/offlineInstall.php' ?>

          </div>
        </div>
      </div>
    </section>

    <?php include '../includes/gotoContDemo.php' ?>



    <!-- <section id="contact">
      <div class="contact">
        <h4>
          Do you have any questions or inquiries? Feel free to reach out to us!
        </h4>
        <div class="button-container">
          <a class="btn" href="contact.php">Request a Demo</a>
          <a class="btn" href="contact.php">Contact Us</a>
        </div>
      </div>
    </section> -->

  </main>

  <!-- Footer -->
  <?php include '../includes/footer.php' ?>
  <script src="../js/script.js"></script>
</body>

</html>