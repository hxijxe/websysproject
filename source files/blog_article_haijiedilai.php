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
                    <h4 style="color: red;">Hai Jie Di Lai</h4>
                    <p class="text-white mb-4">Hai Jie's experience in SIT Gym</p>
                </div>
            </div>
        </div>
    </header>

    <div class="container">
        <!-- Poster Image -->
        <div class= "row">
        <img class="img-fluid" src="img/swim.jpg" alt="swim">
        </div>

        <!-- Article -->
        <div class= "row" style="padding-top: 5rem">
            <h3>Introduction</h3>
            <p>Chart.js is one of the most popular charting projects for various reasons. Firstly, it is 
                 lightweight and fast, this means it is easy to install and use, and it does not slow down the
                  website or application as its loading time and page impact are low. Secondly, the charts are 
                  fully responsive, meaning they are automatically resized based on the viewport width. It works
                   well on all devices, including desktops, tablets, and mobile phones. Thirdly, the chart.js 
                   documentation is well organized and provides detailed information on using each feature, allowing 
                   developers to have an easier time implementing charts in their web projects. In addition, due to 
                   its large community of developers, it is easier to get resources for developers who need help while 
                   using Chart.js. Last but not least, Chart.js is compatible with all modern browsers, including mobile 
                   devices, which makes it accessible to a wide range of users.
            </p>
        </div>

        <div class= "row" style="padding-top: 5rem">
            <h3>Conclusion</h3>
            <p>Chart.js is one of the most popular charting projects for various reasons. Firstly, it is 
                 lightweight and fast, this means it is easy to install and use, and it does not slow down the
                  website or application as its loading time and page impact are low. Secondly, the charts are 
                  fully responsive, meaning they are automatically resized based on the viewport width. It works
                   well on all devices, including desktops, tablets, and mobile phones. Thirdly, the chart.js 
                   documentation is well organized and provides detailed information on using each feature, allowing 
                   developers to have an easier time implementing charts in their web projects. In addition, due to 
                   its large community of developers, it is easier to get resources for developers who need help while 
                   using Chart.js. Last but not least, Chart.js is compatible with all modern browsers, including mobile 
                   devices, which makes it accessible to a wide range of users.
            </p>
        </div>

        <!-- Related articles -->
        <div class= "row" style="padding-top:5rem">
            <h2>Related articles</h2>
            <div class="col-md-4">
            <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="img/yoga.jpg" alt="swim">
                <div class="card-body">
                <h5 class="text-muted">Lee Shee Ree</h5>
                <p class="card-text">I love the relaxing yoga sessions. Would recommend and bring my friends here next time</p>
                <div class="d-flex justify-content-between align-items-center">
                <a href="blog_article_haijiedilai.php"class="text-muted" >7 mins</a>
                </div>
                </div>
            </div>
            </div>
            <div class="col-md-4">
            <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="img/gym.jpg" alt="gym">
                <div class="card-body">
                <h5 class="text-muted">Yon Yee</h5>
                <p class="card-text">The gym facility is large and clean. Would recommend.</p>
                <div class="d-flex justify-content-between align-items-center">
                <a href="blog_article_haijiedilai.php"class="text-muted" >15 mins</a>
                </div>
                </div>
            </div>
            </div>

            <div class="col-md-4">
            <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="img/cycle.jpg" alt="cycling">
                <div class="card-body">
                <h5 class="text-muted">Nick Tan</h5>
                <p class="card-text">Love the cyclking session. Intense and fun.</p>
                <div class="d-flex justify-content-between align-items-center">
                <a href="blog_article_haijiedilai.php"class="text-muted" >23 mins</a>
                </div>
                </div>
            </div>
            </div>
        </div>

    </div>


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