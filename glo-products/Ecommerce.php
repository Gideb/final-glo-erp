<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>GLO | Multipurpose Ecommerce Management System</title>
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


  <!-- <header class="header-section">
      <div class="menulogo">
        <div class="logox">
          <img src="../images/glo-logo.png" alt="glo-erp logo" />
        </div>
        <div class="menux sidenav">
          <nav>
            <ul>
              <li><a class="fa-solid fa-home" href="#"></a></li>
              <li><a href="../products.html">Products</a></li>
              <li><a href="../contact.html">Contact</a></li>
              <li><a href="../faq.html">FAQs</a></li>
            </ul>
            <span
              class="fa-solid fa-xmark closebtn"
              onclick="closebtn()"
            ></span>
          </nav>
        </div>
        <span class="fa-solid fa-bars-staggered" onclick="sidenavbtn()"></span>
      </div>
    </header> -->

  <?php include '../includes/gloProdheader.php' ?>

  <main>
    <section id="about-section">
      <div class="about-section ecommerce">
        <h2>GLO Multipurpose E-commerce System</h2>
        <p>Improving online shopping experiences</p>
      </div>
    </section>

    <section id="hero-section">
      <div class="hero-section">
        <h3>
          A complete platform for managing products, orders, payments, and
          customer relationships with ease.
        </h3>
        <p>Reach more customers and boost your sales!</p>

        <div class="card">

          <div class="card-inner">
            <div class="card-front">
              <img
                src="../images/glo-products/banners/gloposshot.png"
                alt="glo ecommerce system screenshot" />
            </div>
            <div class="card-back ecommerce">
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
            src="../images/glo-products/glo-ecommerce.jpg"
            alt="glo POS with inventory management system logo" />
        </div>
        <div class="about-each-text ecommerce">
          <h3>ABOUT GLO Ecommerce System</h3>
          <!-- <p>
            <strong>GLO Ecommerce System</strong> is a powerful, web-based
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
          <p><strong>GLO Multipurpose E-Commerce System</strong> is a versatile solution for businesses looking to sell online across multiple industries. It supports product listings, shopping carts, secure payments, and customer management in one platform. </p>
          <p>With features for order tracking, promotions, and delivery management, it helps businesses provide a smooth online shopping experience. Fully scalable and customizable, GLO Multipurpose E-Commerce System is ideal for startups, SMEs, and established businesses seeking to expand into digital commerce.</p>
        </div>
      </div>
    </section>


    <section id="features">
      <div class="features">
        <h3>Features of Our GLO-<abbr title="Multipurpose E-commerce System">Ecomm</abbr> </h3>

        <div class="features-grid-container">
          <div class="feature">
            <i class="fa-solid fa-dolly ecommerce"></i> <br> <strong class="ecommerce">Product Management</strong> <br><br> Upload, organize, and manage unlimited products.
          </div>
          <div class="feature">
            <i class="fas fa-cart-shopping ecommerce"></i> <br> <strong class="ecommerce">Shopping Cart & Checkout </strong> <br><br> Secure and seamless customer purchases.
          </div>
          <div class="feature">
            <i class="fa-solid fa-truck-fast ecommerce"></i> <br><strong class="ecommerce"> Order & Delivery Tracking</strong> <br><br> Manage orders and track shipments easily.
          </div>
          <div class="feature">
            <i class="fa-solid fa-tag ecommerce"></i> <br><strong class="ecommerce"> Promotions & Discounts </strong> <br> <br> Run campaigns and offer coupons to boost sales.
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
      <div class="installation ecommerce">
        <p>
          GLO Multipurpose E-commerce System can be installed in two modes to
          suit your business needs:
        </p>
        <div class="installation-grid">
          <div class="installation-card online">
            <h4 class="ecommerce">Online Installation</h4>
            <?php include '../includes/onlineInstall.php' ?>

          </div>
          <div class="installation-card offline">
            <h4 class="ecommerce">Offline Installation</h4>
            <?php include '../includes/offlineInstall.php' ?>

          </div>
        </div>
      </div>
    </section>

    <?php include '../includes/gotoContDemo.php' ?>



    <!--  <section id="contact">
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