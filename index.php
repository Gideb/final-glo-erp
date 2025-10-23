<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GLO-ERP Solutions</title>
    <!-- SEO Meta Tags -->
    <meta name="description" content="GLO-ERP provides comprehensive enterprise resource planning solutions for various industries including healthcare, hospitality, and education. Streamline your business operations with our powerful software.">
    <meta name="keywords" content="ERP, business solutions, hospital management, hotel software, school management, restaurant POS, human resources, pharmacy, inventory">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link rel="stylesheet" href="../GloERP/css/style.css">
    <link rel="icon" href="../GloERP/images/favicon.png" type="image/png">


</head>

<body>
    <!-- commented out by Gilbert -->
    <!-- Header Section -->
    <!--     <header>
        <div class="logo">GLO-ERP</div>
        <div class="logo">
            <img src="../GloERP/images/glo-logo-faded.png" alt="glo-erp image" >
        </div>
        <nav>
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About GLO-ERP</a></li>
                <li><a href="products.php">Products</a></li>
                <li><a href="contact.php">Request a Demo</a></li>
                <li><a href="contact.php">Contact Us</a></li>
            </ul>
        </nav>
    </header> -->


    <?php include './includes/loader.php' ?>

    <?php include './includes/header.php' ?>

    <!-- Home Section (Carousel) -->
    <section id="home" class="carousel-section">
        <div class="carousel-container">
            <div class="carousel-slide fade">
                <div class="carousel-text">
                    <h1>Streamline Your Business with GLO-ERP</h1>
                    <p>Powerful software solutions for every industry.</p>
                </div>
            </div>
            <div class="carousel-slide fade">
                <div class="carousel-text">
                    <h1>Hotel Management Made Easy</h1>
                    <p>Effortlessly manage bookings, guests, and operations.</p>
                </div>
            </div>
            <div class="carousel-slide fade">
                <div class="carousel-text">
                    <h1>Revolutionize Your School</h1>
                    <p>A complete solution for academic and administrative tasks.</p>
                </div>
            </div>
            <div class="carousel-slide fade">
                <div class="carousel-text">
                    <h1>Multipurpose-Ecommerce System</h1>
                    <p>A complete platform for managing product orders & payments with ease</p>
                </div>
            </div>
            <div class="carousel-slide fade">
                <div class="carousel-text">
                    <h1>PoS with Inventory</h1>
                    <p>A comprehensive point-of-sale solution with real-time inventory tracking.</p>
                </div>
            </div>
        </div>
        //added events in js and took away onclicks-by gil
        <a class="prev">&#10094;</a>
        <a class="next">&#10095;</a>
        <!--  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a> -->
    </section>

    <!-- About GLO-ERP Section -->
    <!-- About GLO-ERP Section -->
    <section id="about">
        <div class="about">
            <div class="about-text">
                <h2>About GLO-ERP</h2>
                <p>GLO-ERP specializes in tailored enterprise resource planning solutions for a wide range of industries. From streamlining <b>hospital management</b> and modernizing <b>restaurant operations</b> to optimizing <b>school administration</b> and <b>human resources</b>, our software is designed to meet your specific needs. We help businesses grow by providing powerful tools that simplify complex tasks, improve efficiency, and foster long-term success.</p>

                <p>Our commitment to innovation and customer satisfaction means you get reliable support, regular updates, and customizable features to ensure your business stays ahead in a competitive market. Discover how GLO-ERP can transform your operations and empower your team to focus on what matters most—your customers and your success.
                    <br><br>
                    If you are looking for a reliable and experienced software development partner, UTS Developers limited is the perfect choice. We have the skills, experience, and dedication to help you achieve your business goals. Contact us today to learn more about our services and how we can help you succeed.
                </p>
            </div>
            <div class="about-img">
                <img src="../GloERP/images/globe.png" alt="a rotating world map">
            </div>
        </div>


    </section>

    <!-- Product Showcase Section -->
    <section id="product-showcase">
        <h2>Our Featured Solutions</h2>
        <div class="product-grid">
            <div class="product-card">
                <div class="product-img">
                    <img src="../GloERP/images/glo-products/glo-hospital-Management-system.jpg" alt="Hospital Management System Icon">
                </div>

                <h3>Hospital Management System</h3>
                <p>Manage patient records, appointments, billing, and more.</p>
            </div>
            <div class="product-card">
                <div class="product-img">
                    <img src="../GloERP/images/glo-products/glo-restaurant.jpg" alt="Restaurant Management System Icon">
                </div>

                <h3>Restaurant Management System</h3>
                <p>Handle orders, tables, inventory, and customer loyalty.</p>
            </div>
            <div class="product-card">
                <div class="product-img">
                    <img src="../GloERP/images/glo-products/glo-sms.jpg" alt="E-Learning Management System Icon">
                </div>

                <h3>E-Learning Management System</h3>
                <p>Deliver courses and track progress in an engaging learning environment.</p>
            </div>
            <div class="product-card">
                <div class="product-img">
                    <img src="../GloERP/images/glo-products/glo-POS.jpg" alt="POS with Inventory System Icon">
                </div>

                <h3>POS with Inventory System</h3>
                <p>A comprehensive point-of-sale solution with real-time inventory tracking and advanced report solutions. Offering you cutting-edge solutions to help you drive better sales.</p>

            </div>
            <div class="product-card">
                <div class="product-img">
                    <img src="../GloERP/images/glo-products/laundry.jpg" alt="Laundry Management System Icon">
                </div>

                <h3>Laundry Management System</h3>
                <p>Automate your laundry business operations, from order tracking and billing to delivery and customer management. Keep your business running smoothly.</p>
            </div>
            <div class="product-card">
                <div class="product-img">
                    <img src="../GloERP/images/glo-products/human-resource-management.jpg" alt="Human Resource Management System Icon">
                </div>

                <h3>Human Resource Management System</h3>
                <p>Streamline HR processes such as employee management, payroll, leave tracking, and performance evaluations. Focus on your people.</p>
            </div>
        </div>
        <div class="button-container">
            <a href="products.php" class="btn">View All Products <i class="fa-solid fa-arrow-up"></i></a>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section id="testimonials">
        <h2>What Our Clients Say</h2>
        <div class="testimonial-container">
            <div class="testimonial-card">
                <p>"GLO-ERP's system transformed our hospital operations. It's user-friendly and incredibly efficient."</p>
                <h4>- Dr. Emily Carter, Lister General Hospital</h4>
            </div>
            <div class="testimonial-card">
                <p>"The POS system has been a game-changer for our restaurant. Inventory management is now so simple."</p>
                <h4>- John Davis, Big-Do Resturant</h4>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php include './includes/footer.php' ?>


    <script src="../GloERP/js/script.js"></script>



</body>

</html>