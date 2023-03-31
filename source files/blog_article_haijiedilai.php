<!DOCTYPE html>
<html lang="en-GB">

<head>

  <link rel="stylesheet" href="css/styles.css">
  <title>SIT Active Gym Blog</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>

<?php
include "nav.inc.php";
?>

<body>

    <header class="about-section text-center">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 ">
                <div class="col-lg-8" style="text-align: left;">
                    <h1 style="color: red;">Hai Jie Di Lai</h1>
                    <p class="text-white mb-4">Hai Jie's experience in SIT Gym</p>
                </div>
            </div>
        </div>
    </header>

    <main>
        <div class="container">
            <!-- Poster Image -->
            <div class= "row-fluid">
            <img class="img-fluid" src="img/swim.jpg" alt="swim">
            </div>

            <!-- Article Intro -->
            <section class= "row" style="padding-top: 3rem">
                <h2>Introduction</h2>
                <p>Swimming is an excellent form of exercise that has numerous benefits for the mind and body. 
                    Swimming in a facility can be particularly enjoyable due to the access to various amenities and 
                    features. In this review, I will discuss my love for swimming in a facility, 
                    including the reasons why I find it so appealing and the benefits it provides.
                </p>
            </section>

            <!-- Article Conclusion -->
            <section class= "row" style="padding-top: 2rem">
                <h2>Conclusion</h2>
                <p>
                    In conclusion, swimming in a facility is an incredibly enjoyable experience that provides 
                    numerous benefits for the mind and body. The access to amenities and features such as heated pools,
                     sauna, and steam rooms enhance the overall experience and make it a great way to unwind and exercise. 
                     As someone who loves swimming, I highly recommend trying out a facility to experience the joy and 
                     benefits of swimming in a new way.
                </p>
            </section>

            <!-- Related articles -->
            <section class= "row py-3" >
                <h2>Related articles</h2>

                <!-- Article 1 -->
                <div class="col-md-4">
                <div class="card h-100 mb-4 box-shadow">
                    <img class="card-img-top" src="img/yoga.jpg" alt="swim">
                    <div class="card-body">
                    <h3 class="text-muted">Lee Shee Ree</h3>
                    <p class="card-text">I love the relaxing yoga sessions. Would recommend and bring my friends here next time</p>
                    <div class="d-flex justify-content-between align-items-center">
                    <a href="blog_article_haijiedilai.php" class="text-muted" >7 mins</a>
                    </div>
                    </div>
                </div>
                </div>

                <!-- Article 2 -->
                <div class="col-md-4">
                <div class="card h-100 mb-4 box-shadow">
                    <img class="card-img-top" src="img/gym.jpg" alt="gym">
                    <div class="card-body">
                    <h3 class="text-muted">Yon Yee</h3>
                    <p class="card-text">The gym facility is large and clean. Would recommend.</p>
                    <div class="d-flex justify-content-between align-items-center">
                    <a href="blog_article_haijiedilai.php" class="text-muted" >15 mins</a>
                    </div>
                    </div>
                </div>
                </div>

                <!-- Article 3 -->
                <div class="col-md-4">
                <div class="card h-100 mb-4 box-shadow">
                    <img class="card-img-top" src="img/cycle.jpg" alt="cycling">
                    <div class="card-body">
                    <h3 class="text-muted">Nick Tan</h3>
                    <p class="card-text">Love the cycling session. Intense and fun.</p>
                    <div class="d-flex justify-content-between align-items-center">
                    <a href="blog_article_haijiedilai.php" class="text-muted" >23 mins</a>
                    </div>
                    </div>
                </div>
                </div>
            </section>
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