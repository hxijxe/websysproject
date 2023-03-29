<!DOCTYPE html>
<html lang="en-GB">

<head>

  <link rel="stylesheet" href="css/styles.css">
  <title>SIT Active Gym Blog</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
</head>

<?php
include "nav.inc.php";
?>

<body>
  <header class="about-section text-center">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 ">
                <div class="col-lg-8" style="text-align: left;">
                    <h1 style="color: red;">Blog</h1>
                    <h2 class="text-white mb-4">Stay up to date with the current fitness scene. </h2>
                </div>
            </div>
        </div>
  </header>

  <main>
    <div class="album py-5 bg-light">
      <div class="container">
        <div class="row py-3">
          <div class="col-md-4" >
            <div class="card h-100 mb-4 box-shadow">
              <img class="card-img-top" src="img/swim.jpg" alt="swim">
              <div class="card-body" >
                <h5 class="text-muted">Hai Jie Di Lai</h5>
                <p class="card-text">I enjoy the flexible timetable of booking the classes for swimming.</p>
                <div class="d-flex justify-content-between align-items-center">
                  <a href="blog_article_haijiedilai.php" class="text-muted" >3 mins</a>
                </div>
              </div>
            </div>
          </div>
        
          <div class="col-md-4">
            <div class="card h-100 mb-4 box-shadow">
              <img class="card-img-top" src="img/yoga.jpg" alt="swim">
              <div class="card-body">
                <h5 class="text-muted">Lee Shee Ree</h5>
                <p class="card-text">I love the relaxing yoga sessions. Would recommend and bring my friends here next time</p>
                <div class="d-flex justify-content-between align-items-center">
                  <small class="text-muted">7 mins</small>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card h-100 mb-4 box-shadow">
              <img class="card-img-top" src="img/gym.jpg" alt="gym">
              <div class="card-body">
                <h5 class="text-muted">Yon Yee</h5>
                <p class="card-text">The gym facility is large and clean. Would recommend.</p>
                <div class="d-flex justify-content-between align-items-center">
                  <small class="text-muted">15 mins</small>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="row py-3">
          <div class="col-md-4">
            <div class="card h-100 mb-4 box-shadow">
              <img class="card-img-top" src="img/cycle.jpg" alt="cycling">
              <div class="card-body">
                <h5 class="text-muted">Nick Tan</h5>
                <p class="card-text">Love the cyclking session. Intense and fun.</p>
                <div class="d-flex justify-content-between align-items-center">
                  <small class="text-muted">23 mins</small>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card h-100 mb-4 box-shadow">
              <img class="card-img-top" src="img/swim.jpg" alt="swim">
              <div class="card-body">
                <h5 class="text-muted">Ben Dover</h5>
                <p class="card-text">I use to be scared of swimming, after a few session with the instructor, I can say I can save lives.</p>
                <div class="d-flex justify-content-between align-items-center">
                  <small class="text-muted">24 mins</small>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card h-100 mb-4 box-shadow">
              <img class="card-img-top" src="img/cycle.jpg" alt="cycling">
              <div class="card-body">
                <h5 class="text-muted">Mike Oxlong</h5>
                <p class="card-text">I love the cycle session with the instructor. She knows how to spice the workout.</p>
                <div class="d-flex justify-content-between align-items-center">
                  <small class="text-muted">29 mins</small>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="row py-3">
          <div class="col-md-4">
            <div class="card h-100 mb-4 box-shadow">
              <img class="card-img-top" src="img/sitnyp.jpg" alt="nyp_campus">
              <div class="card-body">
                <h5 class="text-muted">Faithio</h5>
                <p class="card-text">I love the location of the gym. It is very accessible for student.</p>
                <div class="d-flex justify-content-between align-items-center">
                  <small class="text-muted">34 mins</small>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card h-100 mb-4 box-shadow">
              <img class="card-img-top" src="img/gym.jpg" alt="gym">
              <div class="card-body">
                <h5 class="text-muted">Koh Pee Oh</h5>
                <p class="card-text">Clean faclit and equipment. My buddies enjoy working out here. Would Recommend 10/10</p>
                <div class="d-flex justify-content-between align-items-center">
                  <small class="text-muted">47 mins</small>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card h-100 mb-4 box-shadow">
              <img class="card-img-top" src="img/sitnyp.jpg" alt="nyp_campus">
              <div class="card-body">
                <h5 class="text-muted">Jian Rong Rong</h5>
                <p class="card-text">Great Location for students. It is located at NYP campus and its very accessible to all SIT students</p>
                <div class="d-flex justify-content-between align-items-center">
                  <small class="text-muted">59 mins</small>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>  
    </div>
  </main>

  <?php
  include "footer.inc.php";
  ?>
  <script defer src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous">
  </script>
  <!--Bootstrap JS-->
  <script defer src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm" crossorigin="anonymous">
  </script>
  <script defer src="js/scripts.js"></script>


</html>