<!DOCTYPE html>
<html lang="en-GB">

<head>
    <link rel="stylesheet" href="css/styles.css">
    <title>SIT Active Gym Locations</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script defer src="js/scripts.js"></script>
</head>

<?php
include "nav.inc.php";
?>

<body>
    <!--<header class="about-section text-center">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-lg-8">
                    <h2 class="text-white mb-4">Locations</h2>
                    <p class="text-white-50">
                        Find a gym near you
                    </p>
                </div>
            </div>
        </div>
    </header> -->

    <header class="about-section text-center">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 ">
                <div class="col-lg-8" style="text-align: left;">
                    <h4 style="color: red;">Locations</h4>
                    <h1 class="text-white mb-4">Find a gym near you </h1>
                </div>
            </div>
        </div>
    </header>

  
    <main class ="container">
        <section id="maps">
            <h2>6 Locations</h2>
                <div class ="row">
                <article class="col-sm">
                    <h5 class="view">View all locations on map</h5>
                    <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1WKqrR1eSDbEUGRTD6MtdDnTMbgEJcM8&ehbc=2E312F" width="800" height="480">

                    </iframe>
                    
                </article>
                    
                </div>
            </div>   
       
        </section>
    </main>


















</body>
<?php
include "footer.inc.php";
?>



</html>