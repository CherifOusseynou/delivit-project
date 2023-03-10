<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delivit</title>
    <link rel="shortcut icon" href="/images/about/logo-delivit.png" type="/image/png" />



    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesone 5 CDN-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>

    <!-- Style CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive-style.css">
    
    <!-- Jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>
  
</head>
<body class="home">
    <!-- Navbar Section Start-->
    <header id="full_nav">
        <div class="header fixed-top">
            <div class="container">
                <nav class="navbar navbar-expand-lg">
                    <a class="navbar-brand" href="/">
                        <img src="./images/about/logo-delivit.png" class="img-fluid">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <!--<span class="navbar-toggler-icon"></span>-->
                    <i class="fas fa-stream navbar-toggler-icon"></i>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.html">Accueil</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="about.html">Qui sommes-nous ?</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" 
                            data-bs-toggle="dropdown" aria-expanded="false">
                              Services
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href="integration-digitale.html">INTEGRATION DIGITALE</a></li>
                                <li><a class="dropdown-item" href="expertise-aif.html">EXPERTISE AIF</a></li>
                                <li><a class="dropdown-item" href="architecture-si.html">ARCHITECTURE SI</a></li>
                                <li><a class="dropdown-item" href="securite-api.html">SECURITE API</a></li>
                                <li><a class="dropdown-item" href="aif-architecture.html">AIF ARCHITECTURE</a></li>
                                <li><a class="dropdown-item" href="expertise-axway.html">EXPERTISE AXWAY</a></li>
                            </ul>
                          </li>
                        <li class="nav-item">
                        <a class="nav-link" href="contact.html">Contact</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="blog.html">Blog</a>
                        </li>
                    </ul>
                    </div>
                    <div class="text-center">
                        <a href="devis.html" class="btn-theme fw-600 fs-13" button-type="HEADER_QUOTATION_BUTTON">
                            Demandez un devis!
                        </a>
                    </div>
                </nav>
            </div>
        </div>
    </header>

    <!--Home Securite API start-->
    <section class="banner-services">
        <div class="container-services">
            <div class="row">
                <div class="col-lg-6 mb-6 order-lg-1 order-2">
                        <div class="text-main" >
                            <h2 class="text-main">
                                SÉCURITE API
                            </h2>
                        </div>
                </div>
                <div class="">
                    <img class="img-id" src="./images/hover/data-security(1).png">
                </div>
            </div>
        </div>
    </section>
    <!--Home Securite API Exit-->

    <section>
        <div class="containercontact">
            <form  id="contactForm" action="send_mail.php">
                <div class="alert">Votre message a été bien envoyé</div>
                <div class="inputBox">
                    <input type="text" id="name" placeholder="Nom">
                </div>
                <div class="inputBox">
                    <input type="email" id="email" placeholder="Email">
                </div>
                <div class="inputBox">
                    <input type="msgContent" cols="30" rows="10" placeholder="Message">
                </div>
                <div class="inputBox">
                    <button type="submit">Envoyer</button>
                </div>
            </form>
        </div>
    </section>

    <!-- Témoignages start-->
    <section class="testimonials-section">
        <div class="testimonials-container">
            <div class="row pb-5">
                <div class="col-12 text-center">
                    <h2 class="section-title"></h2>
                    <p class="section-subtitle"></p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-8 col-md-10">
                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                             <div class="d-sm-flex row">
                                <div class="profile-box col-sm-5">
                                    <img src="./images/team/dummy.jpg" class="img-fluid">
                                </div>
                                <div class="card col-sm-7">
                                    <div class="desc-box">
                                        <p class="fst-italic">Ils font du bon travail travail
                                            rapide et efficace
                                            avec un bon design professionnel
                                            ilsont répondu à toutes mes attentes
                                        </p>
                                        <div class="my-4">
                                            <h4>Modou Mbacké</h4>
                                            <p class="m-0 text-white">Happy Customers</p>
                                        </div>
                                        <img src="./images/team/qoutes.svg" class="float-end">
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <div class="carousel-item">
                            <div class="d-sm-flex row">
                               <div class="profile-box col-sm-5">
                                   <img src="./images/team/AHMADOU.jpg" class="img-fluid">
                               </div>
                               <div class="card col-sm-7">
                                   <div class="desc-box">
                                       <p class="fst-italic">Ils font du bon travail travail
                                           rapide et efficace
                                           avec un bon design professionnel
                                           ilsont répondu à toutes mes attentes
                                       </p>
                                       <div class="my-4">
                                           <h4>Sylla Mbacké</h4>
                                           <p class="m-0 text-white">Happy Customers</p>
                                       </div>
                                       <img src="./images/team/qoutes.svg" class="float-end">
                                   </div>
                               </div>
                           </div>
                           
                       </div>
                        <div class="carousel-item">
                            <div class="d-sm-flex row">
                                <div class="profile-box col-sm-5">
                                    <img src="./images/team/dummy.jpg" class="img-fluid">
                                </div>
                                <div class="card col-sm-7">
                                    <div class="desc-box">
                                        <p class="fst-italic">Ils font du bon travail travail
                                           rapide et efficace
                                           avec un bon design professionnel
                                           ilsont répondu à toutes mes attentes
                                        </p>
                                        <div class="my-4">
                                           <h4>Modou Konaté</h4>
                                           <p class="m-0 text-white">Happy Customers</p>
                                        </div>
                                        <img src="./images/team/qoutes.svg" class="float-end">
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Next</span>
                        </button>
                      </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Témoignages Exit-->

    
    <section class="footer-distributed">
        <div class="footer-left">
            <img src="./images/about/logo-delivit.png" alt="">

            <p class="footer-links">
                <a href="about.html">Qui Sommes Nous</a>
                |
                <a href="integration-digitale.html">Services </a>
                |
                <a href="contact.html">Contact</a>
                |
                <a href="blog.html">Blog</a>
            </p>

            <p class="footer-compagny-name">© 2023 Tous droits réservés -<strong> Delivit Consulting SARL</strong><br/>
                </p>
        </div>
        <div class="footer-center">
            <div>
                <a href=""><i class="fas fa-map-marker-alt"></i></a>
                <p><span>Hann Maristes</span>Dakar-SENEGAL</p>
            </div>
            <div>
                <a href=""><i class="fas fa-phone-alt"></i></a>
                <p>(+221) 77 456 90 50</p>
            </div>
            <div>
                <a href=""><i class="fas fa-envelope"></i></a>
                <a class="mail" href="mailto:cheikh.sylla@delivitconsult.com">cheikh.sylla@delivitconsult.com</a>
            </div>
        </div>

        <div class="footer-right">
            <p class="footer-compagny-about">
                <span>About the compagny</span>
                DelivIT Consulting est une entreprise moderne et agile qui accompagne ses clients dans leur transformation digitale.
            </p>
            <div class="footer-icons">
                <a href=""><i class="fab fa-facebook-f"></i></a>
                <a href=""><i class="fab fa-twitter"></i></a>
                <a href=""><i class="fab fa-linkedin-in"></i></a>
            </div>
        </div>
    </section>



    <!-- Bootstrap 5 CDN Link-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
    <!-- Custom JS -->
    <script src="js/main.js"></script>
    <script src="js/app.js"></script>

    <!-- Jquery -->
    <script>
        $(document).ready(function(){
            $(".counter-up-up").counterUp({
                delay: 10,
                time: 1200,
            });
        });
    </script>
    
    
</body>
</html>