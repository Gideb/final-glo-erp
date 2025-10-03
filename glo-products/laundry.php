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
            src="../images/glo-products/laundry.jpg"
            alt="glo POS with laundry Management System logo" />
        </div>
        <div class="about-each-text laundry">
          <h3>ABOUT GLO Laundry Management System</h3>
          <!--  <p>
            <strong>GLO Laundry Management System</strong> is a powerful, web-based
            solution designed for businesses of all sizes to sell products and
            services online. The platform offers a user-friendly interface for
            both merchants and customers, making online shopping simple and
            secure.
          </p>
          <p>
            Easily manage your product catalog, inventory, pricing, and
            promotions. Customers can browse products, add items to their
            cart, and complete purchases with secure payment options. The
            system supports multiple payment gateways and shipping methods for
            maximum flexibility.
          </p>
          <p>
            Advanced order management tools help you track orders, process
            returns, and communicate with customers. Built-in analytics and
            reporting features provide insights into sales performance,
            customer behavior, and inventory trends.
          </p>
          <p>
            GLO Ecommerce System is scalable, customizable, and integrates
            seamlessly with other business tools. Enhance your online
            presence, improve customer satisfaction, and grow your business
            with GLO.
          </p> -->
          <strong> GLO Laundry Management System </strong> is a powerful, cloud-based solution built to simplify the operations of laundry and dry-cleaning businesses. From customer order tracking to inventory and billing, the system ensures accuracy, speed, and customer satisfaction. </p>
          <p>With features for managing garments, automating notifications, and controlling expenses, GLO Laundry Management System enhances efficiency while reducing manual errors. Whether you run a small laundry shop or a large-scale dry-cleaning business, the platform helps you serve customers better while boosting profitability.</p>
        </div>
      </div>
    </section>


    <section id="features">
      <div class="features">
        <h3>Features of Our GLO-<abbr title="Laundry Management System">LMS</abbr> </h3>

        <div class="features-grid-container">
          <div class="feature">
            <i class="fas fa-house-user laundry"></i> <br> <strong class="laundry">Order Tracking</strong> <br><br> Manage laundry orders from drop-off to delivery.
          </div>
          <div class="feature">
            <i class="fas fa-warehouse laundry"></i> <br> <strong class="laundry">Inventory Management </strong> <br><br> Track garments, detergents, and supplies in real time.
          </div>
          <div class="feature">
            <i class="far fa-comments laundry"></i> <br><strong class="laundry"> Customer Engagement </strong> <br><br> Automated SMS/email alerts for order updates.
          </div>
          <div class="feature">
            <i class="fa-solid fa-money-check-dollar laundry"></i> <br><strong class="laundry">Billing & Payments</strong> <br> <br> Generate invoices and accept multiple payment options.
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
      <div class="installation laundry">
        <p>
          GLO Laundry Management System can be installed in two modes to
          suit your business needs:
        </p>
        <div class="installation-grid">
          <div class="installation-card online">
            <h4 class="laundry">Online Installation</h4>
            <?php include '../includes/onlineInstall.php' ?>

          </div>
          <div class="installation-card offline">
            <h4 class="laundry">Offline Installation</h4>
            <?php include '../includes/offlineInstall.php' ?>

          </div>
        </div>
      </div>
    </section>

    <?php include '../includes/gotoContDemo.php' ?>


    <!--   <section id="contact">
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