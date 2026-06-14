<?php
include 'db.php';
session_start();
?>

<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BrightPath</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <header class="fixed-top bg-light">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">
                    <i class="fas fa-user-graduate"></i> BrightPath
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item"><a href="index.php" class="nav-link">الرئيسية</a></li>
                        <li class="nav-item"><a href="admin.php" class="nav-link">الطلاب</a></li>
                    </ul>

                    <?php if(isset($_SESSION['logged'])): ?>
                        <span class="navbar-text">مرحبا <?= $_SESSION['name'] ?> </span>
                        <a href="logout.php" class="btn btn-outline-danger ms-3">تسجيل خروج</a>
                    <?php else: ?>
                        <a href="login.php" class="btn btn-outline-primary ms-3">تسجيل دخول</a>
                        <a href="signup.php" class="btn btn-primary ms-2">إنشاء حساب</a>
                    <?php endif; ?>
                </div>
            </div>
        </nav>
    </header>

    <section class="bg-light">
        <div id="demo" class="carousel slide position-relative" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                        <img src="images/img1.jpg" alt="" class="d-block img-fluid w-100" style="height: 100vh; object-fit: cover;">
                    <div class="position-absolute bottom-0 start-50 translate-middle-x mb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-7 col-md-9 col-12">
                                    <div class="card bg-dark bg-opacity-50 text-white text-center p-4 border rounded-3">
                                        <h5 class="card-title fw-bold fs-4">Learn Without Limits</h5>
                                        <p class="card-text">Explore thousands of courses across various fields and enhance your skills anytime, anywhere. Start your learning journey today!</p>
                                        <a href="#" class="btn btn-outline-primary btn-sm w-50 mx-auto">Call Us</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    <div class="carousel-item">
                            <img src="images/img2.jpg" alt="" class="d-block img-fluid w-100" style="height: 100vh; object-fit: cover;">
                        <div class="position-absolute bottom-0 start-50 translate-middle-x mb-5">
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-lg-7 col-md-9 col-12">
                                        <div class="card bg-dark bg-opacity-50 text-white text-center p-4 border rounded-3">
                                            <h5 class="card-title fw-bold fs-4">Master HTML & CSS</h5>
                                            <p class="card-text">Learn how to build beautiful and responsive websites from scratch. Gain hands-on experience with HTML structure and CSS styling to bring your designs to life!</p>
                                            <a href="#" class="btn btn-outline-primary btn-sm w-50 mx-auto">Call Us</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <div class="carousel-item">
                        <img src="images/img3.jpg" alt="" class="d-block img-fluid w-100" style="height: 100vh; object-fit: cover;">
                    <div class="position-absolute bottom-0 start-50 translate-middle-x mb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-7 col-md-9 col-12">
                                    <div class="card bg-dark bg-opacity-50 text-white text-center p-4 border rounded-3">
                                        <h5 class="card-title fw-bold fs-4">Master JavaScript</h5>
                                        <p class="card-text">Unlock the power of dynamic web development! Learn JavaScript from the basics to advanced concepts and bring interactivity to your websites with confidence.</p>
                                        <a href="#" class="btn btn-outline-primary btn-sm w-50 mx-auto">Call Us</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                        <img src="images/img4.jpg" alt="" class="d-block img-fluid w-100" style="height: 100vh; object-fit: cover;">
                    <div class="position-absolute bottom-0 start-50 translate-middle-x mb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-7 col-md-9 col-12">
                                    <div class="card bg-dark bg-opacity-50 text-white text-center p-4 border rounded-3">
                                        <h5 class="card-title fw-bold fs-4">Design Stunning UI/UX</h5>
                                        <p class="card-text">Learn the art of creating intuitive and visually appealing interfaces. Master user experience principles and design tools to craft websites and apps that users love!</p>
                                        <a href="#" class="btn btn-outline-primary btn-sm w-50 mx-auto">Call Us</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
            </div>
            <div class="position-fixed top-50 end-0 translate-middle-y me-3 me-md-4 d-flex flex-column gap-2" style="z-index: 1050;">
                <a href="#" class="btn btn-primary btn-sm mb-2">
                    <i class="fa-brands fa-facebook"></i>
                </a>
                <a href="#" class="btn btn-primary btn-sm mb-2">
                    <i class="fa-brands fa-whatsapp"></i>
                </a>
                <a href="#" class="btn btn-primary btn-sm mb-2">
                    <i class="fa-brands fa-instagram"></i>
                </a>
                <a href="#" class="btn btn-primary btn-sm">
                    <i class="fa-brands fa-linkedin-in"></i>
                </a>
            </div>
        </div>
    </section>
    <section class="bg-light pb-1">
        <div class="bg-secondary text-white p-4">
            <h5 class="display-6 fw-bold mb-4 text-primary">Welcome</h5>
            <p class="fs-5">Discover a new way to master web development with hands-on courses, 
            real-world projects, and 1-on-1 expert mentors. 
            Go from complete beginner to job-ready developer in months — not years. 
            Build a stunning portfolio, earn industry-recognized certificates, 
            and get direct support from developers who work at top tech companies. 
            No boring theory. No outdated content. Just fast, practical, 
            career-changing skills that actually get you hired.</p>
            <button class="btn btn-primary btn-md px-5 mt-4 fw-bold shadow">Start Learning Now</button>
        </div>
        <hr class="border border-dark border-1">
        <div class="bg-secondary text-white p-4 text-center fst-italic">
            <p class="fw-bold fs-4">The Most In-Demand Skills That Actually Get You Hired in 2026</p>
        </div>
        <hr class="border border-dark border-1">
        <div class="accordion" id="coursesAccordion">
            <div class="accordion-item">
                <h2 class="accordion-header">
                <button class="accordion-button collapsed bg-secondary text-white p-4 shadow-none" 
                        type="button" data-bs-toggle="collapse" data-bs-target="#htmlCss">
                    HTML & CSS Mastery
                </button>
                </h2>
                <div id="htmlCss" class="accordion-collapse collapse" data-bs-parent="#coursesAccordion">
                    <div class="accordion-body">
                        Build pixel-perfect, responsive websites from day one. Learn modern layouts with Flexbox and Grid, create stunning animations, and master the fundamentals that every professional developer needs.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                <button class="accordion-button collapsed bg-secondary text-white p-4 shadow-none" 
                        type="button" data-bs-toggle="collapse" data-bs-target="#js">
                    JavaScript & Modern Frameworks
                </button>
                </h2>
                <div id="js" class="accordion-collapse collapse" data-bs-parent="#coursesAccordion">
                    <div class="accordion-body">
                    Bring your websites to life with interactive features. Master JavaScript ES6+, work with APIs, and build powerful single-page applications using React – the framework used by Facebook, Netflix, and Airbnb.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                <button class="accordion-button collapsed bg-secondary text-white p-4 shadow-none" 
                        type="button" data-bs-toggle="collapse" data-bs-target="#fullstack">
                    Full-Stack Development
                </button>
                </h2>
                <div id="fullstack" class="accordion-collapse collapse" data-bs-parent="#coursesAccordion">
                    <div class="accordion-body">
                        Become a complete developer. Connect frontend to backend with Node.js, Express, and MongoDB. Build and deploy real-world projects like e-commerce platforms, dashboards, and social apps – exactly what companies are hiring for right now.
                    </div>
                </div>
            </div>
        </div>
        <hr class="border border-dark border-1">
        <div class="bg-secondary text-white p-4">
            <p class="lead fw-bold fs-4 fst-italic text-center">Instant Code Converter</p>
            <div class="bg-light text-dark p-4 rounded-3">
                <p>Paste Your Code – Convert Instantly</p>
                <button class="btn btn-primary shadow-none mb-4">Copy</button>
                <br>
                <textarea class="form-control shadow-none" placeholder="Messy code in → Perfect code out" rows="5"></textarea>
            </div>
        </div>
        <hr class="border border-dark border-1">
    </section>
    <section class="bg-light skills" style="margin-top: 250px; margin-bottom: 250px;">
        <div class="bg-secondary text-white p-4 text-center">
            <p class="lead fw-bold fs-4">Most In-Demand Skills for 2026</p>
        </div>
        <div class="container">
            <div class="row justify-content-center row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-3 g-3 p-5">
                <div class="col">
                    <div class="card bg-secondary">
                        <video controls>
                            <source src="images/vid1.mp4" type="video/mp4">
                        </video>
                        <div class="card-body">
                            <h4 class="card-title">HTML & CSS Mastery</h4>
                            <p class="card-text">modern web design workspace with code on screen, clean laptop, dark theme, minimalist</p>
                            <a href="#" class="btn btn-primary">SHOW</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card bg-secondary">
                        <video controls>
                            <source src="images/vid2.mp4" type="video/mp4">
                        </video>
                        <div class="card-body">
                            <h4 class="card-title">JavaScript Essentials</h4>
                            <p class="card-text">Master ES6+, DOM, APIs, and create interactive web experiences that users love.</p>
                            <a href="#" class="btn btn-primary">SHOW</a>
                        </div>
                    </div>
                </div>
                    <div class="col">
                        <div class="card bg-secondary">
                            <video controls>
                                <source src="images/vid3.mp4" type="video/mp4">
                            </video>
                            <div class="card-body">
                                <h4 class="card-title">React.js Mastery</h4>
                                <p class="card-text">Build powerful single-page apps like Facebook and Netflix using hooks, context, and routing.</p>
                                <a href="#" class="btn btn-primary">SHOW</a>
                            </div>
                        </div>
                    </div>
                <div class="col">
                    <div class="card bg-secondary">
                        <video controls>
                            <source src="images/vid4.mp4" type="video/mp4">
                        </video>
                        <div class="card-body">
                            <h4 class="card-title">Full-Stack Development</h4>
                            <p class="card-text">Become a complete Full-Stack developer – master the most in-demand tech stack today.</p>
                            <a href="#" class="btn btn-primary">SHOW</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card bg-secondary">
                        <video controls>
                            <source src="images/vid5.mp4" type="video/mp4">
                        </video>
                        <div class="card-body">
                            <h4 class="card-title">Next.js & Modern Stack</h4>
                            <p class="card-text">Learn server-side rendering, static sites, and the framework used by top startups worldwide.</p>
                            <a href="#" class="btn btn-primary">SHOW</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card bg-secondary">
                        <video controls>
                            <source src="images/vid6.mp4" type="video/mp4">
                        </video>
                        <div class="card-body">
                            <h4 class="card-title">Tailwind CSS Mastery</h4>
                            <p class="card-text">Design beautiful UIs 10x faster with utility-first CSS — no more writing custom styles.</p>
                            <a href="#" class="btn btn-primary">SHOW</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card bg-secondary">
                        <video controls>
                            <source src="images/vid7.mp4" type="video/mp4">
                        </video>
                        <div class="card-body">
                            <h4 class="card-title">Portfolio & Job Projects</h4>
                            <p class="card-text">Build 10+ real-world projects that impress recruiters and get you hired fast worldwide professionally.</p>
                            <a href="#" class="btn btn-primary">SHOW</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card bg-secondary">
                        <video controls>
                            <source src="images/vid8.mp4" type="video/mp4">
                        </video>
                        <div class="card-body">
                            <h4 class="card-title">1-on-1 Career Mentoring</h4>
                            <p class="card-text">Personal guidance, code reviews, resume building, and interview prep with senior developers.</p>
                            <a href="#" class="btn btn-primary">SHOW</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="thankYou bg-light">
        <hr class="border border-dark border-1 pt-3 bg-light">
    <div class="bg-secondary text-white p-4 text-center">
        <p class="lead fw-bold fs-4">Meet Our Expert Instructors</p>
    </div>
    <div class="container py-5">
        <div class="row justify-content-center g-4">
            <div class="col-12 col-md-6 col-lg-4">
                <div class="position-relative thankYou-card"
                    style="background-image: url('images/img6.jpg');
                            background-size: cover;
                            background-position: center;
                            height: 350px;
                            border-radius: 20px;">
                    <div class="position-absolute top-0 start-0 w-100 h-100
                                d-flex flex-column justify-content-center
                                text-center text-white p-3"
                        style="background-color: rgba(0,0,0,0.5); border-radius: 20px;">
                        <h4>Eng. Ahmed Khaled</h4>
                        <p class="small">Thanks and appreciation – June 2023 🕔</p>
                        <div class="w-25 mx-auto mb-2">
                            <img src="images/img6.jpg" class="w-100 rounded-circle">
                        </div>
                        <p class="fw-bold mb-1">Lead Full-Stack Instructor</p>
                        <p class="small mb-0">
                            Senior developer with 10+ years of experience at top tech companies.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <div class="position-relative thankYou-card"
                    style="background-image: url('images/img7.jpg');
                            background-size: cover;
                            background-position: center;
                            height: 350px;
                            border-radius: 20px;">
                    <div class="position-absolute top-0 start-0 w-100 h-100
                                d-flex flex-column justify-content-center
                                text-center text-white p-3"
                        style="background-color: rgba(0,0,0,0.5); border-radius: 20px;">
                        <h4>Eng. Sara Mahmoud</h4>
                        <p class="small">Thanks and appreciation – June 2023 🕔</p>
                        <div class="w-25 mx-auto mb-2">
                            <img src="images/img7.jpg" class="w-100 rounded-circle">
                        </div>
                        <p class="fw-bold mb-1">UI/UX & Front-End Specialist</p>
                        <p class="small mb-0">
                            Professional designer and instructor who has worked with international startups.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <div class="position-relative thankYou-card"
                    style="background-image: url('images/img8.jpg');
                            background-size: cover;
                            background-position: center;
                            height: 350px;
                            border-radius: 20px;">
                    <div class="position-absolute top-0 start-0 w-100 h-100
                                d-flex flex-column justify-content-center
                                text-center text-white p-3"
                        style="background-color: rgba(0,0,0,0.5); border-radius: 20px;">
                        <h4>Eng. Mohamed Ali</h4>
                        <p class="small">Thanks and appreciation – June 2023 🕔</p>
                        <div class="w-25 mx-auto mb-2">
                            <img src="images/img8.jpg" class="w-100 rounded-circle">
                        </div>
                        <p class="fw-bold mb-1">JavaScript & Career Mentor</p>
                        <p class="small mb-0">
                            Expert JavaScript developer and career coach, experienced in building scalable apps and guiding
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="bg-light py-5 px-3">
    <div class="text-white p-4 text-center">
        <p class="lead fw-bold fs-1 text-secondary">Learning News</p>
    </div>
    <div class="card shadow-lg border-0 mb-4 overflow-hidden w-100 m-auto Learning-news">
        <div class="row g-0">
            <div class="col-12 col-sm-5 order-1 order-sm-2 image-box1 image-box position-relative overflow-hidden">
                <img src="images/img13.jpg"
                    class="img-fluid w-100 h-100 object-fit-cover" alt="" style="min-height: 100%; max-height: 400px;">
            </div>
            <div class="col-12 col-sm-7 p-4 p-lg-5 order-2 order-sm-1">
                <h4 class="text-primary fw-bold">New Full-Stack Bootcamp Just Launched</h4>
                <small class="text-muted d-block mb-3">Tue, January 20, 2026</small>
                <p class="text-secondary">
                We are thrilled to officially launch our brand-new Full-Stack MERN Bootcamp at BrightPath! This intensive program is carefully designed to take you from complete beginner to job-ready professional in just 6 months. You'll master MongoDB, Express, React, Node.js, build real-world full-stack projects, receive daily mentor support, get personalized code reviews, and enjoy intensive technical interview preparation. Seats are extremely limited — don't miss this life-changing opportunity to start your journey toward a high-paying tech career in today's competitive global job market.
                </p>
                <div class="d-flex gap-2 flex-wrap">
                    <span class="btn btn-primary"><i class="fa-solid fa-headphones"></i> Podcast</span>
                    <span class="btn btn-primary"><i class="fa-solid fa-stopwatch"></i> 38 min</span>
                    <a href="#" class="btn btn-primary"><i class="fa-solid fa-play"></i> Play Episode</a>
                </div>
            </div>
        </div>
  </div>
  <div class="card shadow-lg border-0 mb-4 overflow-hidden w-100 m-auto Learning-news">
        <div class="row g-0">
            <div class="col-12 col-sm-5 order-1 order-sm-2 image-box2 image-box position-relative overflow-hidden">
                <img src="images/img14.jpg"
                    class="img-fluid w-100 object-fit-cover" alt="" style="min-height: 100%; max-height: 400px;">
            </div>
            <div class="col-12 col-sm-7 p-4 p-lg-5 order-2 order-sm-2">
                <h4 class="text-primary fw-bold">Free Live Workshop: Master Tailwind CSS in One Day</h4>
                <small class="text-muted d-block mb-3">Fri, January 15, 2026</small>
                <p class="text-secondary">
                Meet Omar from Gaza — a true inspiration who started with zero coding experience.
                In just 4 months, he landed his first job as a Front-End Developer.
                This achievement came after completing our HTML, CSS & JavaScript Mastery track.
                In this episode, Omar shares his journey and the challenges he faced.
                He explains how hands-on lessons and real projects shaped his growth.
                He highlights the impact of daily mentor support and code reviews.
                Finally, he shares key tips that helped him pass technical interviews with confidence.</p>
                <div class="d-flex gap-2 flex-wrap">
                    <span class="btn btn-primary"><i class="fa-solid fa-headphones"></i> Podcast</span>
                    <span class="btn btn-primary"><i class="fa-solid fa-stopwatch"></i> Live Event</span>
                    <span href="#" class="btn btn-primary"><i class="fa-solid fa-play"></i> Register Now</span>
                </div>
            </div>
        </div>
  </div>
  <div class="card shadow-lg border-0 mb-4 overflow-hidden w-100 m-auto Learning-news">
        <div class="row g-0">
            <div class="col-12 col-sm-5 order-1 order-sm-2 image-box1 image-box position-relative overflow-hidden">
                <img src="images/img15.jpg"
                    class="img-fluid w-100 object-fit-cover" alt="" style="min-height: 100%; max-height: 400px;">
            </div>
            <div class="col-12 col-sm-7 p-4 p-lg-5 order-2 order-sm-1">
                <h4 class="text-primary fw-bold">From Zero to Hired in 4 Months – Real Student Story</h4>
                <small class="text-muted d-block mb-3">Sun, January 25, 2026</small>
                <p class="text-secondary">
                Join our exciting free live workshop: Master Tailwind CSS in One Day! In just 3 hours, you'll discover how to create beautiful, fully responsive user interfaces 10 times faster using Tailwind CSS — without ever writing custom CSS from scratch again. This session is perfect for both beginners and intermediate developers, featuring live practical exercises, professional tips & tricks, and real-time Q&A with the instructor. Spots are very limited and fill up quickly — register right now to secure your place and level up your design skills this weekend!
                </p>
                <div class="d-flex gap-2 flex-wrap">
                    <span class="btn btn-primary"><i class="fa-solid fa-headphones"></i> Podcast</span>
                    <span class="btn btn-primary"><i class="fa-solid fa-stopwatch"></i> 52 min</span>
                    <a href="#" class="btn btn-primary"><i class="fa-solid fa-play"></i> Play Episode</a>
                </div>
            </div>
        </div>
  </div>
  <div class="card shadow-lg border-0 mb-4 overflow-hidden w-100 m-auto Learning-news">
        <div class="row g-0">
            <div class="col-12 col-sm-5 order-1 order-sm-2 image-box2 image-box position-relative overflow-hidden">
                <img src="images/img16.jpg"
                    class="img-fluid w-100 object-fit-cover" alt="" style="min-height: 100%; max-height: 400px;">
            </div>
            <div class="col-12 col-sm-7 p-4 p-lg-5 order-2 order-sm-2">
                <h4 class="text-primary fw-bold">Big Update: New AI Code Assistant Coming Soon</h4>
                <small class="text-muted d-block mb-3">Wed, January 10, 2026</small>
                <p class="text-secondary">
                A major update is coming to the BrightPath platform!
                We are extremely excited to introduce our brand-new AI-Powered Code Assistant.
                This powerful assistant is fully integrated into your learning experience.
                It offers instant code suggestions and even fixes errors automatically.
                It helps you debug projects efficiently and provides personalized learning recommendations.
                This feature is designed to speed up your development journey for learners of all skill levels.
                Stay tuned for the official release, coming in the next few weeks!
                </p>
                <div class="d-flex gap-2 flex-wrap">
                    <span class="btn btn-primary"><i class="fa-solid fa-headphones"></i> Podcast</span>
                    <span class="btn btn-primary"><i class="fa-solid fa-stopwatch"></i> 27 min</span>
                    <a href="#" class="btn btn-primary"><i class="fa-solid fa-play"></i> Listen to Preview</a>
                </div>
            </div>
        </div>
  </div>
</section>
<section class="row d-flex justify-content-center align-items-center gap-3 p-5 bg-light social-medea">
    <div class=" text-center card-media col-12 col-md-6 col-lg-4">
        <h2 class="fs-4">Subscribe Now</h2>
        <img src="images/img9.png" alt="" class="w-50 h-50 rounded-circle"><br>
        <a href="#" class="text-decoration-none">Go To Link</a>
    </div>
    <div class=" text-center card-media col-12 col-md-6 col-lg-4">
        <h2 class="fs-4">Subscribe Now</h2>
        <img src="images/img10.jpg" alt="" class="w-50 h-50 rounded-circle"><br>
        <a href="#" class="text-decoration-none">Go To Link</a>
    </div>
    <div class=" text-center card-media col-12 col-md-6 col-lg-4">
        <h2 class="fs-4">Subscribe Now</h2>
        <img src="images/img11.jpg" alt="" class="w-50 h-50 rounded-circle"><br>
        <a href="#" class="text-decoration-none">Go To Link</a>
    </div>
    <div class=" text-center card-media col-12 col-md-6 col-lg-4">
        <h2 class="fs-4">Subscribe Now</h2>
        <img src="images/img12.jpg" alt="" class="w-50 h-50 rounded-circle"><br>
        <a href="#" class="text-decoration-none">Go To Link</a>
    </div>
</section>
<footer class="bg-light py-4 px-3">
    <hr class="border border-dark border-1 bg-light w-100">
    <div class="row text-center ">
        <div class=" col-12 col-lg-4 mb-4 border-bottom border-secondary border-1">
            <i class="fas fa-user-graduate fs-1 text-primary"></i> 
            <h2 class="fs-4 mt-2">BrightPath Academy</h2>
            <p>Tel: +972-59-715-8402</p>
            <p>Address: Gaza, Palestine</p>
            <p>Fax: +972-8-000-0000</p>
        </div>
        <div class=" col-12 col-lg-4 mb-4 border-bottom border-secondary border-1">
            <i class="fas fa-user-graduate fs-1 text-primary"></i> 
            <h2 class="fs-4 mt-2">Important Links</h2>
            <p>Visit Us</p>
            <p>Take A Look</p>
            <p>Your Future Is More Important</p>
        </div>
        <div class=" col-12 col-lg-4 mb-4 border-bottom border-secondary border-1">
            <i class="fas fa-user-graduate fs-1 text-primary"></i> 
            <h2 class="fs-4 mt-2">Our Vision</h2>
            <p>Learn From Anywhere</p>
            <p>Master In-Demand Skills</p>
            <p>Land Your Dream Tech Job</p>
        </div>
    </div>
    <div class="text-center">
        <p class="text-primary">© 2025 BrightPath. All Rights Reserved. Designed & Developed By Eng. Ahmed Issa</p>
    </div>
</footer>

    <script src="js/bootstrap.bundle.min.js"></script>
    <script>
        const toastEl = document.getElementById('myToast')
        const toast = new bootstrap.Toast(toastEl)

        document.getElementById('showToastBtn').addEventListener('click', () => {
            toast.show()
        })
</body>
</html>