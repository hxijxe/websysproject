<!DOCTYPE html>
<html lang="en-GB">
    <head>
        <link rel="stylesheet" href="css/styles.css">
        <title>SIT Active Gym Classes</title>
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
        <section class="about-section text-center">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8">
                        <h2 class="text-white mb-4">Classes</h2>
                        <p class="text-white-50">
                            Book your class shift now!
                        </p>
                    </div>
                </div>
                <img class="img-fluid" src="assets/img/ipad.png" alt="..." />
            </div>
        </section>
        <div>
            <label for="location">Location</label>
            <select name="location" id="location">
                <option value="Dover">Dover</option>
                <option value="NP">NP</option>
                <option value="NYP">NYP</option>
                <option value="RP">RP</option>
                <option value="SP">SP</option>
            </select>
        </div>
        <div>
            <label for="classes">Class</label>
            <select name="classes" id="classes">
                <option value="Gym">Gym</option>
                <option value="Yoga">Yoga</option>
                <option value="Zumba">Zumba</option>
            </select>
        </div>

    </body>
</html>
