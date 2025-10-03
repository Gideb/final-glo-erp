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
            src="../images/glo-products/glo-hospital-Management-system.jpg"
            alt="glo POS with inventory management system logo" />
        </div>
        <div class="about-each-text hms">
          <h3>ABOUT GLO Hospital Management System</h3>
          <!--  <p>
            <strong>GLO Hospital Management System (HMS)</strong> is a robust,
            web-based solution designed to optimize every aspect of hospital
            operations. With an intuitive interface and powerful modules, GLO
            HMS helps healthcare providers deliver efficient, high-quality
            patient care while streamlining administrative tasks.
          </p>
          <p>
            The system enables seamless management of patient records,
            appointments, admissions, discharges, and transfers. Doctors and
            nurses can easily access medical histories, treatment plans, and
            diagnostic results, ensuring informed decision-making and
            continuity of care.
          </p>

          <p>
            The system is built with security and compliance in mind,
            safeguarding sensitive patient data and supporting regulatory
            requirements.
          </p>
          <p>
            Whether you run a small clinic or a large hospital, GLO HMS adapts
            to your needs, helping you improve operational efficiency, reduce
            errors, and focus on what matters most—patient health and
            satisfaction.
          </p> -->
          <p>
            <strong>GLO Hospital Management System </strong> is a comprehensive, cloud-based healthcare solution designed to streamline hospital operations, improve patient care, and optimize resource management. It integrates patient registration, electronic medical records, billing, pharmacy, laboratory, and staff management into a single platform.
          </p>
          <p>
            By automating workflows and ensuring data accuracy, GLO Hospital Management System enhances operational efficiency, reduces errors, and enables healthcare providers to focus on what matters most — delivering quality care. Scalable and secure, it is suitable for hospitals, clinics, and healthcare centers of all sizes.

          </p>
        </div>
      </div>
    </section>

    <section id="features">
      <div class="features">
        <h3>Features of Our GLO-<abbr title="Hospital Management System">HMS</abbr> </h3>

        <div class="features-grid-container">
          <div class="feature">
            <i class="fa-solid fa-hospital-user hospital"></i> <br> <strong class="hospital"> Patient Management</strong> <br><br> Register patients, track medical history, and manage appointments.
          </div>
          <div class="feature">
            <i class="fas fa-notes-medical hospital"></i> <br> <strong class="hospital">Electronic Medical Records (EMR) </strong> <br> Store and access patient diagnoses, lab results, and treatment plans securely.
          </div>
          <div class="feature">
            <i class="fa-solid fa-toolbox hospital"></i> <br><strong class="hospital">Billing & Finance </strong> <br><br> Handle invoices, insurance claims, and payments seamlessly.
          </div>
          <div class="feature">
            <i class="fa-solid fa-briefcase-medical hospital"></i> <br><strong class="hospital">Resource & Staff Management</strong> <br> Manage doctors, nurses, schedules, and hospital assets efficiently.
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
      <div class="installation hms">
        <p>
          GLO Hospital Management System can be installed in two modes to
          suit your business needs:
        </p>
        <div class="installation-grid">
          <div class="installation-card online">
            <h4 class="hms">Online Installation</h4>
            <?php include '../includes/onlineInstall.php' ?>

          </div>
          <div class="installation-card offline">
            <h4 class="hms">Offline Installation</h4>
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