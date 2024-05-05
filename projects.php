<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="icofont/icofont.min.css" rel="stylesheet">
    <link href="boxicons/css/boxicons.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">

    <link rel="shortcut icon" href="image/fav.png" type="image/x-icon">
    <meta name="description" content=" Grapgic designing | web development | content writting | tutoring">
    <title>Designwiz Portfolio</title>
</head>
<body>

    <header id="header">
      <div class="d-flex flex-column">
        <div class="profile">
          <img src="image/designwiz.png" alt="" class="image-fluid rounded-circle">
          <h1 class="text-light">DesignWiz</h1>
          <div class="social-links mt-3 text-center">
            <a href="https://web.facebook.com/OfficialDesignWiz/" target="_blank" class="facebook"><i class="bx bxl-facebook"></i></a>
            <a href="https://www.instagram.com/offical_design_wiz/" target="_blank" class="instagram"><i class="bx bxl-instagram"></i></a>
            <a href="https://wa.me/message/VHWMGTLN2TYKA1" target="_blank" class="whatsapp"><i class="bx bxl-whatsapp"></i></a>
            <a href="https://www.linkedin.com/in/designwiz/" target="_blank" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            <a href="https://www.fiverr.com/prospergeorge28" target="_blank" class="fiver fw-bold">fi</a>
          </div>
        </div>
 
        <!--==== Navigation ====-->
        <nav class="nav-menu">

          <ul id="myFilters">
           <li class=""> <a class="text-white" role="button" onclick="window.history.go(-1); return false"> <i class="bx bx-left-arrow-alt"> </i> <span> Back </span> </a> </li>
           <li class="noload filter-active" data-filter="*"> <a href=""> <i class="bx bx-user"> </i> <span> All </span> </a> </li>
           <li class="noload" data-filter=".web"> <a href=""> <i class="bx bx-laptop"> </i> <span> Web </span> </a> </li>
           <li class="noload" data-filter=".design"> <a href=""> <i class="bx bx-laptop"></i> <span> Design </span> </a> </li>
           <li class="noload" data-filter=".myCaseStudy"> <a href=""> <i class="bx bx-laptop"></i> <span> Case Study </span> </a> </li>
          </ul>
        </nav>

        <!--==== end nav menu ====-->

        <div class="naveToggle d-flex d-lg-none align-items-center justify-content-between rounded-pill ps-3">
            <span>Menu</span>
            <div class="bars d-flex flex-column align-items-end justify-content-center">
                <div class="bar1"></div>
                <div class="bar2"></div>
                <div class="bar3"></div>
            </div>
        </div>

      </div>
    </header>
  
    <main>

      <section id="projects" class="projects border-bt">

        <div class="container">

          <div class="row mt-5">

            <div class="col-xl-4 projectList col-md-6 mb-4 mt-1">
              <div class="box design myCaseStudy">

                <div class="img">
                  <img src="image/project/designs/design1.png" alt="Shawarma Shop Vibes: Creative Banner Design">
                </div>

                <div class="name">
                  Shawarma Shop Vibes: Creative Banner Design
                </div>

                <div class="purchase d-flex justify-content-between">
                  <div role="button" class="projectImg d-flex align-items-center" data-filter="Shawarma Shop Vibes: Creative Banner Design" data-id="/image/project/designs/design1.png" onclick="enlarge(this)">
                    View Design
                  </div>

                  <button class="my-btn" onclick="caseStudy(this)" data-content="info one <br> testing">Info</button>
                </div>

              </div>

            </div>

            <div class="col-xl-4 projectList col-md-6 mb-4 mt-1">
              <div class="box design">

                <div class="img">
                  <img src="image/project/designs/design4.png" alt="Point of Sale: Creative Design Solutions">
                </div>

                <div class="name">
                  Point of Sale: Creative Design Solutions
                </div>

                <div class="purchase d-flex justify-content-between">
                  <div role="button" class="projectImg" data-filter="Point of Sale: Creative Design Solutions" data-id="/image/project/designs/design4.png" onclick="enlarge(this)">
                    View Design
                  </div>
                </div>

              </div>

            </div>

            <div class="col-xl-4 projectList col-md-6 mb-4 mt-1">
              <div class="box design">

                <div class="img">
                  <img src="image/project/designs/design6.png" alt="Cool Concepts: Ice Cube Company Design Showcase">
                </div>

                <div class="name">
                  Cool Concepts: Ice Cube Company Design Showcase
                </div>

                <div class="purchase d-flex justify-content-between">
                  <div role="button" class="projectImg" data-filter="Cool Concepts: Ice Cube Company Design Showcase" data-id="/image/project/designs/design6.png" onclick="enlarge(this)">
                    View Design
                  </div>
                </div>

              </div>

            </div>
<!--==== 
            <div class="col-md-12 projectList mb-4 mt-1">
              <div class="box d-block d-xl-flex web">

                <div class="col-12 col-xl-6">
                  <div class="img">

                    <img src="image/project/project2.png" alt="">
                  </div>
                </div>

                <div class="col-12 col-xl-6">

                  <div class="py-4 px-md-3">

                    <div class="d-flex justify-content-between align-items-center">
                      <div class="name">
                        Website Name
                      </div>
                      <i class="i">i</i>
                    </div>

                    <div class="miniTitle">
                      Worked on
                    </div>

                    <div class="my-3">
                      <a> Website </a>
                      <a class="ms-2"> Admin Panel </a>
                    </div>

                    <div class="miniTitle">
                      Technologies i have used
                    </div>

                    <div class="my-2">
                      <span> <img src="image/techs/wordpress2.png" alt=""> </span>
                      <span> <img src="image/techs/coreldraw2.png" alt=""> </span>
                      <span> <img src="image/techs/javascript2.png" alt=""> </span>
                      <span> <img src="image/techs/nextjs2.png" alt=""> </span>
                      <span> <img src="image/techs/wordpress2.png" alt=""> </span>
                      <span> <img src="image/techs/react2.png" alt=""> </span>
                      <span> <img src="image/techs/coreldraw2.png" alt=""> </span>
                      <span> <img src="image/techs/bootstrap2.png" alt=""> </span>
                    </div>

                    <button class="my-btn2 mt-1 mx-0"> <i class="bx bx-link"></i> Go to WWebsite </button>

                  </div>

                </div>
              </div>
            </div> ====-->

            <div class="col-xl-4 projectList col-md-6 mb-4 mt-1">
              <div class="box design">

                <div class="img">
                  <img src="image/project/designs/design3.png" alt="Thank You Card Design: Thoughtful Gestures">
                </div>

                <div class="name">
                  Thank You Card Design: Thoughtful Gestures
                </div>

                <div class="purchase d-flex justify-content-between">
                  <div role="button" class="projectImg" data-filter="Thank You Card Design: Thoughtful Gestures" data-id="/image/project/designs/design3.png" onclick="enlarge(this)">
                    View Design
                  </div>
                </div>

              </div>

            </div>

            <div class="col-xl-4 projectList col-md-6 mb-4 mt-1 d-none">
              <div class="box design">

                <div class="img">
                  <img src="image/project/designs/design7.png" alt="Thank You Card Design: Thoughtful Gestures">
                </div>

                <div class="name">
                  Thank You Card Design: Thoughtful Gestures
                </div>

                <div class="purchase d-flex justify-content-between">
                  <div role="button" class="projectImg" data-filter="Thank You Card Design: Thoughtful Gestures" data-id="/image/project/designs/design7.png" onclick="enlarge(this)">
                    View Design
                  </div>
                </div>

              </div>

            </div>
            <div class="col-xl-4 projectList col-md-6 mb-4 mt-1 d-none">
              <div class="box design">

                <div class="img">
                  <img src="image/project/designs/design9.png" alt="Thank You Card Design: Thoughtful Gestures">
                </div>

                <div class="name">
                  Thank You Card Design: Thoughtful Gestures
                </div>

                <div class="purchase d-flex justify-content-between">
                  <div role="button" class="projectImg" data-filter="Thank You Card Design: Thoughtful Gestures" data-id="/image/project/designs/design9.png" onclick="enlarge(this)">
                    View Design
                  </div>
                </div>

              </div>

            </div>

            <div class="col-xl-4 projectList col-md-6 mb-4 mt-1">
              <div class="box design">

                <div class="img">
                  <img src="image/project/designs/design2.png" alt="Shawarma Banner Design: Flavorful Promotions">
                </div>

                <div class="name d-flex align-items-center">
                  Shawarma Banner Design: Flavorful Promotions
                </div>

                <div class="purchase d-flex justify-content-between">
                  <div role="button" class="projectImg" data-filter="Shawarma Banner Design: Flavorful Promotions" data-id="/image/project/designs/design2.png" onclick="enlarge(this)">
                    View Design
                  </div>
                </div>

              </div>

            </div>

            <div class="col-xl-4 projectList col-md-6 mb-4 mt-1">
              <div class="box design">

                <div class="img">
                  <img src="image/project/designs/design8.png" alt="Fryer Favorites: Guomia Recipe Book Cover Design">
                </div>

                <div class="name">
                  Fryer Favorites: Guomia Recipe Book Cover Design
                </div>

                <div class="purchase d-flex justify-content-between">
                  <div role="button" class="projectImg" data-filter="Fryer Favorites: Guomia Recipe Book Cover Design" data-id="/image/project/designs/design8.png" onclick="enlarge(this)">
                    View Design
                  </div>
                </div>

              </div>

            </div>

            <!--==== <div class="col-md-12 projectList mb-4 mt-1">
              <div class="box d-block d-xl-flex web">

                <div class="col-12 col-xl-6">
                  <div class="img">

                    <img src="image/project/project2.png" alt="">
                  </div>
                </div>

                <div class="col-12 col-xl-6">

                  <div class="py-4 px-md-3">

                    <div class="d-flex justify-content-between align-items-center">
                      <div class="name">
                        Website Name
                      </div>
                      <i class="i">i</i>
                    </div>

                    <div class="miniTitle">
                      Worked on
                    </div>

                    <div class="my-3">
                      <a> Website </a>
                      <a class="ms-2"> Admin Panel </a>
                    </div>

                    <div class="miniTitle">
                      Technologies i have used
                    </div>

                    <div class="my-2">
                      <span> <img src="image/techs/wordpress2.png" alt=""> </span>
                      <span> <img src="image/techs/coreldraw2.png" alt=""> </span>
                      <span> <img src="image/techs/javascript2.png" alt=""> </span>
                      <span> <img src="image/techs/nextjs2.png" alt=""> </span>
                      <span> <img src="image/techs/wordpress2.png" alt=""> </span>
                      <span> <img src="image/techs/react2.png" alt=""> </span>
                      <span> <img src="image/techs/coreldraw2.png" alt=""> </span>
                      <span> <img src="image/techs/bootstrap2.png" alt=""> </span>
                    </div>

                    <button class="my-btn2 mt-1 mx-0"> <i class="bx bx-link"></i> Go to WWebsite </button>

                  </div>

                </div>
              </div>
            </div> ====-->

          </div>

        </div>

      </section>

      <section id="resume" class="resume border-bt">

        <div class="container">

          <div class="heading">
            <span> Connect <br class="d-sm-none"> with us </span> <br>
            <h3> Connect <br class="d-sm-none"> with us  </h3>
          </div>

          <div class="row mt-5">
            <div class="col-md-12">
              <div class="box">

                 <div class="img mx-auto">
                  <img src="image/designwiz.png" alt="An image our logo">
                </div>

                <div class="name mx-auto">
                  DesignWiz
                </div>

                <div class="position">
                  Graphic Designing / Front End Developmrnt / Wordpress Development / Freelancing
                </div>

                <div class="resumeBtn d-flex justify-content-center">
                  <a role="button" id="shareBook" class="my-btn2"> <i class="bx bx-share"></i> Share page </a>
                  <a href="https://wa.me/message/VHWMGTLN2TYKA1" target="_blank" class="my-btn"> Discuss Project </a>
                </div>
                <div class="fiverrBtn">
                  <a href="https://www.fiverr.com/prospergeorge28" target="_blank"> <img src="image/hobbies/fiver.png" alt="fiverr"> </a>
                </div>

              </div>
            </div>
          </div>
        </div>

      </section>

      <?php include_once("contact_form.php"); ?>

      <div class="caseStudy px-4 invisibleBox" id="caseStudy">

          <div class="bars d-flex flex-column align-items-center justify-content-center closeCaseStudy">
            <div class="bar1"></div>
            <div class="bar2"></div>
          </div>

          <div class="contentBox">

            <div class="title">
              Case Study
            </div>

            <div class="text" id="text">
              ducimus.
            </div>

        </div>
      </div>

      <section id="lightBox" class="lightBox">
        <div class="body">

          <div class="top">
            <div></div>
            <div class="name text-center">
              Banner Design for a shawarma store
            </div>
            <div class="close" role="button">
              X
            </div>
          </div>

          <div class="center">

            <i class="bx bx-left-arrow-alt left prevImg"></i>

            <div class="img">
              <img src="image/project/designs/design6.png" id="enlargedImg" alt="design">
              <div class="turner"></div>
            </div>

            <i class="bx bx-right-arrow-alt right nextImg"></i>
          </div>

          <div class="bottom"></div>

        </div>

      </section>

      <section class="">
        <p class="text-center text-white"> Copyright © 2024 designwiz </p>
      </section>

    </main>

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/nav.js"></script>
<script src="js/portfolio.js"></script>
</body>
</html>